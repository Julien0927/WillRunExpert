<?php

session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';
require_once 'config.php';
require_once '../templates/messages.php';

$mail = new PHPMailer(true);

try {
    // Configuration du serveur SMTP
    $mail->isSMTP(); 
    $mail->Host = MAIL_HOST; 
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = MAIL_USERNAME;
    $mail->Password   = MAIL_PASSWORD; 
    $mail->CharSet = 'UTF-8';
    $mail->SMTPSecure = MAIL_ENCRYPTION;            
    $mail->Port       = MAIL_PORT;                                    
    // Destinataires
    $mail->setFrom($_POST['email'], 'Formulaire de Contact');
    $mail->addAddress('willy.physio@gmail.com', 'Willy Bidault');     
    
    // Contenu    
    $mail->isHTML(true);                                
    $mail->Subject = 'Message de WillRunExpert';
    $mail->Body    = 'Prénom: ' . htmlspecialchars($_POST['firstName']) . '<br>
                    Nom: ' . htmlspecialchars($_POST['lastName']) . '<br>
                    Email: ' . htmlspecialchars($_POST['email']) . '<br>
                    Phone: ' . htmlspecialchars($_POST['phone']) . '<br>
                    Nature de la demande: ' . htmlspecialchars($_POST['ask']) . '<br>
                    Description de la situation: ' . htmlspecialchars($_POST['situation']);
    
    $mail->send();
    $_SESSION['message'] = 'Votre message a bien été envoyé.';
} catch (Exception $e) {
    $_SESSION['message'] = "Le message n'a pas pu être envoyé. Erreur: {$mail->ErrorInfo}";
}
echo 'Le message a été envoyé.';
header('Location: /contact.php'); // Redirige vers contact.php
exit();
?>
