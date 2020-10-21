<?php
   // to arxeio auto empodizei tin eisodo se opoiadipote selida mono me tin antigrafi tou url
   // aparaithth proipothesi einai na exei ginei login stin index.php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   $name_check = $_SESSION['name'];
   
   $ses_sql = mysqli_query($db,"select USERNAME from Teachers where USERNAME = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:index.php");
      die();
   }
?>