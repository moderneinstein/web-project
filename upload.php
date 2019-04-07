<?php
session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CodeHub</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div class="navbar">
        <a href="index.php">
            <a href="index.php">
                <h2 class="heading">CodeHub</h2>
            </a>
        </a>
        <div class="navItems">
            <a href="profile.php"><button class="navBtn">Profile</button></a>
        </div>
    </div>
    <div class="form">
        <form action="process.php" method="post">
            <br>
            <h1>Upload Code</h1>
            <input placeholder="enter title" class="input" type="text" name="title" required> <br>
            <select class="input" name="language">
                <option value="c">C</option>
                <option value="cpp">C++</option>
                <option value="java">Java</option>
                <option value="python">Python</option>
                <option value="javascript">Javascript</option>
                <option value="html">HTML</option>
                <option value="php">PHP</option>
                <option value="other">Other</option>
            </select><br><br>
            <textarea rows="30" cols="100" name="code" placeholder="Add Code here" class="input"></textarea>
            <br> <br>
            <button type="submit" class="navBtn" name="uploadcode">Upload Code</button>
        </form>
    </div>
</body>

</html>
