<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admindel.css">
    <title>Admin Deleted</title>
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
        $query="DELETE FROM admin_data WHERE id=$id";
        if(!$connection->query($query)){
            echo "Not deleted";
        }else{
            echo "
            <h1 class='head8' id='CLASS8'>Succesfully Deleted</h1>
            <button id='getStarted'><a href='adminhome.php'>Go back</a></button>";
        }
    }
    ?>
</body>
</html>