<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/util.css">

    <title>AlphaRead</title>
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

    </ul>
    </div>


  <div class="d-md-flex half">
    <div class="bg" style="background-image: url('images/library-bg.jpeg');"></div>
    <div class="contents">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="form-block mx-auto">
              <div class="text-center mb-5">
              <h3>Add  <strong>New Book</strong></h3>
              </div>
              <form action="do_insertnewbook.php" method="post" id="formname">
                <div class="form-group first">
                  <label for="bookname">Book Name</label>
                  <input type="text" class="form-control" placeholder="Computer Science" id="bookname" name="name">
                </div>
                <div class="form-group last mb-3">
                  <label for="bookisbn">Book ISBN</label>
                  <input type="number" class="form-control" placeholder="ISBN " id="bookisbn" name="isbn">
                </div>
                <div class="form-group first">
                  <label for="authorname">Book Author Name</label>
                  <input type="text" class="form-control" placeholder="David" id="authorname" name="author">
                </div>
                <div class="form-group last mb-3">
                  <label for="bookprice">Book Price($)</label>
                  <input type="number" class="form-control" placeholder="0.0$ " id="bookprice" name="price">
                </div>

                <div class="container-login100-form-btn">
          <button type="submit" class="login100-form-btn" form="formname" value="Submit">
							Add Book
						</button>
					</div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>