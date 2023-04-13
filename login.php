<?php
session_start();
if(isset($_SESSION['role'])){
    if($_SESSION['role']=='user'){
        header('Location:userhome.php');
    }else{
        header('Location:adminhome.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Log In</title>
</head>
<body>
    <h1 class="head8" id="CLASS8">Log in</h1>
    <form class="user_entryform" action="userinterface.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"  minlength="6" maxlength="24" required>
        <br>
        <?php
            if(isset($_GET['error']) && $_GET['error'] == "invalid_credentials"){
                echo "<p style='color:red;'>Invalid email or password. Please try again.</p>";
            }
        ?>
        <input type="submit" value="Login">
        <button onclick="window.location.href='nav1.php'" type="button">Go back</button>
    </form>
</body>
</html>

