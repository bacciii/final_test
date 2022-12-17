<?php

require("1.dbConnection.php");
session_start();


if (isset($_POST["submit"])) {

    $email = $_POST['email'];
    $password =$_POST['password'];

    $condition1 = "email = '$email'";

    $sql1 = "SELECT * FROM enitest.users WHERE $condition1 ";
    $retval1 = mysqli_query($con, $sql1);
    if (!mysqli_num_rows($retval1)) {
        header("Location: login.html");
    }
    else{
    $row = mysqli_fetch_assoc($retval1);
    $_SESSION['id'] = $row["id"];
    header("Location: buton.php");

    }
}
