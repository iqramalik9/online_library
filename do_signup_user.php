<?php
require_once('database.php');

$db = new Database();

$uname = $_POST['name'];
$uemail = $_POST['email'];
$upass = md5($_POST['password']);

$res = $db->signupUser($uname, $uemail, $upass);

if($res === true){
    header('location:user_homepage.php?rid=3');
}
else{
    header('location:signup_user.php?rid=4');
}
?>