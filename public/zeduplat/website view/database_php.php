<?php
// Database connection setup
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zeduplat"; // The database created earlier

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// // Retrieve form data
// $name = $_POST['name'];
// $food_category = $_POST[''];
// $description = $_POST['description'];

// // Prepare SQL statement
// $sql = "INSERT INTO food_requests (name, food_category, description) VALUES ('$name', '$food_category', '$description')";

// Execute SQL statement
// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// Close the connection
$conn->close();
?>