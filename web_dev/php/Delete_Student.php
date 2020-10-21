<?php
include('temp.php');
?>
<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<title>Delete Student</title>
<link rel="stylesheet" href="table.css" />
</head>
<body>

<ul> <!-- emfanisi tou name, tou surname kai tou log out sthn pano deksia gvnia -->
    <li><a>Please delete the student you want</a></li>
    <li style="float:right"><a class="active" href = "logout.php">Log out</a></li>
    <li style="float:right"><p> <?php echo $_SESSION['name'] .' '. $_SESSION['surname'] ?> </p></li>
</ul>

<div class="form">
<h1>Students Table</h1>
<table class="rwd-table" > <!-- pinakas pou tha emperiexei tis eggrafes twn foititwn -->
<thead>
<tr>
<th><strong>ID</strong></th>
<th><strong>NAME</strong></th>
<th><strong>SURNAME</strong></th>
<th><strong>FATHERNAME</strong></th>
<th><strong>GRADE</strong></th>
<th><strong>MOBILE_NUMBER</strong></th>
<th><strong>BIRTHDAY DATE</strong></th>
<th><strong>Action</strong></th>
</tr>
</thead>

<tbody>
<?php
// ektelesi erotimatos select me skopo thn emfanish kau grammhs toy pinaka students se enan pinaka
$sel_query="Select * from Students ORDER BY ID desc;";
$result = mysqli_query($db,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>

<tr><td data-th="ID"><?php echo $row["ID"]; ?></td>
<td data-th="NAME"><?php echo $row["NAME"]; ?></td>
<td data-th="SURNAME"><?php echo $row["SURNAME"]; ?></td>
<td data-th="FATHERNAME"><?php echo $row["FATHERNAME"]; ?></td>
<td data-th="GRADE"><?php echo $row["GRADE"]; ?></td>
<td data-th="MOBILE_NUMBER"><?php echo $row["MOBILENUMBER"]; ?></td>
<td data-th="BIRTHDAY DATE"><?php echo $row["BIRTHDAY"]; ?></td>
<td data-th="Action"><a href="delete.php?ID=<?php echo $row["ID"]; ?>">Delete</a></td> 

</tr>
<?php  } ?>
</tbody>
</table>
</div>
</body>
</html>