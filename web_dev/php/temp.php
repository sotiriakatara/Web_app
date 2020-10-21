<?php
   // auto to arxeio einai ena antigrafo tu index.php xvris ton html  kvdika kai xrisimopoieitai 
   //se kathe selida gia thn xrhsh ths basis
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 

      $sql = "SELECT ID, NAME, SURNAME FROM Teachers WHERE USERNAME = '$myusername' and PASSWORD = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      $myname = $row['NAME'];
      $mysurname = $row['SURNAME'];

      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         
         $_SESSION['login_user'] = $myusername;
         $_SESSION['name'] = $myname;
         $_SESSION['surname'] = $mysurname;
         
         header("location: Teacher.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>