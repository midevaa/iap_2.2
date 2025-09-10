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
$conf['DB_PASS'] ='';
$conf['DB_NAME'] = 'fol';

// Email configuration
$conf['mail_type'] = 'smtp'; // mail or smtp
$conf['smtp_host'] = 'smtp.gmail.com'; // SMTP Host Address
$conf['smtp_user'] = 'natmalwa77@gmail.com'; // SMTP Username
$conf['smtp_pass'] = ''; // SMTP Password
$conf['smtp_port'] = 465; // SMTP Port - 587 for tls, 465 for ssl
$conf['smtp_secure'] = 'ssl'; // Encryption - ssl or tls