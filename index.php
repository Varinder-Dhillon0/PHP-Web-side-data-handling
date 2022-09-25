<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Table</title>
</head>
<body>
<?php
    $conn = mysqli_connect("localhost", "root", "", "crud") or die("connection failed!!");
    $sql = "SELECT * FROM student JOIN studentclass WHERE student.sclass = studentclass.cid ORDER BY sid;";
    $query = mysqli_query($conn, $sql) or die("query unsuccessfull.");
?>
<div class="background"> 
<h2>Records of All Students:</h2>
<div id="main-content">
    <?php if(mysqli_num_rows($query)>0){ ?>
    <table >
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Class</th>
                <th>Address</th>
                <th>Course</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php while($rows = mysqli_fetch_assoc($query)){ ?>
            <tr>
                <td><?php echo $rows["sid"]; ?></td>
                <td><?php echo $rows["sname"]; ?></td>
                <td><?php echo $rows["cname"]; ?></td>
                <td><?php echo $rows["saddress"]; ?></td>
                <td><?php echo $rows["sphone"]; ?></td>
                <td><a href="edit.php?id=<?php echo $rows["sid"]; ?>">Edit</a></td>
                <td><a href="delete_data.php?id=<?php echo $rows["sid"]; ?>">Delete</a></td>
            </tr>
        <?php }    ?>
        </tbody>
    </table>
    <?php }else{ ?>
        <h3>No Records to Display.</h3>
        <?php } ?>
        <div id="bottom">
            <a href="add.php"><< Add More Records </a>
        </div>
    </div>
</div>
</body>
</html>