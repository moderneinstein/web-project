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
            <h2 class="heading">CodeHub</h2>
        </a>
        <div class="navItems">
            <a href="profile.php"><button class="navBtn">Profile</button></a>
        </div>
    </div>
    <div class="form">
        <form action="donatelogic.php" method="POST">
            <br>
            <h1>Thank You for the kind Donation!!</h1><br>
            <h3>Please donate in order to help us make your experience better :-)</h3>
            <input placeholder="enter name" class="input" type="text" name="name" required> <br>
            <input placeholder="enter email" class="input" type="text" name="email" required> <br>
            <input placeholder="enter city" class="input" type="text" name="city" required> <br>
            <input placeholder="enter amount" class="number" type="text" name="amount" required> <br>
            <button type="submit" class="navBtn" name="donate">Donate</button>
        </form>
    </div>
</body>

</html>
