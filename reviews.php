<!DOCTYPE html>
<html lang="en">
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
        <link rel="stylesheet" href="../styles/style.css">
        <link rel="stylesheet" href="./styles/kerala.css">
        <link rel="stylesheet" href="./styles/keralamob.css">
        <link rel="stylesheet" href="./styles/keralatab.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    </head>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300&display=swap');
    </style>
</head>
<body>


<h2 class="text-center mt-5"> Thank You for your valuable feedback !<i class="fa-regular fa-face-laugh-wink"></i></h2>
<br>
<div class="m-auto text-center" >
<a href="https://parindey7.com/"><button type="button" class="btn btn-secondary">Home</button></a>
</div>
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

// Get form data
$userName = $_POST['name'];
$userFeedback = $_POST['feedback'];
$userRating = $_POST['rating'];

// SQL query to insert data into the database
$sql = "INSERT INTO Reviews (name,review,rating)
        VALUES ('$userName', '$userFeedback', '$userRating')";

// Execute SQL query
if ($conn->query($sql) === TRUE) {
    echo "Done";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>

</body>
</html>