<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    ?>
    
    <!DOCTYPE html>
    <html>
    <head>
        <title>Message Received</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f5f5f5;
                padding: 30px;
            }
            .message-box {
                background-color: #fff;
                padding: 25px;
                max-width: 600px;
                margin: 50px auto;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
                border-radius: 10px;
            }
            h2 {
                color: #3a86ff;
            }
            p {
                margin: 10px 0;
            }
        </style>
    </head>
    <body>
        <div class="message-box">
            <h2>✅ Message Received!</h2>
            <p><strong>Name:</strong> <?= $name ?></p>
            <p><strong>Email:</strong> <?= $email ?></p>
            <p><strong>Subject:</strong> <?= $subject ?></p>
            <p><strong>Message:</strong><br><?= nl2br($message) ?></p>
        </div>
    </body>
    </html>

    <?php
} else {
    echo "No data submitted.";
}
?>
