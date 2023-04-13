<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="useraccvalid.css">
    <title>Account Validity</title>
</head>
<body onload="addLogoutEventListener()">
<?php
 session_start();
 $name = $_SESSION['name'];
 $membership_type=$_SESSION['membership_type'];
 if (isset($_SESSION['membership_type'])) {
  $membership_type = $_SESSION['membership_type'];
} else {
  $membership_type = "";
}
?>
<ul>
      <li><img class='nav-image' src='./images/dumbbell-clipart-etsy-3.png' alt='dumbbell-icon'></li>
      <li><a href='usermycourses.php'>My courses</a></li>
      <li><a href='useraccvalid.php'>Account Validity</a></li>
      <li><a href='userreport.php'>Report</a></li>
      <li><button id='logoutbutton'>Log out</button></li>
    </ul>
    <h1 class="head11" id="CLASS11">Account Validity</h1>
    <div id="aboutusparagraph">
      Hello <?php echo $name ; ?>, you have a membership type:<?php  echo $membership_type ; ?> which is why your gym membership is for
      <?php
      if($membership_type=='basic'){
        echo "1 month. However, you can upgrade your membership by contacting with us! Thank you for being a part of Evoke Fitness!";
      }elseif($membership_type=='premium'){
        echo "2 months. However, you can upgrade your membership by contacting with us! Thank you for being a part of Evoke Fitness!";
      }else{
        echo "3 months. However, you can upgrade your membership by contacting with us! Thank you for being a part of Evoke Fitness!";
      }
      ?>


</div>
<script>
      function addLogoutEventListener() {
        document.getElementById("logoutbutton").addEventListener("click", function() {
          var confirmLogout = confirm("Are you sure you want to log out?");
          if (confirmLogout == true) {
            window.location.href = "login.php";
          }
        });
      }
    </script>    
</body>
</html>