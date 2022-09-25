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
    <title>Edit</title>
</head>
<body>
    <?php 
    $conn = mysqli_connect("localhost", "root", "", "crud") or die("connection failed!!");
    $sql = "UPDATE student SET sname = '".$Name."',saddress = '".$Address."',sclass = '".$Class."',sphone = '".$Phone."' WHERE sid = ".$Id.";";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_affected_rows($conn);
    ?>
    <div class="background">
    <h2>Edited Successfully.</h2>
    <div id="bottom">
        <a href="index.php"><< Back to Home</a>
    </div>
    </div>
</body>
</html>