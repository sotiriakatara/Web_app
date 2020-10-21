<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']); // 
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 

      $sql = "SELECT ID, NAME, SURNAME FROM Teachers WHERE USERNAME = '$myusername' and PASSWORD = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $myname = $row['NAME'];
      $mysurname = $row['SURNAME'];

      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {    
         $_SESSION['login_user'] = $myusername;
         $_SESSION['name'] = $myname;
         $_SESSION['surname'] = $mysurname;  
         header("location: Teacher.php");
      } 
      else {
        echo "Wrong Username or Password";
        }
   }
?>
    <!DOCTYPE html>
    <html lang="en" >
    <head>
      <meta charset="UTF-8">
      <title>My Web App</title>
      
      
      <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
          <link rel="stylesheet" href="style.css">
      
    </head>
    <body>
      <div class="login-wrap">
      <div class="login-html">
        <label for="tab-1" class="tab">Log In</label>
        <div class="login-form">
          <form action= "" method="post">
            <div class="group">
              <label for="user" class="label">Username</label>
              <input id="username" name="username" type="text" class="input">
            </div>
            <div class="group">
              <label for="pass" class="label">Password</label>
              <input id="password" name="password" type="password" class="input" data-type="password">
            </div>
            <div class="group">
              <input type="submit" class="button" value="Log In">
            </div>
            <div class="hr"></div>
          </form>

        </div>
      </div>
    </div>
      
      
    </body>
    </html>