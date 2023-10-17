

<?php

    // Retrieve the form data
    $email=$_POST["email"];
    $subject=$_POST["subject"];
    $message=$_POST["message"];
    
    require "../../vendor/autoload.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;

    $mail = new PHPMailer(true);  


    $mail->isSMTP();
    $mail->SMTPAuth =true;

        $mail->Host = 'smtp.gmail.com'; // SMTP server address
        $mail->SMTPSecure =PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587; // TCP port to connect to

        $mail->Username = 'buddima60@gmail.com'; // SMTP username
        $mail->Password = 'ruizpiiibzfpcdnj'; // SMTP password
        
        
    $mail->setFrom($email);
    $mail->addAddress("$email");

    $mail->Subject = $subject;
    $mail->Body=$message;

    $mail->send();

    header("location:emailsent.html");

?>