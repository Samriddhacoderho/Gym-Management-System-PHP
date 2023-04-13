<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reportdata.css">
    <title>Review Received</title>
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
    }
    else{
        $reviews=mysqli_real_escape_string($connection,$_POST['review']);
        $query="INSERT INTO reviews_user (reviews) VALUES('$reviews')";
        if(!$connection->query($query)){
            echo "Fail";
        }else{
            echo "
            <h1 class='head8' id='CLASS8'>Thank you for your review!</h1>
            <button id='getStarted'><a href='userhome.php'>Go back</a></button>";
        }
    }
    ?>

</body>
</html>
