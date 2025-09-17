<?php
require 'ClassAutoLoad.php';

// values from signup form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name  = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : ''; 

    //validation
    if (empty($name) || empty($email)) {
        die("Name and Email are required.");
    }
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Save to database
    try {
        $stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        $stmt->execute([$name, $email, $hashedPassword]);
    } catch (PDOException $e) {
        if ($e->getCode() == 23000) { // duplicate email
            die("This email is already registered.");
        } else {
            die("Database error: " . $e->getMessage());
        }
    }

    //email content
    $mailCnt = [
        'name_from' => 'ICS Academy',
        'mail_from' => 'your-smtp-username@example.com',
        'name_to'   => $name,
        'mail_to'   => $email,
        'subject'   => 'Welcome to ICS Academy. Account Verification',
        'body'      => "Hello <b>$name</b>,<br>Welcome to Tech School!<br>Your account has been created, to verify use the code below to activate it.<br><br>678354<br>Study hard this academic year!!<br><br>Best Regards,<br>Tech School Team."
    ];

    //Send email
    $ObjSendMail = new SendMail();
    $ObjSendMail->Send_Mail($conf, $mailCnt);

    //confirmation
    echo "Signup successful! A confirmation email has been sent to $email.";
} else {
    echo "Invalid request.";
}
