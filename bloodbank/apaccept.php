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
              <a style='color:white;' class="nav-link" href="admindash.php">Admin Dashboard</a>
            </li>
            <li class="nav-item">
              <a style='color:white;' class="nav-link" href="bbhome.php">Home</a>
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


<div class="col-md-1">
    
</div>
<div class="col-md-10"> <br> <br>
 <br>

<?php
   $con=mysqli_connect('localhost','root','123456789','bbdb','3306');
   session_start();
   $l=$_SESSION['pn_id'];
   $n="select * from request where patient_id='$l'";
  
   $rs2=mysqli_query($con,$n);
   $i1=0;
    $i2=0;
   if($row=mysqli_fetch_array($rs2))
   {
    $i1=$row['blood_group'];
    $i2=$row['no_unit'];


   }
     
    $i="select * from donation where blood_group='$i1' ";
    $rs3=mysqli_query($con,$i);
    $i4=0;
    $i3=0;
        if($row5=mysqli_fetch_array($rs3))
          { $i4=$row5['unit'];
            $i3=$row['no_unit'];
          }
          
    $i5=$i4-$i3;
           $m="update donation set unit='$i5' where blood_group='$i1'";
          
          
   

    $m2="select * from stocks where blood_group='$i1'";
    $rs4=mysqli_query($con,$m2);
    $Q1=0;
      $Q2=0;
      
    if($row6=mysqli_fetch_array($rs4))
    {
      $Q1=$row6['stock'];
      $Q2=$row['no_unit'];
    }
   
      $Q3=$Q1-$Q2;
      
      $Q4="update stocks set stock='$Q3' where blood_group='$i1'";
      $rs46=mysqli_query($con,$Q4);
    
    $m1="update request set status=2 where blood_group='$i1'";
    $rs46=mysqli_query($con,$m1);
 
  
  echo"<h1>Accepted Successfulyy....</h1>"
  
?>
       
     
</div>
<div class="col-md-1">
    
</div>




</body>
</html>



 
