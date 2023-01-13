<?php
session_start();

$message = '';

    if ($_SESSION['user']) {
        $_SESSION['message'] = 'Пользователь: ' . $_SESSION['user']['login'] . ' - авторизован';
          header('Location: /user');
    }

    if ($_SESSION['message']) {
        $message .= '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
        }
    unset($_SESSION['message']);

require_once($_SERVER['DOCUMENT_ROOT']."/templates/main.html");

?>