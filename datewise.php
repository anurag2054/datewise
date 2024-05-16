<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "visitor_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Date for deletion
$dateToDelete = "2024-05-06"; // Example date

// SQL to delete data by date
$sql = "DELETE FROM visitor_database WHERE date_t = '$dateToDelete'";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Records deleted successfully";
} else {
    echo "Error deleting records: " . $conn->error;
}

// Close connection
$conn->close();
?>