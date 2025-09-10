<?php
require 'ClassAutoLoad.php';

// values from signup form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name  = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : ''; // you can save this to DB later

    //validation
    if (empty($name) || empty($email)) {
        die("Name and Email are required.");
    }

    //email content
    $mailCnt = [
        'name_from' => 'ICS Academy',
        'mail_from' => 'your-smtp-username@example.com', // must match your SMTP user
        'name_to'   => $name,
        'mail_to'   => $email,
        'subject'   => 'Welcome to ICS Academy. Account Verification',
        'body'      => "Hello <b>$name</b>,<br>Welcome to ICS Academy!<br>Your account has been created.<br>Study hard this academic year!!<br><br>Best Regards,<br>ICS Academy Team."
    ];

    //Send email
    $ObjSendMail = new SendMail();
    $ObjSendMail->Send_Mail($conf, $mailCnt);

    //confirmation
    echo "Signup successful! A confirmation email has been sent to $email.";
} else {
    echo "Invalid request.";
}
