<?php


   



   
   include('conix.php');
      # code...
  session_start();
   
   $user_check = $_SESSION['login_user'];
   $ses_sql = mysqli_query($connection,"SELECT nom, type, email from user where email = '$user_check' ");
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $login_session = $row['nom'];
   $role_session = $row['type']; 

//    if (!isset($_SESSION['login_user'])) {
//       header("location:../login.php");
//       exit();
//   }
  







?>


