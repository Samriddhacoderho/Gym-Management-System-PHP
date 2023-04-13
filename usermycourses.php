<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="usermycourses.css">
    <title>User Courses</title>
</head>
<body onload="addLogoutEventListener()">
<ul>
      <li><img class='nav-image' src='./images/dumbbell-clipart-etsy-3.png' alt='dumbbell-icon'></li>
      <li><a href='usermycourses.php'>My courses</a></li>
      <li><a href='useraccvalid.php'>Account Validity</a></li>
      <li><a href='userreport.php'>Report</a></li>
      <li><button id='logoutbutton'>Log out</button></li>
    </ul>
    <h1 class="head11" id="CLASS11">Your Course</h1>
    <div id="aboutusparagraph">
        Your course includes all calisthenics, gym, and cardio.
        <br> <br>
        <h2>1. Calisthenics</h2>
        Calisthenics refers to a form of exercise that uses only the body's weight as resistance. It involves performing a variety of exercises such as push-ups, pull-ups, squats, lunges, and planks, among others, that can be done anywhere, without the need for gym equipment. Calisthenics are great for improving strength, flexibility, and endurance.
        <h2>2. Gym</h2>
        A gym, short for gymnasium, is a place where people go to exercise, typically using weights and other equipment. Gyms can be found in many different settings, from health clubs and fitness centers to schools, hotels, and apartment buildings. At a gym, you can work on different aspects of your fitness, including strength, endurance, and flexibility.
        <h2>3. Cardio</h2>
        Cardio, short for cardiovascular exercise, is any form of exercise that increases your heart rate and breathing rate, and works your cardiovascular system. Examples of cardio exercises include running, cycling, swimming, jumping rope, and dancing. Cardio is great for improving cardiovascular health, burning calories, and reducing stress.
    </div>
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