<?php 
  session_start(); 

  if (!isset($_SESSION['id'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['id']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        
        <div class="page-grid">
            <?php  
                include 'kernel/menu.php'; 
                include 'kernel/infor_patient.php';
            ?> 
        </div>
        
    </body>
</html>
