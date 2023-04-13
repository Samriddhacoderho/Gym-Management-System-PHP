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
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query="SELECT 'main_gym_user' AS source_table, email, password
    FROM main_gym_user
    WHERE email = '$email' AND password = '$password'
    UNION
    SELECT 'admin_data' AS source_table, email, password
    FROM admin_data
    WHERE email = '$email' AND password = '$password';
    ";
    $result=mysqli_query($connection,$query);
    if(!mysqli_num_rows($result)==1){
        header("Location: login.php?error=invalid_credentials");
        exit();
    }
    else{
        $each=mysqli_fetch_assoc($result);
        if($each['source_table']=='main_gym_user'){
            echo "User";
        }
        else if($each['source_table']=='admin_data'){
            echo "Admin";
        }
        if(mysqli_num_rows($result) > 1) {
            $each=mysqli_fetch_assoc($result);
            if($each['source_table']=='admin_data'){
                echo "Admin";
            }
        }
    }
}
?>
