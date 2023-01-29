

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
            <a href="displayallbooksUser.php">See All available Books</a>
        </div>
        </li>
        <li>
</ul>
</div>

</body>
</html>
