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


<div class="col-md-3">
    
</div>
<div class="col-md-8"> <br> <br>

<?php
      $con=mysqli_connect('localhost','root','123456789','bbdb','3306');
      $j="select * from donation where status=4  ";
      $rs=mysqli_query($con,$j); 
      echo"<table class='table-bordered'><tr><td>Donar id</td>  <td>Blood Group</td>  <td>Unit</th></td><td>Deases</td><td>Status</td></tr> ";
      session_start();
     while($row=mysqli_fetch_array($rs))
        {
         echo"<tr><td>$row[donar_id]</td><td> $row[blood_group]</td><td>$row[unit]</td><td>$row[deases]</td>";
        
         
           echo"<td>Pending </td>";
         
        
        
         echo"<td><a class='btn btn-success' href='adaccept.php?id=$row[status]'>Accept</a></td> 
        
         <td><a class='btn btn-success' href='adreject.php?id=$row[status] '>Reject</a>  </td>  </tr>";
      
        
         $_SESSION['dn_id']=$row['donar_id'];
      
        }
        echo"</table>";
?>


</div>
<div class="col-md-1">
    
</div>




</body>
</html>



 
