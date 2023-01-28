<?php
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
</head>
<body>

<div class="container mt-3">
  <div >

    <?php
      if($id == 1){
        ?>
        <div class="alert alert-success" role="alert">
        <strong>Signed In Successfully!</strong> 
        
      </div>
      <?php
      }

      elseif($id == 3){
        ?>
        <div class="alert alert-success" role="alert">
        <strong>Signed Up Successfully!</strong> 

      </div>
      <?php
      }
    ?>
  </div>
</div>

</body>
</html>
