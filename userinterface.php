<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'gym_mgm_sys';

$connection = mysqli_connect($host, $username, $password, $database);

if (!$connection) {
    echo "Failure";
} else {
    $email = $_POST['email'];
    $password = $_POST['password'];
    // check if email and password are in main_gym_user table
    $query = "SELECT * FROM main_gym_user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) == 1) {
        $each = mysqli_fetch_assoc($result);

        // successful login for main_gym_user
        session_start();
        $name = $each['fullname'];
        $_SESSION['email'] = $each['email'];
        $_SESSION['name'] = $name;
        $_SESSION['role'] = 'user';

        if (isset($each['membership_type'])) {
            $_SESSION['membership_type'] = $each['membership_type'];
        } else {
            $_SESSION['membership_type'] = "";
        }

        header("Location: userhome.php");
        exit();
    }

    $query = "SELECT * FROM admin_data WHERE email='$email' AND password='$password'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) == 1) {
        $each = mysqli_fetch_assoc($result);

        // successful login for main_gym_user
        session_start();
        $name = $each['fullname'];
        $_SESSION['email'] = $each['email'];
        $_SESSION['name'] = $name;
        $_SESSION['role'] = 'admin';

        header("Location: adminhome.php");
        exit();
    }

    header("Location: login.php?error=invalid_credentials");
    exit();
}
?>