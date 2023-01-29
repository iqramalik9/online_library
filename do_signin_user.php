<?php
require_once('database.php');

$db = new Database();

$uname = $_POST['name'];
$uemail = $_POST['email'];
$upass = md5($_POST['password']);


$res = $db->signinUser($uname, $uemail, $upass);

if($res === true){
    header('location:user_homepage.php?rid=1');
}
else{
    header('location:signin_user.php?rid=2');
    
}
?>