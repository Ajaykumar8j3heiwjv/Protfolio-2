<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = $_POST["name"];
    $email   = $_POST["email"];
    $message = $_POST["message"];

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'smilyboy2207@gmail.com';           // 🔁 Replace with your Gmail
        $mail->Password   = 'atmo vzjj gglg fmtr';        // 🔁 Use App Password, not Gmail password!
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Recipients
        // Sender
        $mail->setFrom('smilyboy2207@gmail.com', 'Portfolio Website');
        $mail->addReplyTo($email, $name);
        $mail->addAddress('smilyboy2207@gmail.com'); // your own inbox

        // Content (same as before)

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New message from Portfolio';
        $mail->Body    = "
            <strong>Name:</strong> $name<br>
            <strong>Email:</strong> $email<br>
            <strong>Message:</strong><br>$message
        ";

        $mail->send();
        echo "Message has been sent successfully!";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
