<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminhome.css">
    <title>Admin Home</title>
</head>
<body onload="addLogoutEventListener()">
<?php
   $host='localhost';
   $username='root';
   $password='';
   $database='gym_mgm_sys';
   $connection=mysqli_connect($host,$username,$password,$database);
   if(!$connection){
       echo "Failure";
   }
   else{
    session_start();
    if(!isset($_SESSION['role']) || $_SESSION['user']){
      header('location:login.php');
    }
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    $name = $_SESSION['name'];
    echo "
<ul>
      <li><img class='nav-image' src='./images/dumbbell-clipart-etsy-3.png' alt='dumbbell-icon'></li>
      <li><a href='adminmembers.php'>Members Data</a></li>
      <li><a href='adminstaffs.php'>Staffs Data</a></li>
      <li><a href='adminreviews.php'>Client Reviews</a></li>
      <li><button id='logoutbutton'>Log out</button></li>
    </ul>";}?>
        <?php echo "<h1 class='head10' id='CLASS10'>Welcome $name  !! </h1>"?>

<script>
      function addLogoutEventListener() {
        document.getElementById("logoutbutton").addEventListener("click", function() {
          var confirmLogout = confirm("Are you sure you want to log out?");
          if (confirmLogout == true) {
            window.location.href = "logout.php";
          }
        });
      }
    </script>    
</body>
</html>
