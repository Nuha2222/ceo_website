<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);


// Database connection
$servername = "localhost"; 
$username = "root";        
$password = "user123!";    
$dbname = "ceo_lawyer";    

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from the form
    $fname = $_POST['fname'];  
    $lname = $_POST['lname'];  
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Insert data into SQL queries
    $sql = "INSERT INTO claims (fname, lname, email, phone, message) 
            VALUES ('$fname', '$lname', '$email', '$phone', '$message')";

if ($conn->query($sql) === TRUE) {
    // Redirect to homepage after successful submission
    header("Location: /ceo_website/index.html"); 
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

    // Close the connection
    $conn->close();
}
?>
