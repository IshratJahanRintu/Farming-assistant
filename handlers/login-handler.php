<?php
session_start();
include_once 'Database.php';
include_once '../classes/users/user.php';
include_once '../classes/users/farmer.php';
include_once '../classes/users/admin.php';
include_once '../classes/users/customer.php';
include_once '../classes/users/agriculturist.php';
include_once 'UserFactory.php';
if (isset($_POST['phone']) && isset($_POST['login_password'])) {
    echo   $login_info['phone_number'] = $_POST['phone'];
    echo  $login_info['password'] = $_POST['login_password'];




    $user = new user();
    $user->login($login_info);
}