<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminstaffs.css">
    <title>Reviews</title>
</head>
<body onload="addLogoutEventListener()">
<ul>
      <li><img class='nav-image' src='./images/dumbbell-clipart-etsy-3.png' alt='dumbbell-icon'></li>
      <li><a href='adminmembers.php'>Members Data</a></li>
      <li><a href='adminstaffs.php'>Staffs Data</a></li>
      <li><a href='adminreviews.php'>Client Reviews</a></li>
      <li><button id='logoutbutton'>Log out</button></li>
</ul>
<h1 class="head5" id="CLASS5">Admin Reviews</h1>

<table class='thistable'>
    <th>S.N</th>
    <th>Reviews</th>
    <?php
    $host='localhost';
    $username='root';
    $password='';
    $database='gym_mgm_sys';
    $connection=mysqli_connect($host,$username,$password,$database);
    if(!$connection){
        echo "Failure";
    }else{
        $query='SELECT * FROM reviews_user';
        $result=mysqli_query($connection,$query);
        while($each=mysqli_fetch_assoc($result)){
            $id=$each['id'];
            $reviews=$each['reviews'];
            echo "<tr><td>$id</td><td>$reviews</td></tr>";
        }
    }       
    ?>
</table>
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


