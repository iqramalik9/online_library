<?php
class Database{
    private $db;

    function __construct(){
        try{
            $this->db = new PDO("mysql:host=localhost;dbname=online_library",
                "root",
                "");
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);;
        
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    } 

    function signupUser($uname, $uemail, $upass){
        try{
            $sql = "INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`,`user_created_at`) VALUES (NULL, ?, ?,?,current_timestamp());";
            $st = $this->db->prepare($sql);
            $st->execute(array($uname, $uemail, $upass));
            return true;
        }
        catch(PDOException $e){
            return false;
        }        
    }
    function signinUser($uname, $uemail, $upass){
        $sql = "SELECT user_id FROM `users` WHERE `user_name` = ? AND `user_email` = ? AND `user_password`=? ;";
        $st = $this->db->prepare($sql);
        $st->execute(array($uname, $uemail, $upass));

        if($st->rowCount() == 1 ){
            return true;
        }
        else{
            false;
        }
    }
    function signinAdmin($uname, $uemail, $upass){
        $sql = "SELECT admin_id FROM `admins` WHERE `admin_name` = ? AND `admin_email` = ? AND `admin_password`=? ;";
        $st = $this->db->prepare($sql);
        $st->execute(array($uname, $uemail, $upass));

        if($st->rowCount() == 1 ){
            return true;
        }
        else{
            false;
        }
    }

    function insertnewBook($bname, $bisbn, $bauthor, $bprice)
    {
        try{
            $sql = "INSERT INTO `books` (`book_id`, `book_name`, `book_isbn`, `book_author_name`,`book_price`) VALUES (NULL, ?, ?,?,?);";
            $st = $this->db->prepare($sql);
            $st->execute(array($bname, $bisbn, $bauthor, $bprice));
            return true;
        }
        catch(PDOException $e){
            return false;
        }  
    }
    function displayBooks(){
        $sql = "SELECT * FROM books";
        $st = $this->db->prepare($sql);
        $st->execute(array());
        return $st;
    }

    function deleteBook($id){
        $sql = "DELETE FROM `books` WHERE `book_id` = ?;";
        $st = $this->db->prepare($sql);
        $st->execute(array($id));
    }
    function searchBook($id)
    {
        $sql= "SELECT * FROM `books` WHERE `book_id` = ?;";
        $st=$this->db->prepare($sql);
        $st->execute(array($id));
        return $st;
    }
    function updateBook($id,$bname, $bisbn,$bauthor,$bprice)
    {
        try{

$sql="UPDATE `books` SET `book_name`='?',`book_isbn`='?',`book_author_name`='?',`book_price`='?' WHERE `book_id`=?;";
$st = $this->db->prepare($sql);
$st->execute(array($bname, $bisbn, $bauthor, $bprice));
return true;
}
catch(PDOException $e){
return false;
} 
    }
}
    ?>
