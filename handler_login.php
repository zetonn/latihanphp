<?php

include_once 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$users = $db->query("SELECT * FROM siswa 
WHERE
username = '$username' AND password = '$password'");

$check_login = $users->fetch_array();

if($check_login[0]){
    session_start();
    $_SESSION['users'] = $check_login;
    header('Location: dashboard.php');
}else {
    echo 'user tidak terdaftar';
    header('Location:login_page.php');
}