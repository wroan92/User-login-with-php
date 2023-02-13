<?php
session_start();
include_once 'dbh.inc.php';

if (isset($_POST['submit_login'])) {

    // Get login values
    $user = mysqli_real_escape_string($conn, $_POST['user_login']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd_login']);

    // Check if fields are empty 
    if (empty($user) || empty($pwd)) {
        echo "<script>alert('Please enter your login details');</script>";
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE user_uid='$user'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1) {
            echo "<script>alert('Your login has failed, please try again');</script>";
            exit();
        } else {
            if ($row = mysqli_fetch_assoc($result)) {
                // Dehash passordet for sammenligning
                $hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
                if ($hashedPwdCheck == false) {
                    echo "<script>alert('Your login has failed, please try again');</script>";
                    exit();
                } elseif ($hashedPwdCheck == true) {
                    // Logg inn brukeren
                    $_SESSION['u_id'] = $row['id'];
                    $_SESSION['u_first'] = $row['first'];
                    $_SESSION['u_last'] = $row['last'];
                    $_SESSION['u_email'] = $row['email'];
                    $_SESSION['u_user'] = $row['user'];
                    header("Location: ./welcome.php?login=success");
                    exit();
                }
            }
        }
    }
} else {
    header("Location: index.php?login=error");
    exit();
}
?>