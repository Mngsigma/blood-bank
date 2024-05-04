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
   $l=$_SESSION['dn_id'];
   $n="select * from donation where donar_id='$l'";
   $rs2=mysqli_query($con,$n);
   $f=0;
   $g=0;
   if($row4=mysqli_fetch_array($rs2))
   {
    $f=$row4['blood_group'];
    
    $g=$row4['unit'];
    echo" stock success...$row4[unit] $row4[blood_group]";
    
   }

    $ns="select * from stocks where blood_group='$f'";
    
    $ns1=mysqli_query($con,$ns);
    $r11=0;
    $r12=0;
    if($ns2=mysqli_fetch_array($ns1))
    {
      $r11=$ns2['stock'];
    
    }
    $r12=$r11+$g;
    echo"$r12";
   $m="update stocks set stock='$r12' where blood_group='$f'";
    $rs11=mysqli_query($con,$m);
  
   $k="update donation set status=2 where donar_id='$l'";
   $rs1=mysqli_query($con,$k);
  
   $j="select * from donation where donar_id='$l' ";
   $rs=mysqli_query($con,$j);
   if($row=mysqli_fetch_array($rs))
   {
    
    $_SESSION['bu']=$row['unit'];
   
   }
   echo"<h1>Accept Successfull</h1>";
?>
       
     
</div>
<div class="col-md-1">
    
</div>




</body>
</html>



 
