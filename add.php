<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Add</title>
</head>
<body>
    <div class="background">
    <div id="main-content">
        <h2>Add New Record : </h2>
        <form action="add_data.php" method="POST">
            <input type="number" name="Id" id="Id" placeholder="ID" required/><br>
            <input type="text" name="Name" id="Id" placeholder="Name" required/><br>
            <select name="Class" >
                <option value="5">Select a Course</option>
                <option value="1">Btech</option>
                <option value="2">Bsc</option>
                <option value="3">Mca</option>
                <option value="4">Mtech</option>
            </select><br>
            <input type="text" name="Address" id="Id" placeholder="Address" required/><br>
            <input type="text" name="Phone" id="Id" placeholder="Phone no." required/><br>
            <input type="submit" value="Enter" />
        </form>
    </div>
    <div id="bottom">
        <a href="index.php"><< Back to Home</a>
    </div>
    </div>
</body>
</html>