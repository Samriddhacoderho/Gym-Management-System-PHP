<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminedit.css">
    <title>Admin Edited</title>
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
        $id=$_POST['id'];
        $name=$_POST['name'];
        $age=$_POST['age'];
        $address=$_POST['address'];
        $contact_number=$_POST['contact_number'];

        $query="UPDATE admin_data SET fullname='$name', age=$age,address='$address', contact_number='$contact_number' WHERE id=$id";
        if(!$connection->query($query)){
            echo "Not Updated";
        }else{
            echo "
            <h1 class='head8' id='CLASS8'>Succesfully Updated</h1>
            <button id='getStarted'><a href='adminhome.php'>Go back</a></button>";
        }

    }
    ?>
</body>
</html>