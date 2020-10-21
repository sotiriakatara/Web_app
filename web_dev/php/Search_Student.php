<?php
 include('session.php');
 include('temp.php');
 session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Search for a Student</title>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
    <link rel="stylesheet" href="style_add.css">
    
</head>
<body>

<ul>
    <li><a>Please search for the student you want</a></li>
    <li style="float:right"><a class="active" href = "logout.php">Log out</a></li> <!-- logout on the right corner -->
    <li style="float:right"><p> <?php echo $_SESSION['name'] .' '. $_SESSION['surname'] ?> </p></li> <!-- Username on the right corner -->
</ul>
    <div class="login-wrap">
    <div class="login-html">
    <label for="tab-1" class="tab">Search Student</label>
    <div class="login-form">
    <!-- Otan patithei to Search, ta dedomena poy eisixthisan tha diavastoun apo to arxeio search.php -->
    <form name="form" method="GET" action="search.php">
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
            <input type="submit" class="button" value="Search">
        </div>
        <div class="hr"></div>
        <p style="color:#FF0000;"><?php echo $status; ?></p>
        </form>

    </div>
    </div>
</div>

</body>
</html>
