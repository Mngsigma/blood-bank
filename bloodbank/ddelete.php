<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<div class="row">

<div class="col-md-12">









    <nav class="navbar navbar-expand-sm bg-light">

        <div class="container-fluid"style='background-color:green;'>
        <div class="navbar-header">
      <a class="navbar-brand" style="color:white"; href="#">BlooD DekhO Ji</a>
    </div>
          <!-- Links -->
          <ul class="navbar-nav" >
            <li class="nav-item">
              <a style='color:white;' class="nav-link" href="bbhome.php">Home</a>
            </li>
            <li class="nav-item">
              <a style='color:white;' class="nav-link" href="bbhome.php">Home</a>
            </li>
            <li class="nav-item">
              <a style='color:white;' class="nav-link" href="donorlist.php">Donor List</a>
            </li>
           
              
          </ul>
        </div>
      
      </nav>
</div>



<?php
      $a=$_GET['id'];
      $con=mysqli_connect('localhost','root','123456789','bbdb','3306');
      $j="delete from donation where donar_id='$a'";
      $rs=mysqli_query($con,$j); 
      if($rs)
      {
        echo"<h1>Deleted Successfully....!</h1>";
      }
     else{echo"<h1>erro on delete</h1>";}
?>






</body>
</html>

