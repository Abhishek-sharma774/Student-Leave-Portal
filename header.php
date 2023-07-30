<?php 
@ob_start();
session_start();

require "conf/config.php";
?>


<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="author" content="JSI Software Solutions">
    

    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link rel="shortcut icon" href="Files/intern_img/<?php echo $data['Photo']; ?>" />



    <title>Student Leave Portal </title>

    <link href="Files/css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudfare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHaiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</head>


<style type="text/css">
    a 
    {
        text-decoration: none !important;
    }
</style>



<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="index.php">
                    <center>
                       <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" width="80" height="80"  alt="logo" />
                       <br>
                     Student Leave Portal
                   </center>
                </a>




                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Menu
                    </li>

                    

                       <?php if(!isset($_SESSION['username']))
                       {
                        ?>

                        <li class="sidebar-item">
                        <a class="sidebar-link" href="index.php"> <i class="fa fa-home"></i> Home </a>
                    </li>




                     <li class="sidebar-item">
                        <a class="sidebar-link" href="application_status.php"> <i class="fa fa-file-text"></i> Application Status </a>
                    </li>

                         <li class="sidebar-item">
                        <a class="sidebar-link" href="login.php"> <i class="fa fa-user"></i> Admin Login </a>
                         </li>

                         <?php
                         }
                        
                         if(isset($_SESSION['username']))

                          {
                         ?>


                         <li class="sidebar-item">
                        <a class="sidebar-link" href="dashboard.php"> <i class="fa fa-dashboard"></i> Admin Dashboard </a>

                         <li class="sidebar-item">
                        <a class="sidebar-link" href="logout.php" onclick="return confirm('Are You Sure Want to Logout ?')"> <i class="fa fa-power-off"></i> Logout </a>
                         </li>

                         <?php
                          }
                          ?>

                 

                 
                </ul>




                
            </div>
        </nav>



        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>

              
            </nav>






<style type="text/css">
    table,tr,th,td{padding: 7px 7px 7px 7px;}

    .card{padding: 2px 2px 2px 2px !important;}

    
   .table-Normal {
    position: relative;
    display: block !important;
    margin: 10px auto;
    padding: 0;
    width: 100%;
    height: auto;
    border-collapse: collapse;
    text-align: center;
    overflow-x: auto;
    white-space: nowrap;
    text-align: left;
}
</style>




