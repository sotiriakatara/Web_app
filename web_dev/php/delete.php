<?php
include('session.php');
require('temp.php');
$id=$_REQUEST['ID']; 
$query = "DELETE FROM Students WHERE ID=$id"; 
$result = mysqli_query($db,$query) or die ( mysqli_error());
header("Location: Teacher.php"); 
?>