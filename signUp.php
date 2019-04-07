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
            <a href="signIn.php"><button class="navBtn">Sign In</button></a>
        </div>
    </div>
    <br><br><br>

    <div class="form">
        <h1>Sign Up</h1><br>
        <form action="process.php" method="post">
            <input placeholder="enter name" class="input" type="text" name="name" required> <br>
            <input placeholder="enter email" class="input" type="email" name="email" required> <br>
            <input placeholder="enter password" class="input" type="password" name="password" required> <br>
            <button type="submit" class="navBtn" name="signup">Sign Up</button>
        </form>
    </div>
    <script src="index.js"></script>
</body>

</html>
