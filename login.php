<?php
// Connection parameters (replace with your actual database credentials)
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "essu_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve user input from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Query to check user credentials
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

// Check if user exists
if ($result->num_rows > 0) {
    // User is authenticated
    echo "Login successful!"; // You can redirect to another page or perform additional actions here
} else {
    // User is not authenticated
    echo "Login failed. Please check your credentials.";
}

// Close the database connection
$conn->close();
?>
