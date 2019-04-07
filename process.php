<?php
session_start();

$mysqli = new mysqli('localhost', 'root', '', 'blogger') or die(mysqli_error($mysqli));

//sign up button
if (isset($_POST['signup'])) {
    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $password = mysqli_real_escape_string($mysqli, $_POST['password']);
    $secure = sha1($password);
    $sql = "SELECT * FROM user where email='$email'";
    $result = mysqli_query($mysqli, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        header("Location: ./signup.php?signup=emailtaken");
        exit();
    } else {
        $mysqli->query("insert into user (name, email, password) values ('$name', '$email', '$secure')") or die($mysqli->error);
        header("Location: ./signin.php?signup=success");
    }
}

//sign in button
if (isset($_POST['signin'])) {
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $password = mysqli_real_escape_string($mysqli, $_POST['password']);
    $secure = sha1($password);
    $sql = "SELECT * FROM user where email='$email'";
    $result = mysqli_query($mysqli, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck < 1) {
        header("Location: ./signup.php?signup=register");
        exit();
    } else {
        if ($row = mysqli_fetch_assoc($result)) {
            if ($row['password'] != $secure) {
                header("Location: ./signin.php?signin=passErr");
                exit();
            } elseif ($row['password'] == $secure) {
                $_SESSION['name'] = $row['name'];
                $_SESSION['email'] = $row['email'];
                header("Location: ./index.php?signin=success");
                exit();
            }
        }
    }
}

//logout button
if (isset($_POST['logout'])) {
    session_start();
    session_unset();
    session_destroy();
    header("Location: ./index.php");
    exit();
}

// if (isset($_GET['delete'])) {
//     $id=$_GET['delete'];
//     $mysqli->query("delete from user where id=$id") or die($mysqli->error);


if (isset($_POST['uploadcode']) && $_SESSION['name']) {
    $title = mysqli_real_escape_string($mysqli, $_POST['title']);
    $language = mysqli_real_escape_string($mysqli, $_POST['language']);
    $code = mysqli_real_escape_string($mysqli, $_POST['code']);
    $author = $_SESSION['name'];
    $date = date('Y/m/d H:i:s');
    $sql = "SELECT * FROM codes where title='$title'";
    $result = mysqli_query($mysqli, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        header("Location: ./upload.php?add=titletaken");
        exit();
    } else {
        $mysqli->query("insert into codes (title, language, author, code, date) values ('$title', '$language', '$author', '$code', '$date')") or die($mysqli->error);
        header("Location: ./index.php?codeUpload=success");
    }
} else {
    header("Location: ./signin.php?createBlog=failure");
    exit();
}

