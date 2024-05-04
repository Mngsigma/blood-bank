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
  <!-- Links -->
  <ul class="navbar-nav" >
    <li class="nav-item">
      <a style='color:white;' class="nav-link" href="plogout.php">Logout</a>
    </li>
    <li class="nav-item">
      <a style='color:white;' class="nav-link" href="bbhome.php">Home</a>
    </li>
    <li class="nav-item">
      <a style='color:white;' class="nav-link" href="pdash.php">Dashboard</a>
    </li>
   
  </ul>
</div>

</nav>
</div>




<div id="demo" class="carousel slide" data-bs-ride="carousel">

<!-- Indicators/dots -->
<div class="carousel-indicators">
  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
</div>

<!-- The slideshow/carousel -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="image_downloader_1712398003930.jpg" alt="Los Angeles" style="height: 300px;" class="d-block w-100">


</div>
  <div class="carousel-item">
    <img src="image_downloader_1712397652806.jpg" alt="Chicago" style="height: 300px;" class="d-block w-100">
  </div>
  <div class="carousel-item">
    <img src="image_downloader_1712398043243.jpg" alt="New York" style="height: 300px;" class="d-block w-100">
  </div>
</div>

<!-- Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
  <span class="carousel-control-next-icon"></span>
</button>
</div>


<div class="col-md-4">
    
</div>
<div class="col-md-4"> <br> <br>
<form method='POST'> 
      Patient Blood Group: <br> <select name="t0" class='form-select' style='width:60%'; id="">
        <option value="o+">o+</option>
        <option value="o-">o-</option>
        <option value="a-">a-</option>
        <option value="a+">a+</option>
        <option value="b-">b-</option>
        <option value="b+">b+</option>
        <option value="ab+">ab+</option>
        <option value="ab-">ab-</option>
        

      </select>
      Units: <br><input type='text'  name='t1' style='width: 60%;' class='form-control'> 
       Reason... ? <br><input type='text' name='t2' style='width: 60%; height:70px; ' class='form-control'> 
        <br>  <input type='submit' value='Submit' style='width:60%;' class='btn btn-success'>
       </form>

       <?php
         session_start();
         if(isset($_SESSION['p_id'])==false)
         {
            echo"<script>window.location='patientlogin.php'</script>";
         }
        
    ?>

<?php


$p_id=$_SESSION['p_id'];
    if(isset($_POST['t1'])==true)
    { 
      $a=$_POST['t0'];
      $b=$_POST['t1'];
      $c=$_POST['t2'];
      $d=1;
     
     

      $con=mysqli_connect('localhost','root','123456789','bbdb','3306');
      $j="insert into request values('$p_id','$b','$a','$c','$d')";
      $rs=mysqli_query($con,$j);
      if($rs)
      {
         echo"<br><h1> Request go for ADMIN approval...!!</h1>";
      }
      else
      {
         echo"whts that brother eoorroorr...!!";
      }

    }


   
?>
</div>
<div class="col-md-4">
    
</div>




</body>
</html>



 
