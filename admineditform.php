<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admineditform.css">
    <title>Admin Edit Form</title>
</head>
<body>
    <?php
    $host='localhost';
    $username='root';
    $password='';
    $database='gym_mgm_sys';
    $connection=mysqli_connect($host,$username,$password,$database);
    if(!$connection){
        echo "Failure";
    }else{
        $id=$_GET['id'];
        $query="SELECT * FROM admin_data WHERE id=$id";
        $result=mysqli_query($connection,$query);
        $each=mysqli_fetch_assoc($result);
        $name=$each['fullname'];
        $age=$each['age'];
        $address=$each['address'];
        $contact_number=$each['contact_number'];
    }
    ?>
    <h1 class='head8' id='CLASS8'>Edit</h1>
    <form class='user_entryform' action="adminedit.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <label for="name">Full Name:</label>
        <input type="text" name="name" id="name" value="<?php echo $name  ?>">
        <label for="age">Age:</label>
        <input type="number" name="age" id="age" value="<?php echo $age ?>">
        <label for="address">Address:</label>
        <input type="text" name="address" id="address" value="<?php echo  $address ?>">
        <label for="contact_number">Contact Number:</label>
        <input type="text" name="contact_number" id="contact_number" value="<?php echo  $contact_number ?>">
        <input type="submit" value="Submit now">
        <button onclick="window.location.href='adminhome.php'" type="button">Go back</button>

    </form>
</body>
</html>