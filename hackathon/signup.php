<?php
  // Connect to the database
  $host = "localhost";
  $user = "root";
  $password = "";
  $dbname = "hackfit";

  // Create connection
  $conn = mysqli_connect($host, $user, $password, $dbname);
  // Check connection
  
 // Get the form data
  $username = $_POST['user_name'];
  $usernumber = $_POST['mobile_number'];
  $userpassword = $_POST['user_password'];
  
  // Inse else{
  $query = "INSERT INTO user(user_name,mobile_number,user_password) VALUES ('$username', '$usernumber','$userpassword')";
  $result = mysqli_query($conn, $query);
  
  $redirect_url = "login.html";
  echo "Signup successful " .$username. "<br> Go to login!";
  sleep(4); // Delay for 4 seconds
 header("Location: ".$redirect_url);
  
  
  

  // Close connection
  $conn->close();

?>