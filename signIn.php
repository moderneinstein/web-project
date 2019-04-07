<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div class="navbar">
        <a href="index.html">
            <a href="index.php"><h2 class="heading">CodeHub</h2></a>
        </a>
        <div class="navItems">
            <a href="signUp.php"><button class="navBtn">Sign Up</button></a>
        </div>
    </div>
    <br><br><br>
    <div class="form">
        <h1>Sign In</h1><br>
        <div class="form">
        <form action="process.php" method="post">
        <input placeholder="enter email" class="input" type="email" name="email" required> <br>
        <input placeholder="enter password" class="input" type="password" name="password" required> <br>
        <button type="submit" class="navBtn" name="signin">Sign In</button>
        </form>
    </div>
    </div>
    <script src="index.js"></script>
</body>

</html>
