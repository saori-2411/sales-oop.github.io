<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    header('Location: ../views/dashboard.php');
    exit;
}

include "../classes/User.php";
$user = new User;
$user->login($_POST);
?>