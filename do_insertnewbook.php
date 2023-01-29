<?php
require_once('database.php');
$db=new Database();

$bname= $_POST['name'];
$bisbn=$_POST['isbn'];
$bauthor=$_POST['author'];
$bprice=$_POST['price'];

$res=$db->insertnewBook($bname, $bisbn,$bauthor,$bprice);

if($res === true){
    header('location:displayallbooksAdmin.php?rid=7');
}
else{
    header('location:insertnewbook.php?rid=8');
    
}

?>