<?php
//set timezone
$conf['site_timezone'] = "Africa/Nairobi";

$conf['site_name'] = 'ICS Academy';
$conf['base_url'] = 'http://localhost/my_php_app/';
$conf['site_email'] = 'info@icsacademy.com';

//site language
$conf['site_lang'] = 'en';

//database constants
$conf['DB_TYPE'] = 'mysqli';
$conf['DB_HOST'] = 'localhost';
$conf['DB_USER'] = 'root';       
$conf['DB_PASS'] ='root';
$conf['DB_NAME'] = 'iap_db';

// Email configuration
$conf['mail_type'] = 'smtp'; // mail or smtp
$conf['smtp_host'] = 'smtp.gmail.com'; // SMTP Host Address
$conf['smtp_user'] = 'natmalwa77@gmail.com'; // SMTP Username
$conf['smtp_pass'] = 'rvfn jrbb blut phsc'; // SMTP Password
$conf['smtp_port'] = 465; // SMTP Port - 587 for tls, 465 for ssl
$conf['smtp_secure'] = 'ssl'; // Encryption - ssl or tls


try {
    $pdo = new PDO(
        "mysql:host={$conf['DB_HOST']};dbname={$conf['DB_NAME']}",
        $conf['DB_USER'],
        $conf['DB_PASS']
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully to {$conf['DB_NAME']}";
} catch (PDOException $e) {
    die("DB Connection failed: " . $e->getMessage());
}