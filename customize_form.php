<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="utf-8" />
        <link rel="icon" href="./images/logo.ico" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="theme-color" content="#000000" />
        <meta
          name="description"
          content="Parindey7 is a travel website powered by a community of budget travellers. We offer Inexpensive itineraries, Aesthetic accommodation, Offbeat spots and High vibes."
        />
        <link rel="apple-touch-icon" href="%PUBLIC_URL%/logo.png" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
        <link rel="manifest" href="%PUBLIC_URL%/manifest.json" />

         <!-- Font Awesome CDN -->
         <script src="https://kit.fontawesome.com/ae529c4f4a.js" crossorigin="anonymous"></script>

        <title>Parindey7 - Discover the world like never before</title>
    
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="./styles/style.css">
      
       
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap');
    </style>
     <style>
        body {
          background-color: #ffffff;
        }
    
        .form-container {
          background-color: #fcfcfc;
          border-radius: 10px;
          box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.1);
          padding: 30px;
          margin-top: 50px;
        }
    
        .form-container h2 {
          text-align: center;
          margin-bottom: 30px;
        }
    
        .form-control {
          margin-bottom: 20px;
        }
    
        .btn-dark {
          background-color: #005568;
          border: none;
          transition: all 0.3s ease;
        }
    
        .btn-dark:hover {
          background-color: #000000;
        }

        .card-img-top{
            box-shadow: none;
            border-radius: 3%;
        }
        .card{
            background-color: transparent;
            border: 0px;
        }

        body{
          background-color: #FFFFFF;
          background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 2 1'%3E%3Cdefs%3E%3ClinearGradient id='a' gradientUnits='userSpaceOnUse' x1='0' x2='0' y1='0' y2='1'%3E%3Cstop offset='0' stop-color='%23FFFFFF'/%3E%3Cstop offset='1' stop-color='%232FB199'/%3E%3C/linearGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='0' y1='0' x2='0' y2='1'%3E%3Cstop offset='0' stop-color='%23FFFFFF' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23FFFFFF' stop-opacity='1'/%3E%3C/linearGradient%3E%3ClinearGradient id='c' gradientUnits='userSpaceOnUse' x1='0' y1='0' x2='2' y2='2'%3E%3Cstop offset='0' stop-color='%23FFFFFF' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23FFFFFF' stop-opacity='1'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect x='0' y='0' fill='url(%23a)' width='2' height='1'/%3E%3Cg fill-opacity='0.5'%3E%3Cpolygon fill='url(%23b)' points='0 1 0 0 2 0'/%3E%3Cpolygon fill='url(%23c)' points='2 1 2 0 0 0'/%3E%3C/g%3E%3C/svg%3E");
          background-attachment: fixed;
          background-size: cover;
        }

        </style>
</head>

        <body>
        <h3 class="text-center m-5">Thank You</h3>
        <p class="text-center">We will get back to you with your personalized itinerary within 24hrs.</p>
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
        echo "";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
