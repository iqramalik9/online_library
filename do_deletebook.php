<?php

$id = $_GET['book_id'];

require_once('database.php');

$db = new Database();

$res=$db->deleteBook($id);

    header('location:displayallbooksAdmin.php');


?>