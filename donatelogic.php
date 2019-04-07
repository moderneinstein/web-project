
<?php

$mysqli = new mysqli('localhost', 'root', '', 'blogger') or die(mysqli_error($mysqli));
if (isset($_POST['donate'])) {
    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $city = mysqli_real_escape_string($mysqli, $_POST['city']);
    $amount = mysqli_real_escape_string($mysqli, $_POST['amount']);
    $sql = "SELECT * FROM donation where email='$email'";
    $result = mysqli_query($mysqli, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        header("Location: ./donateshow.php?add=alreadyDonated");
        exit();
    } else {
        $mysqli->query("insert into donation (name, email, city, amount) values ('$name', '$email', '$city', '$amount')") or die($mysqli->error);
        header("Location: ./donateshow.php?codeUpload=success");
    }
}
?>