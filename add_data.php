<?php 
$Id = strval($_POST['Id']);
$Name = $_POST['Name'];
$Address= $_POST['Address'];
$Class = $_POST['Class'];
$Phone = strval($_POST['Phone']); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Added</title>
</head>
<body>
    <?php 
    $conn = mysqli_connect("localhost", "root", "", "crud") or die("connection failed!!");
    $sql = "INSERT INTO student values(".$Id.",'".$Name."','".$Address."','".$Class."','".$Phone."');";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_affected_rows($conn);
    if($result == 0){
    ?>
    <div class="background">
    <h2>No Records Affected.</h2>
    <div id="bottom">
        <a href="delete.php"><< Back to Delete</a>
    </div>
    </div>
    <?php
    }else{ ?>
    <div class="background">
        <h2>Record Added Successfully.</h2>
        <div id="bottom">
            <a href="index.php"><< Back to Home</a>
        </div>
        </div>
        
    <?php } ?>
</body>
</html>