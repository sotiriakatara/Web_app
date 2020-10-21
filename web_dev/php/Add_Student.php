<?php
 include('session.php');
 include('temp.php');
 session_start();

$status = "";
// otan ginetai submit ekteleitai o parakato kvdikas
if(isset($_POST['new']) && $_POST['new']==1){

    // pairnei ths metablites pou eisagvntai me ton tropo poy fainetai stin html
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $surname = $_REQUEST['surname'];
    $fathername = $_REQUEST['fathername'];
    $grade = $_REQUEST['grade'];
    $mobile_number = $_REQUEST['mobile_number'];
    $birthday = $_REQUEST['birthday'];
    
    $sql_id = "SELECT * FROM Students WHERE ID='$id'"; 
    $res_id = mysqli_query($db, $sql_id);

    if (mysqli_num_rows($res_id) > 0) { // elegxos gia to an to id pou prokeitai na prostethei yparxei hdh sth vasi
        $name_error = "Sorry... username already taken"; 
        header("location: Add_Student.php");
        echo "ID already taken. Please try anoter one";
    }
    else{ // prosthiki tvn eggrafvn stin vasi ektelontas to query gia insert stin sql
        $add_query="insert into Students
        (`ID`,`NAME`,`SURNAME`,`FATHERNAME`,`GRADE`,`MOBILENUMBER`,`BIRTHDAY`)values
        ('$id','$name','$surname','$fathername','$grade','$mobile_number','$birthday')";
        mysqli_query($db,$add_query)
        or die(mysql_error());
    }
    
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Add a Student</title>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
    <link rel="stylesheet" href="style_add.css" />
    
</head>
<body>

<ul> <!-- emfanisi tou name tou surname kai tou log out sthn pano deksia gvnia -->
    <li><a>Please add the student you want</a></li>
    <li style="float:right"><a class="active" href = "logout.php">Log out</a></li>
    <li style="float:right"><p> <?php echo $_SESSION['name'] .' '. $_SESSION['surname'] ?> </p></li>
</ul>
    <div class="login-wrap">
    <div class="login-html">
    <label for="tab-1" class="tab">Add a New Student</label>
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
            <input type="submit" class="button" value="Add">
        </div>
        <div class="hr"></div>
        <p style="color:#FF0000;"><?php echo $status; ?></p>
        </form>

    </div>
    </div>
</div>
    
    
</body>
</html>
