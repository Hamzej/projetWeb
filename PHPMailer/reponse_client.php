<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Récupérez les données du formulaire
$email_client = $_POST['email']; // Assurez-vous que c'est le bon champ

$mail_client = new PHPMailer(true);

try {
   // Paramètres du serveur SMTP pour le client (Gmail)
$mail_client->isSMTP();
$mail_client->Host = 'smtp.gmail.com';
$mail_client->SMTPAuth = true;
$mail_client->Username = 'hamzeabdiyoussouf@gmail.com'; // Remplacez par votre adresse Gmail
$mail_client->Password = 'Zakaria2@23J'; // Remplacez par votre mot de passe Gmail
$mail_client->SMTPSecure = 'tls'; // Vous pouvez également utiliser 'ssl' pour le port 465
$mail_client->Port = 587; // Ou utilisez 465 si vous utilisez SSL


    // Destinataire (le client)
    $mail_client->setFrom('hamzeabdiyzrzf@gmail.com', 'Zaki');
    $mail_client->addAddress($email_client); // Utilisez l'adresse e-mail fournie par le client

    // Contenu du message de réponse au client
    $mail_client->isHTML(true);
    $mail_client->Subject = 'Merci pour votre formulaire';
    $mail_client->Body    = 'Merci pour votre formulaire. Nous avons bien reçu vos informations.';

    // Envoyer l'e-mail au client
    $mail_client->send();
    echo 'La réponse au client a été envoyée avec succès.';
} catch (Exception $e) {
    echo "Erreur lors de l'envoi de la réponse au client : {$mail_client->ErrorInfo}";
}
?>
