<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user_entry.css">
    <title>Step 2 Registeration</title>
</head>

<body>
    <ul>
        <li><img class="nav-image" src="./images/dumbbell-clipart-etsy-3.png" alt="dumbbell-icon"></li>
        <li><a href="home.php">Home</a></li>
        <li><a href="">Memberships</a></li>
        <li><a href="./aboutus.php">About us</a></li>
        <li><a href="faculty.php">Our Staff and Coaches</a></li>
        <li><a href="#login">Login</a></li>
    </ul>
    <?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'gym_mgm_sys';
    $connection = mysqli_connect($host, $username, $password, $database);

    if (!$connection) {
        echo "Failed";
    } else {
        $fullname = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $contact_number = $_POST['contact'];


        $query = "INSERT INTO onlyregister(fullname,age,address,gender,email,password,contact_number) VALUES('$fullname',$age,'$address','$gender','$email','$password',$contact_number)";
        if (!$connection->query($query)) {
            echo "Not Inserted";
        } else {
            echo "<h1 class='head6' id='CLASS6'>One More Step..</h1>";
            echo "
            <form class='finalform' method='post' action='user_finalentry.php'>
            <input type='hidden' name='email' value='$email'>
            <input type='hidden' name='name' value='$fullname'>
            <input type='hidden' name='contact_number' value='$contact_number'>
            <label for='membership'>Membership Type:</label>
      <select id='membership' name='membership' required>
        <option value='basic'>Basic</option>
        <option value='premium'>Premium</option>
        <option value='elite'>Elite</option>
      </select><br><br>
      <input type='submit' value='Submit'>

            </form>";


        }
    }

    ?>
</body>

</html>