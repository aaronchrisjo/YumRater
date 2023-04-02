<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "hackfit";
$conn = mysqli_connect($host, $user, $password, $dbname);

if ($_POST["password"] !== $_POST["confirm_password"]) {
    die("Passwords must match");
}

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $user_id = $_POST['user_id'];
    $mobile_number = $_POST['mobile_number'];
    $user_password = $_POST['user_password'];

    $sql2 = "SELECT * FROM user  WHERE mobile_number= '$mobile_number'";
    $result2 = mysqli_query($conn,$sql2);
    $num = mysqli_num_rows($result2);
    if($num > 0){
        echo'<script>alert("Phone number already registered"</script>';
    }
    $sql1 = "SELECT * FROM user  WHERE user_id= '$user_id'";
    $result1 = mysqli_query($conn,$sql1);
    $num1 = mysqli_num_rows($result1);
    else if($num1 > 0){
        echo'<script>alert("user id already registered"</script>';
    }


}
>