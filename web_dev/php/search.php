<?php
 include('session.php');
 include('temp.php');
 session_start();
$id = $_GET['id'];
$name = $_GET['name'];
$surname = $_GET['surname'];
$add_query="SELECT * from Students where ID ='$id' and NAME ='$name'  and SURNAME ='$surname'  ";
$result = mysqli_query($db,$add_query)
or die(mysql_error());
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Search Student</title>
<link rel="stylesheet" href="table.css" />
</head>
<body>

<ul>
    <li style="float:right"><a class="active" href = "logout.php">Log out</a></li>
    <li style="float:right"><p> <?php echo $_SESSION['name'] .' '. $_SESSION['surname'] ?> </p></li>
</ul>
<div class="form">
<h1>Students Table</h1>
<table class="rwd-table" >
<thead>
<tr>
<th><strong>ID</strong></th>
<th><strong>NAME</strong></th>
<th><strong>SURNAME</strong></th>
<th><strong>FATHERNAME</strong></th>
<th><strong>GRADE</strong></th>
<th><strong>MOBILE_NUMBER</strong></th>
<th><strong>BIRTHDAY DATE</strong></th>
</tr>
</thead>

<tbody>

<tr><td data-th="ID"><?php echo $row["ID"]; ?></td>
<td data-th="NAME"><?php echo $row["NAME"]; ?></td>
<td data-th="SURNAME"><?php echo $row["SURNAME"]; ?></td>
<td data-th="FATHERNAME"><?php echo $row["FATHERNAME"]; ?></td>
<td data-th="GRADE"><?php echo $row["GRADE"]; ?></td>
<td data-th="MOBILE_NUMBER"><?php echo $row["MOBILENUMBER"]; ?></td>
<td data-th="BIRTHDAY DATE"><?php echo $row["BIRTHDAY"]; ?></td>
</tr>

</tbody>
</table>
</div>
</body>
</html>

    
