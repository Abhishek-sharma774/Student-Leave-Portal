<?php


  if(!isset($_SESSION['username']))
     {
        header('Location: login.php');
        session_destroy();
        exit;
     } 


$qry = mysqli_query($db,"select * from admin_login where username ='".$_SESSION['username']."' ");
$data = mysqli_fetch_array($qry);


if ($data['name']==0) 
{
	header('Location: login.php');
        session_destroy();
        exit;
}



?>