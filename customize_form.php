<?php

// Database credentials
$servername = "bom1plzcpnl502457";
$username = "pranab7015";
$password = "#Pranav00";
$database = "parindey7reviews";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $fullName = $_POST["fullName"];
    $phoneNumber = $_POST["phoneNumber"];
    $destination = $_POST["destination"];
    $tripDuration = $_POST["tripDuration"];
    $travelDates = $_POST["travelDates"];
    $hotelCategory = $_POST["hotelCategory"];
    $hotelRequests = $_POST["hotelRequests"];
    $adults = $_POST["adults"];
    $children = $_POST["children"];
    $transportation = $_POST["transportation"];
    $airportTransfers = isset($_POST["airportTransfers"]) ? 1 : 0;

    // SQL query to insert data into the table
    $sql = "INSERT INTO CUSTOMIZE_TRIP (fullName, phoneNumber, destination, tripDuration, travelDates, hotelCategory, hotelRequests, adults, children, transportation, airportTransfers) 
            VALUES ('$fullName', '$phoneNumber', '$destination', '$tripDuration', '$travelDates', '$hotelCategory', '$hotelRequests', '$adults', '$children', '$transportation', '$airportTransfers')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
