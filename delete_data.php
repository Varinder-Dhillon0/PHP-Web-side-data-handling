<?php 
$Id = $_GET['id']; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Deleted</title>
</head>
<body>
<?php 
    $conn = mysqli_connect("localhost", "root", "", "crud") or die("connection failed!!");
    $sql = "DELETE FROM student WHERE sid = ".$Id;
    $query = mysqli_query($conn, $sql);
     ?>
     <div class="background">
    <h2>Record Deleted Successfully</h2>
    <div id="bottom">
        <a href="index.php"><< Back to Home</a>
    </div>
    </div>
</body>
</html>