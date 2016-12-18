<?php

if (!defined('ROOT')) {
    require_once $_SERVER['ROOT_PATH'] . $_SERVER['ERROR_PATH'];
}

require_once ROOT . 'helperclass/valid.php';
require_once ROOT . 'helperclass/str.php';
require_once ROOT . 'helperclass/cf.php';
require_once ROOT . 'helperclass/db_pdo.php';

$valid = new valid();

if ($valid->email($_POST['email_email'])) {

    $str = new str();
    $cf = new cf();
    $db = new db_pdo();
    $db->connect($this->DB['cc7']);

    $query = 'INSERT INTO contact(contact_date,contact_name,contact_email,contact_msg)
            VALUES(:contact_date,:contact_name,:contact_email,:contact_msg)';

    $bind = [
        ':contact_date' => $cf->localDate(),
        ':contact_name' => preg_replace('[^a-zA-Z ]', '', $_POST['email_name']),
        ':contact_email' => $_POST['email_email'],
        ':contact_msg' => $str->htm_enc($_POST['email_msg'])
    ];

    $qr_arr = [
        'result' => true,
    ];

    $result = $db->qber($query, $bind, $qr_arr);

    if ($result[0] === 'success') {
        echo '<div class="msg msg_success">Mail Sent. We will get back to you soon.</div>';
    } else {
        echo '<div class="msg msg_alert">Unable to send mail. Please email to support@clubcoding.com</div>';
    }
} else {
    echo '<div class="msg msg_alert">Enter Your Email</div>';
}
?>