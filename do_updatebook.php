<?php


require_once('database.php');
$db=new Database();
$id=$_POST['id'];
$bname= $_POST['name'];
$bisbn=$_POST['isbn'];
$bauthor=$_POST['author'];
$bprice=$_POST['price'];

$res=$db->updateBook($id,$bname, $bisbn,$bauthor,$bprice);

    header('location:displayallbooksAdmin.php');



?>