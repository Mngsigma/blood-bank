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
      <a style='color:white;' class="nav-link" href="donorlist.php">Donors List</a>
    </li>
    <li class="nav-item">
      <a style='color:white;' class="nav-link" href="adrequest.php">Donor Request</a>
    </li>
    <li class="nav-item">
      <a style='color:white;' class="nav-link" href="plist.php">Patients List</a>
    </li>

    <li class="nav-item">
        <a style='color:white;' class="nav-link" href="aprequest.php">Patient Request</a>
      </li>
      <li class="nav-item">
        <a style='color:white;' class="nav-link" href="logout.html">About</a>
      </li>
      
  </ul>
</div>

</nav>
</div>






<div class="row">

<h1>WEL-COME ADMIN</h1>

<?php
   $con=mysqli_connect('localhost','root','123456789','bbdb','3306');
   $j="select * from stocks";
   $rs=mysqli_query($con,$j);
  
   while($row=mysqli_fetch_array($rs))
   {
     echo"
          <div class='col-md-2'>
     <div class='card' style='width:150px; background-color:red;'>
    
     <div class='card-body'  >
       <h1  style='color:white' class='card-title'>$row[blood_group]</h1>
       <h6 style='color:white' class='card-text'>total stock :  </h6><h3 style='color:yellow' class='card-text' >$row[stock]</h3>
       
       
     </div>
   </div>
         
     </div> "; 

   }

   
?>
       
     



</div>

</body>
</html>



 
