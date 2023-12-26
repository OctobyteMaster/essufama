<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $guests = $_POST["guests"];

    // You can perform additional validation or processing here

    // Display a confirmation message
    echo "<h2>Reservation Confirmed</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Phone: $phone</p>";
    echo "<p>Date: $date</p>";
    echo "<p>Time: $time</p>";
    echo "<p>Number of Guests: $guests</p>";
} else {
    // Redirect to the form if accessed directly
    header("Location: reservation.html");
    exit();
}
?>
