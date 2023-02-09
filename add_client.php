<?php
  // Connect to the database
  $servername = "localhost";
  $username = "username";
  $password = "password";
  $dbname = "clients";
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Check if the form has been submitted
  if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Insert the new client into the database
    $sql = "INSERT INTO clients (name, email, phone) VALUES ('$name', '$email', '$phone')";
    mysqli_query($conn, $sql);

    // Redirect to the main page
    header("Location: index.html");
  }

  // Close the connection
  mysqli_close($conn);
?>