<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user_finalentry.css">
    <title>Payment</title>
</head>

<body>
    <ul>
        <li class='navbar'><img class="nav-image" src="./images/dumbbell-clipart-etsy-3.png" alt="dumbbell-icon"></li>
        <li class='navbar'><a href="home.php">Home</a></li>
        <li class='navbar'><a href="">Memberships</a></li>
        <li class='navbar'><a href="./aboutus.php">About us</a></li>
        <li class='navbar'><a href="faculty.php">Our Staff and Coaches</a></li>
        <li class='navbar'><a href="#login">Login</a></li>
    </ul>
    <h1 class="head7" id="CLASS7">Payment Procedure</h1>

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
        $fullname = $_POST['name'];
        $contact_number = $_POST['contact_number'];

        $query = "SELECT * FROM onlyregister WHERE email='$email' AND fullname='$fullname' AND contact_number='$contact_number'";

        $result = mysqli_query($connection, $query);
        $each = mysqli_fetch_assoc($result);
        $fullname = $each['fullname'];
        $age = $each['age'];
        $address = $each['address'];
        $gender = $each['gender'];
        $email = $each['email'];
        $contact_number = $_POST['contact_number'];
        $membershiptype = $_POST['membership'];
        $basic = 'basic';
        $premium = 'premium';
        $elite = 'elite';
        if ($membershiptype == $basic) {
            echo "
            <ul class='paymenttime'>
            <li class='listhime'>Evoke Fitness</li>
            <br><br>
            <li class='listtime'>Name: $fullname</li>
            <br>
            <li class='listtime'>Age: $age</li>
            <br>
            <li class='listtime'>Address: $address</li>
            <br>
            <li class='listtime'>Gender: $gender</li>
            <br>
            <li class='listtime'>Email: $email</li>
            <br>
            <li class='listtime'>Contact no.: $contact_number</li>
            <br>
            <li class='listtime'>Membership Type: $membershiptype</li>
            <br>
            <li class='listtime'>Fees: 2500</li>

            <form action='payment.php' method='post'>
            <input type='hidden' name='email' value='$email'>
            <input type='hidden' name='memb' value='$membershiptype'>
            <input type='hidden' name='contact_number' value='$contact_number'>
            <input type='hidden' name='name' value='$fullname'>
            <input type='submit' value='Pay Now'>
            </form>
        </ul>
            ";
        } elseif ($membershiptype == $premium) {
            echo "
            <ul class='paymenttime'>
            <li class='listhime'>Evoke Fitness</li>
            <br><br>
            <li class='listtime'>Name: $fullname</li>
            <br>
            <li class='listtime'>Age: $age</li>
            <br>
            <li class='listtime'>Address: $address</li>
            <br>
            <li class='listtime'>Gender: $gender</li>
            <br>
            <li class='listtime'>Email: $email</li>
            <br>
            <li class='listtime'>Contact no.: $contact_number</li>
            <br>
            <li class='listtime'>Membership Type: $membershiptype</li>
            <br>
            <li class='listtime'>Fees: 5000</li>

            <form action='payment.php' method='post'>
            <input type='hidden' name='email' value='$email'>
            <input type='hidden' name='memb' value='$membershiptype'>
            <input type='hidden' name='contact_number' value='$contact_number'>
            <input type='hidden' name='name' value='$fullname'>
            <input type='submit' value='Pay Now'>
            </form>
        </ul>
            ";
        } else {
            echo "
            <ul class='paymenttime'>
            <li class='listhime'>Evoke Fitness</li>
            <br><br>
            <li class='listtime'>Name: $fullname</li>
            <br>
            <li class='listtime'>Age: $age</li>
            <br>
            <li class='listtime'>Address: $address</li>
            <br>
            <li class='listtime'>Gender: $gender</li>
            <br>
            <li class='listtime'>Email: $email</li>
            <br>
            <li class='listtime'>Contact no.: $contact_number</li>
            <br>
            <li class='listtime'>Membership Type: $membershiptype</li>
            <br>
            <li class='listtime'>Fees: 7500</li>

            <form action='payment.php' method='post'>
            <input type='hidden' name='email' value='$email'>
            <input type='hidden' name='memb' value='$membershiptype'>
            <input type='hidden' name='contact_number' value='$contact_number'>
            <input type='hidden' name='name' value='$fullname'>
            <input type='submit' value='Pay Now'>
            </form>
        </ul>
            ";
        }

    }
    ?>
</body>

</html>