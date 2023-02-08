<?php
include_once 'dbh.inc.php';
session_start();

if (isset($_POST['submit'])) {

    $first = mysqli_real_escape_string($conn, $_POST['firstname']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $user = mysqli_real_escape_string($conn, $_POST['user']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    //Error handling
    //Check for empty fields

    if (empty($first) || empty($last) || empty($email) || empty($user) || empty($pwd)) {
        echo "<script>alert('One or more fields are empty!');</script>";
    } else {
        //Check if input characters are valid
        if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
            echo "<script>alert('Invalid characters in name fields!');</script>";
        } else {
            //Check if email is valid
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location: ../signup.inc.php?signup=email");
                exit();
            } else {
                $sql = "SELECT * FROM users WHERE user_uid='$user'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0) {
                    echo "<script>alert('User taken, please choose another username');</script>";
                    exit();
                } else {
                    //Hashing the password
                    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                    //Insert the user into the database
                    $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$user', '$hashedPwd');";
                    mysqli_query($conn, $sql);
                    header("Location: ../newUser.html?signup=success");
                    exit();
                }
            }
        }
    }
} else {
    echo "<script>alert('For some reason the signup failed. Please try again!');</script>";
    exit();
}