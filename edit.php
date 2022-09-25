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
    $Id = $_GET['id'];
    $conn = mysqli_connect("localhost", "root", "", "crud") or die("connection failed!!");
    $sql = "SELECT * FROM student WHERE sid = ".$Id;
    $query = mysqli_query($conn, $sql);
    ?>
    <div class="background">
    <div id="main-content">
        <h2>Enter Edited Record:</h2>
        <?php while($rows = mysqli_fetch_assoc($query)){ ?>
        <form action="edit_data.php" method="POST">
            <input type="hidden" name="Id" value= "<?php echo $rows['sid'] ?> " id="Id" placeholder="ID" required/><br>
            <input type="text" name="Name" value= "<?php echo $rows['sname'] ?> " id="Id" placeholder="Name" required/><br>
            <select name="Class">
                <option value="5">Select a Course</option>
                <option value="1">Btech</option>
                <option value="2">Bsc</option>
                <option value="3">Mca</option>
                <option value="4">Mtech</option>
            </select><br>
            <input type="text" name="Address" value= "<?php echo $rows['saddress'] ?> "  id="Id" placeholder="Address" required/><br>
            <input type="text" name="Phone" value= "<?php echo $rows['sphone'] ?> "  id="Id" placeholder="Phone no." required/><br>
            <input type="submit" value="Enter" />
        </form>
        <?php } ?>
    </div>
    <div id="bottom">
        <a href="index.php"><< Back to Home</a>
    </div>
    </div>
</body>
</html>