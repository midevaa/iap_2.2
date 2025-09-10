<?php
require  'ClassAutoLoad.php';
$mailCnt = [
    'name_from' => 'Natalie Mideva',
    'mail_from' => 'natmalwa77@gmail.com',
    'name_to' => 'Natalie Malwa',
    'mail_to' => 'natalie.malwa@strathmore.edu',
    'subject' => 'Welcome to ICS Academy',
    'body' => 'This is a new semester, <b>Study Hard!</b>'
];
$ObjSendMail->Send_Mail($conf, $mailCnt);