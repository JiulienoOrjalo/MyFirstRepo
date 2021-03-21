<?php  include('server.php') ?>

<?php
if (!isset($_SESSION['username'])) {
   echo "<script>alert('You must login before viewing this page.'); location.href='login.php';</script>";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <link href="assets/img/icon.png" rel="icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">

    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
</head>
<style type="text/css">
  body{
    background-color: #F9F9F9;

  }
  nav{
       background-color: #040b14;
       color: white;
       box-shadow:  10px #888888;
  }
  #comment{
     font-family: Verdana; 
  }
  .card-tittle{
    color: #040b14;
  }
  #top{
     font-family: Montserrat ; 
     color: #040b14;
     font-size: 40px;
     margin-top: 20px;


  }
</style>

<body>

  <!--NAV BAR-->
<nav class="navbar justify-content-end ">
<ul class="nav">
  <li class="nav-item">
    <a class="nav-link " >Welcome <b><?php 
                  //display username from db
                echo $_SESSION['username'];
                ?></b> </a>
  </li>
  <li class="nav-item">  
    <a href="logout.php"><input type="submit" name="logout" value="Log out" class="btn btn-tranparent"></a>

  </li>
</ul>
</nav>
<!--ALBUM-->
<div class="container-fluid padding">
  <div class="row text-center">
    <div class="album col-12">
      <h6 class="display-4" id="top">Y o u r &nbsp F e e d b a c k &nbsp M a t t e r s </h6>
    </div>
  </div>
  <hr>
</div>
<style type="text/css">
  #box{
   box-shadow: 5px 5px 5px rgba(0,0,0,0.3);
   background-color: white;
   transition-duration: 0.1s;
   -webkit-transition-property: box-shadow, transform;
   transition-property: box-shadow, transform;
  }
  #box:hover{
   

    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
  }
  #time{
    color: white;
    padding-top: 8px;
  }
  #email{
    font-family: Tw Cen MT; 
  }

</style>

<div class="container-fluid">
  <div class="row">

    <?php
                  $query = "SELECT * FROM tbl_comment";
                  $query_run = mysqli_query($connection, $query);
                  $check_faculty = mysqli_num_rows($query_run) > 0;


                  if ($check_faculty) {
                    while ($row = mysqli_fetch_assoc($query_run)) 
                    {
                      

                      ?>

    <div class="col-sm-12 col-md-5" style="padding: 20px; margin: 30px; margin-left: 60px;" id="box">
      <div class="card" style="background-color: white">
        <div class="card-body">
          <h4 class="card-tittle"><?php echo $row['name'] ?></h4>
          <p class="card-text" id="email"><?php echo $row['email'] ?></p>
          <i class="small">Subject: &nbsp <b><?php echo $row['subject'] ?></b></i>
          <hr>

          <i class="small">Message</i>
          <p class="card-text" id="comment"><?php echo $row['comment'] ?></p>
      

          <div style="background-color: #040b14;; height: 40px;" id="time">
            <center><?php echo $row['uploaddate'] ?></center>
          </div>
        </div>
      </div>      
    </div>

   
                      <?php

                    
                    }
                  }

                  else
                  {
                    echo "No Avaible plants";
                  }

                ?>

  </div>
</div>

<!--Footer-->



</body>
</html>