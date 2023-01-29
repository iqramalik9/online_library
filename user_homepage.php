<?php
if(!isset($_COOKIE['logged_in']))
header('location:signin_user.php?rid=5');
$id =$_GET['rid'];  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/util.css">
</head>
<body>

<div class="container">
  <div >

    <?php
      if($id == 1){

        ?>
        <div class="alert alert-success" role="alert">
        <strong>Signed In Successfully!</strong> 
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
        
      </div>
      <?php
      }

      elseif($id == 3){
        ?>
        <div class="alert alert-success" role="alert">
        <strong>Signed Up Successfully!</strong> 
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 

      </div>
      <?php
      }
    ?>
   
  </div>
</div>
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
            <a href="displayallbooksUser.php">See All available Books</a>
        </div>
        </li>
        <li>
    </ul>
    </div>


        
        <div class="image">
             <img  src="images/library.jpeg" alt="books">
            </div>
            <div class="main-content">
                <h3>Alpha Read</h3>
                <p>World's biggest E library providing you with a bundle of books from all around the World.
                    Get your desired book from Alpha Read. Subscribe to this website and become one of the Alpha Reader. Become a part of 
                    Alpha Reader Community and contribute to the world.</p>
            </div>

</body>
</html>
