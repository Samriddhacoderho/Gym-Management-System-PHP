<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="userreport.css">
    <title>User Report</title>
</head>
<body onload="addLogoutEventListener()">
<?php
?>
<ul>
      <li><img class='nav-image' src='./images/dumbbell-clipart-etsy-3.png' alt='dumbbell-icon'></li>
      <li><a href='usermycourses.php'>My courses</a></li>
      <li><a href='useraccvalid.php'>Account Validity</a></li>
      <li><a href='userreport.php'>Report</a></li>
      <li><button id='logoutbutton'>Log out</button></li>
    </ul>
    <h1 class="head11" id="CLASS11">Report us any problems: </h1>
    <form id="aboutusparagraph" method='post' action='reportdata.php'>
        <label for="review">Write your queries here:</label>
        <br>
		<textarea id="review" name="review" required></textarea><br><br>
        <br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
</form>
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
