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
              <a style='color:white;' class="nav-link" href="prequest.php">Request For Blood</a>
            </li>
            <li class="nav-item">
              <a style='color:white;' class="nav-link" href="bbhome.php">Home</a>
            </li>
            <li class="nav-item">
              <a style='color:white;' class="nav-link" href="plogout.php">Logout</a>
            </li>
            
          </ul>
        </div>
      
      </nav>
</div>


<div class="col-md-3">
<?php
         session_start();
         $xx=$_SESSION['p_id'];
         if(isset($xx)==false)
         {
            echo"<script>window.location='patientlogin.php'</script>";
         }
        
    ?>
</div>
<div class="col-md-8"> <br> <br>
<h2><strong>Wel-Come to Patient Dadhboard</strong></h2>
<?php
     
     
      $con=mysqli_connect('localhost','root','123456789','bbdb','3306');
      $j="select * from request where patient_id='$xx' ";
      $rs=mysqli_query($con,$j); 
      echo"<h3><table class='table-bordered'><tr><td>Blood Request</td><td>Accepted</td><td>Rejected</td></tr> ";
      
     if($row=mysqli_fetch_array($rs))
        {  
            if($row['status']==1) 
            {
            $a=$row['no_unit'];           
            $c='pending';
            $b='pending';
           echo"<tr><td>$a</td><td>$c</td><td>$b</td></tr>";
           $b++;
           $c++;
           
            }
            
            if($row['status']==2) 
            {
            $a=$row['no_unit'];           
            $c=1;
            $b=0;
           echo"<tr><td>$a</td><td>$c</td><td>$b</td></tr>";
           $b++;
           $c++;
           
            }
            if($row['status']==3) 
            {
                $a=$row['no_unit'];
                $c=0;
                $b=1;
               
               echo"<tr><td>$a</td><td>$c</td><td>$b</td></tr>";
               $b++;
               $c++;
            }
        }
        echo"</table></h3>";
?>
 
</div>
<div class="col-md-1">
    
</div>




</body>
</html>



 
