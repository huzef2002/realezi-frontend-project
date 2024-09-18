<?php
// Database connection details
$host = "localhost";
$dbname = "user_database";
$username = "root";
$password = "";

// Create a connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Capture the form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $country_code = $_POST['country_code'];
    $mobile_number = $_POST['mobile_number'];

    // SQL to insert the data
    $sql = "INSERT INTO users (country_code, mobile_number) VALUES ('$country_code', '$mobile_number')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
