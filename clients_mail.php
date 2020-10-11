<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    date_default_timezone_set("Asia/Kolkata");

    

    
function send_email($email,$message,$subject,$sender_email,$sender_password){
    $mail = new PHPMailer;
    $mail->SMTPDebug = 0;                         
    $mail->isSMTP();                                     
    $mail->Host = 'smtp.gmail.com'; 
    $mail->SMTPAuth = true;                   
    $mail->Username   = $sender_email; 
    $mail->Password   = $sender_password;
    $mail->SMTPSecure = 'ssl';                          
    $mail->Port = 465;

    $mail->From = $sender_email;
    $mail->FromName = 'La prestige';
    $mail->addAddress($email);
    //$mail->addAddress('hcv.hemant@gmail.com'); 
    //$mail->addAddress('eezynaukari@googlegroups.com');     // Add a recipient              // Name is optional
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;
   
     if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
}



?>