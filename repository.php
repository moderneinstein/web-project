<?php
session_start(); ?>

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
    <? require_once 'process.php'; ?>
    <?php 
    $mysqli = new mysqli('localhost', 'root', '', 'blogger') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * from user") or die($mysqli->error);
    ?>
    <div class="navbar">
        <a href="index.php">
            <h2 class="heading">CodeHub</h2>
        </a>
        <div class="navItems">
            <a class="navList" href="#">Home</a>
            <a class="navList" href="#">Repository</a>
            <a class="navList" href="upload.php">Upload</a>
            <a class="navList" href="donateform.php">Donate</a>
            <a href="signIn.php"><button class="navBtn">Sign In</button></a>
        </div>
    </div>
    <div class="blogs">
        <?php 
        $sql = "SELECT title, code, language, author, date FROM codes";
        $result = $mysqli->query($sql);
        while ($row = $result->fetch_assoc()) {
            echo ('<div class="card">
            <h2>' . $row["title"] . '</h2>
            <p>' . $row["author"] . ' - ' . $row["date"] . '</p>
            <p>' . substr($row["code"], 0, 400). '...</p>
        </div>');
        }
        ?>
    </div>
</body>

</html>
