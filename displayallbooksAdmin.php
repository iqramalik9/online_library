<?php
require_once('database.php');
$db= new Database();

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>AlphaRead</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/util.css">
</head>
<body>

<div id="container">

<!--Nav Bar to show menus-->
<div class="clear" id="nav-bar">
    <ul>
        <li>
        <div id="logo">
                <img src="images/alpharead-rbg-logo.png"  alt="logo">
            </div>

        </li>          
        <li>
        <div id="home">
            <a href="homepage.php">Home</a>
            </div>
        </li>
        <li>
            <div id="about">                 
            <a href="about.php">About</a>
        </div>
        </li> 
        <li>
  <div class="container-login100-form-btn" id="signin">
  <button  class="login100-form-btn"  onclick="window.location.href = 'signin_user.php'">
      Sign Out
    </button>
    </div>
        </li>             
    </ul>

</div>
<div class="clear" id="nav-bar">
    <ul>
           
        <li>
        <div id="dashboard">
            <a href="user_dashboard.php">Dashboard</a>
            </div>
        </li>
        <li>
            <div id="dashboard">                 
            <a href="insertnewbook.php">Add New Book</a>
        </div>
        </li>
        <li>
            <div id="dashboard">                 
            <a href="displayallbooksAdmin.php">See All available Books</a>
        </div>
        </li>
        <li>
</ul>
</div>
<div class="container mt-3">
<h2 style="font-size:50px; font-family:'Times New Roman', serif; text-align:center">All Available Books</h2>
<table class="table table-bordered" style="border:3px solid black">
    <tr>
        <th>Book ID</th>
        <th>Book Name</th>
        <th>Book ISBN</th>
        <th>Book Author</th>
        <th>Book Price($)</th>
        <th>Delete Books</th>
        <th>Update Books</th>
    </tr>
   <?php
$st = $db->displayBooks();
foreach($st as $row){
    print("<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td>");
    print("<td><a href=\"do_deletebook.php?book_id=$row[0]\"class=\"btn btn-danger\">Delete</a></td>");
    print("<td><a href=\"updatebook.php?book_id=$row[0]\"class=\"btn btn-primary\">Update</a></td>");
    print('</tr>');
}
?>
</table>
</div>


</body>
</html>
