<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminstaffs.css">
    <title>Staffs</title>
</head>
<body onload="addLogoutEventListener()">
<ul>
      <li><img class='nav-image' src='./images/dumbbell-clipart-etsy-3.png' alt='dumbbell-icon'></li>
      <li><a href='adminmembers.php'>Members Data</a></li>
      <li><a href='adminstaffs.php'>Staffs Data</a></li>
      <li><a href='adminreviews.php'>Client Reviews</a></li>
      <li><button id='logoutbutton'>Log out</button></li>
</ul>
<h1 class="head5" id="CLASS5">Staffs Data</h1>

<table class='thistable'>
    <th>S.N</th>
    <th>Full Name</th>
    <th>Age</th>
    <th>Address</th>
    <th>Contact Number</th>
    <th>Delete</th>
    <th>Edit</th>
    <?php
    $host='localhost';
    $username='root';
    $password='';
    $database='gym_mgm_sys';
    $connection=mysqli_connect($host,$username,$password,$database);
    if(!$connection){
        echo "Failure";
    }else{
        $query='SELECT * FROM admin_data';
        $result=mysqli_query($connection,$query);
        while($each=mysqli_fetch_assoc($result)){
            $id=$each['id'];
            $name=$each['fullname'];
            $age=$each['age'];
            $address=$each['address'];
            $contact_number=$each['contact_number'];
            echo "<tr><td>$id</td><td>$name</td><td>$age</td><td>$address</td><td>$contact_number</td><td><a class='but' href='#' onclick='confirmDelete($id)'>Delete</a></td><td><a class='but' href='admineditform.php?id=$id'>Edit</a></td></tr>";
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
      function confirmDelete(id) {
        if (confirm("Are you sure you want to delete this member?")) {
            window.location.href = "admindel.php?id=" + id;
        }
    }
    </script>    
</body>
</html>


