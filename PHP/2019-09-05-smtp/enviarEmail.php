<?php 
include_once('phpmailer/src/PHPMailer.php');
include_once('phpmailer/src/SMTP.php');
include_once('phpmailer/src/Exception.php');

 
    $mail = new PHPMailer\PHPMailer\PHPMailer();

    $mail->IsSMTP(); // enable SMTP

    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "tiaocaminhoneiro19@gmail.com";
    $mail->Password = "tiao1234";
    $mail->SetFrom("tiaocaminhoneiro19@gmail.com");
    $mail->Subject = "titulo";
    $mail->Body = "Recebemos uma mensagem no site <br/>
			<strong>Nome:</strong> variavel nome <br/>
			<strong>e-mail:</strong> variavel email <br/>
			<strong>mensagem:</strong> mensagem";
    $mail->AddAddress("lemeluciano@hotmail.com");


     if(!$mail->Send()) {
        echo "descricao do erro: " . $mail->ErrorInfo;
     } else {
        echo "Email Enviado";
     }
?>