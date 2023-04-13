<!DOCTYPE html>
<html>
  <head>
    <title>Membership</title>
    <link rel="stylesheet" href="membership.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>
  </head>
  <body>
    <ul>
      <li><img class="nav-image" src="./images/dumbbell-clipart-etsy-3.png" alt="dumbbell-icon"></li>
      <li><a href="home.php">Home</a></li>
      <li><a href="">Memberships</a></li>
      <li><a href="./aboutus.php">About us</a></li>
      <li><a href="faculty.php">Our Staff and Coaches</a></li>
      <li><a href="login.php">Login</a></li>
    </ul>
    <h1 class="head5" id="CLASS5">Join today!</h1>
    <form class="user_entryform" action="user_entry.php" method="post">
        <label for="name">Full Name:</label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="age">Age:</label>
        <input type="number" name="age" id="age" min="14" max="70" required>
        <br>
        <label for="Address">Address:</label>
        <input type="text" name="address" id="address" required>
        <br>
        <label for="gender">Gender:</label>
        <input type="radio" name="gender" id="m" value="Male" required>
        <label for="m">Male</label>
        <input type="radio" name="gender" id="f" value="Female">
        <label for="f">Female</label>
        <input type="radio" name="gender" id="o" value="Other">
        <label for="o">Others</label>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"  minlength="6" maxlength="24" required>
        <br>
        <label for="contact">Contact No.:</label>
        <input type="text" name="contact" id="contact" pattern="[0-9]{10}" required>
        <br>
        <input type="submit" value="Submit Now:">
    </form>
</body>
</html>


