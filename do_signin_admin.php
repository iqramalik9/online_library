<?php
require_once('database.php');

$db = new Database();

$uname = $_POST['name'];
$uemail = $_POST['email'];
$upass = $_POST['password'];


$res = $db->signinAdmin($uname, $uemail, $upass);

if($res === true){
    setcookie('logged_in', true);
    header('location:admin_homepage.php?rid=1');
}
else{
    header('location:signin_admin.php?rid=2');
}