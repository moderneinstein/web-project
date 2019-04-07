

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
<?php require_once 'donatelogic.php'; ?>
   
    <div class="navbar">
        <a href="index.php"><h2 class="heading">CodeHub</h2></a>
        <div class="navItems">
            <a class="navList" href="#">Home</a>
            <a class="navList" href="#">Repository</a>
            <a class="navList" href="upload.php">Upload</a>
            <a class="navList" href="#">Donate</a>
            <a href="signIn.php"><button class="navBtn">Sign In</button></a>
        </div>
    </div>
    <div class="blogs">
        <?php 
        $sql = "SELECT name, email, city, amount FROM donation";
        $result = $mysqli->query($sql);
        while ($row = $result->fetch_assoc()) {
            echo ('<div class="card">
            <h2>' . $row["name"] . '</h2>
            <p>' . $row["email"] . ' - ' . $row["city"] . '</p>
            <p>Rs. ' . $row["amount"]. '...</p>
        </div>');
        }
        ?>
    </div>
</body>

</html>
