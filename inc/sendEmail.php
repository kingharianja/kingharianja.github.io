<?php

$name = $_POST['contactName'];
$email = $_POST['contactEmail'];
$subject = $_POST['contactSubject'];
$message = $_POST['contactMessage'];

    function send_mail($email,$message,$subject)
    { 
    require_once('mailer/class.phpmailer.php');
    $mail = new PHPMailer();
    $mail->IsSMTP(); 
    $mail->SMTPDebug  = 0;                     
    $mail->SMTPAuth   = true;                  
    $mail->SMTPSecure = "ssl";                 
    $mail->Host       = "smtp.gmail.com";      
    $mail->Port       = 465;             
    $mail->AddAddress($email);
    $mail->Username="codepuisi@gmail.com";  
    $mail->Password="erzascarlet";            
    $mail->SetFrom('codepuisi@gmail.com','Code Puisi');
    $mail->AddReplyTo("codepuisi@gmail.com","Code Puisi");
    $mail->Subject    = $subject;
    $mail->MsgHTML($message);
    $mail->Send();
    }
    $message = "Nama: $name <br> Email : $email <br> Subject : $subject <br> Message : $message";
    send_mail('rmharianja@gmail.com',$message,$subject); 
    echo "OK";