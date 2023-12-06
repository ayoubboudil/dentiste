<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Validation minimale
    if (empty($name) || empty($email) || empty($message)) {
        echo "Tous les champs doivent être remplis.";
    } else {
        // Envoi d'un email (exemple simple, vous devrez configurer cela correctement sur un serveur réel)
        $to = "votre@email.com";
        $subject = "Nouveau message de $name";
        $headers = "De : $email";

        mail($to, $subject, $message, $headers);

        echo "Votre message a été envoyé avec succès. Nous vous contacterons bientôt!";
    }
}
?>