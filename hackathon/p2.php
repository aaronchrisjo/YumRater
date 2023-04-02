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
//   $feedback = $_POST[''];
  $review = $_POST['recent_reviews'];
  
  // Inse else{
  $query = "INSERT INTO dts(review) VALUES ('$review')";
  $result = mysqli_query($conn, $query);
  
//   $redirect_url = "";
  echo "Review Taken ";
  sleep(4); // Delay for 4 seconds
//  header("Location: ".$redirect_url);
  
  
  

  // Close connection
  $conn->close();

?>