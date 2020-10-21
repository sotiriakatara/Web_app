<?php
   include('session.php');
   include('temp.php');
   session_start();
   
?>

<html>
<head>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
<style>

body{
    margin:0;
    color:#6a6f8c;
    background:url(library2.jpg);
    background-size: cover;
    background-position: center;
    font:600 16px/18px 'Open Sans',sans-serif;
  }

ul {
  list-style-type: none;
  margin: 0;
  padding: 14px 16px;
  overflow: hidden;
  background-color: #6a6f8c; 
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font:300 16px/18px 'Open Sans',sans-serif;
}

li p {
  display: block;
  color: white;
  text-align: center;
  padding: 0px 16px;
  text-decoration: none;
  font:300 16px/18px 'Open Sans',sans-serif;
}

li a:hover:not(.active) {
  background-color: #4567A9;
  
}

.active {
  background-color: #1161ee;
}
</style>
</head>
<body>
<!-- navigation bar me tis diathsimes leitourgies -->
<ul>
  <li><a href="Add_Student.php">Add </a></li>
  <li><a href="Edit_Student.php">Edit </a></li>
  <li><a href="Delete_Student.php">Delete</a></li>
  <li><a href="Search_Student.php">Search</a></li>
  <li style="float:right"><a class="active" href = "logout.php">Log out</a></li>
  <li style="float:right"><p> <?php echo $_SESSION['name'] .' '. $_SESSION['surname'] ?> </p></li>
</ul>

</body>
</html>

