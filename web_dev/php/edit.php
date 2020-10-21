<?php
include('session.php');
include('temp.php');
session_start();
$id=$_REQUEST['ID'];
$query = "SELECT * from Students where ID ='".$id."'"; 
$result = mysqli_query($db, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$surname = $_REQUEST['surname'];
$fathername = $_REQUEST['fathername'];
$grade = $_REQUEST['grade'];
$mobile_number = $_REQUEST['mobile_number'];
$birthday = $_REQUEST['birthday'];

$update="update Students set ID='".$id."',
NAME='".$name."', SURNAME='".$surname."',
FATHERNAME='".$fathername."', GRADE='".$grade."',
MOBILENUMBER='".$mobile_number."', BIRTHDAY='".$birthday."' where ID='".$id."'";
mysqli_query($db, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='Teacher.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}
?>


<html>
<head>
    <meta charset="utf-8">
    <title>Edit Student</title>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
    <link rel="stylesheet" href="style_add.css" />

</head>
<body>
<ul>
    <li style="float:right"><a class="active" href = "logout.php">Log out</a></li>
    <li style="float:right"><p> <?php echo $_SESSION['name'] .' '. $_SESSION['surname'] ?> </p></li>
</ul>
<div class="login-wrap">
<div class="login-html">
<label for="tab-1" class="tab">Edit Student</label>


<!-- Ta dedomena pou tha eisaxthoun stin parakto forma tha perastoyn se metablites sto kvdika php -->
<div class="login-form">
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<div class="group">
            <label class="label">ID</label>
            <input type="text" name="id" required />
        </div>
        <div class="group">
            <label class="label">Name</label>
            <input type="text" name="name" required />
        </div>
        <div class="group">
            <label class="label">Surname</label>
            <input type="text" name="surname" required />
        </div>
        <div class="group">
            <label class="label">FatherName</label>
            <input type="text" name="fathername" required />
        </div>
        <div class="group">
            <label class="label">Grade</label>
            <input type="text" name="grade" required />
        </div>
        <div class="group">
            <label class="label">MobileNumber</label>
            <input type="text" name="mobile_number" required />
        </div>
        <div class="group">
            <label class="label">Date</label>
            <input type="text" name="birthday" required/>
        </div>
        <div class="group">
            <input type="submit" class="button" value="Edit">
        </div>
        <div class="hr"></div>
        <p style="color:#FF0000;"><?php echo $status; ?></p>
        </form>

</div>
</div>
</body>
</html>