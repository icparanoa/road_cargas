<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require './autoload.php';

$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com'; // Substitua pelo seu servidor SMTP
$mail->Port = 587; // A porta pode variar, dependendo das configurações do seu servidor SMTP
$mail->SMTPAuth = true;
$mail->Username = 'emedigitalmkt@gmail.com'; // Substitua pelo seu endereço de e-mail
$mail->Password = 'xnsb pquv ypyn wjse'; // Substitua pela sua senha de e-mail

// Configurações adicionais
$mail->setFrom('emedigitalmkt@gmail.com', 'Contato');
$mail->addAddress('contato@roadcargas.com.br', 'Contato'); // Destinatário 
$mail->addAddress('mwdigitalmkt@gmail.com');


$mail->Subject = $_POST['assunto']; // Use o valor do formulário para definir o assunto

$body = "Nome: " . $_POST['name'] . "<br>";
$body .= "Telefone: " . $_POST['telefone'] . "<br>";
$body .= "Caminhão: " . $_POST['caminhao'] . "<br>";
$body .= "Região: " . $_POST['regiao'] . "<br>";

$mail->CharSet = 'UTF-8';
$mail->isHTML(true);
$mail->ContentType = 'text/html; charset=UTF-8';

$mail->Body = $body;

if ($mail->send()) {
    header('Location: ../../obrigado.html');
    exit;
} else {
    echo 'Erro ao enviar o e-mail: ' . $mail->ErrorInfo;
}
