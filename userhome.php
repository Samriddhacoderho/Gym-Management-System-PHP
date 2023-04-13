<!DOCTYPE html>
<html>

<head>
  <title>User Home</title>
  <link rel="stylesheet" href="userhome.css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>
</head>

<body onload="addLogoutEventListener()">
  <?php
  $host = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'gym_mgm_sys';
  $connection = mysqli_connect($host, $username, $password, $database);
  if (!$connection) {
    echo "Failure";
  } else {
    session_start();
    if (!isset($_SESSION['role']) || $_SESSION['role'] == 'admin') {
      header('Location:login.php');
    }
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    $name = $_SESSION['name'];
    if (isset($_SESSION['membership_type'])) {
      $membership_type = $_SESSION['membership_type'];
    } else {
      $membership_type = "";
    }

    echo "
    <ul>
      <li><img class='nav-image' src='./images/dumbbell-clipart-etsy-3.png' alt='dumbbell-icon'></li>
      <li><a href='usermycourses.php'>My courses</a></li>
      <li><a href='useraccvalid.php'>Account Validity</a></li>
      <li><a href='userreport.php'>Report</a></li>
      <li><button id='logoutbutton'>Log out</button></li>
    </ul>";
  } ?>
  <?php echo "<h1 class='head10' id='CLASS10'>Welcome $name  !! </h1>" ?>

  <script>
    function addLogoutEventListener() {
      document.getElementById("logoutbutton").addEventListener("click", function () {
        var confirmLogout = confirm("Are you sure you want to log out?");
        if (confirmLogout == true) {
          window.location.href = "logout.php";
        }
      });
    }
  </script>
</body>

</html>