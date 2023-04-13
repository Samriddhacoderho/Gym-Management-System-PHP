<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="payment.css">
    <title>Account Created</title>
</head>

<body>
    <?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'gym_mgm_sys';
    $connection = mysqli_connect($host, $username, $password, $database);
    if (!$connection) {
        echo "Failure";
    } else {
        $email = $_POST['email'];
        $membership_type = $_POST['memb'];
        $contact_number = $_POST['contact_number'];
        $fullname = $_POST['name'];

        $mainquery = "SELECT * FROM onlyregister WHERE email='$email' AND contact_number='$contact_number' AND fullname='$fullname' ";
        $mainresult = mysqli_query($connection, $mainquery);
        $maineach = mysqli_fetch_assoc($mainresult);

        $fullname = $maineach['fullname'];
        $age = $maineach['age'];
        $address = $maineach['address'];
        $gender = $maineach['gender'];
        $email = $maineach['email'];
        $password = $maineach['password'];
        $contact_number = $maineach['contact_number'];

        $query = "SELECT email,contact_number FROM main_gym_user WHERE email='$email' OR contact_number='$contact_number'";
        $result = mysqli_query($connection, $query);

        if (mysqli_num_rows($result) > 0) {
            // An existing record was found, show an error message and don't insert the new record
            echo "<p class=finalform>Error: This email or phone number is already registered.</p>";
            echo "<button id='getEnded'><a href='membership.php'>Go back</a></button>";
        } else {

            $querylast = "INSERT INTO main_gym_user(fullname,age,address,gender,email,password,contact_number,membership_type) VALUES('$fullname',$age,'$address','$gender','$email','$password',$contact_number,'$membership_type')";
            if (!$connection->query($querylast)) {
                echo "Not Inserted";
            } else {
                echo "<h1 class='head8' id='CLASS8'>Thank you for choosing us!</h1>
<button id='getStarted'><a href='login.php'>Log in</a></button>";
            }


        }

    }
    ?>
</body>

</html>