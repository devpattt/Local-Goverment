<?php
// Replace with your database connection code
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "localgov";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to get the overall number of users
$query = "SELECT COUNT(*) AS total_users FROM users";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $totalUsers = $row["total_users"];

    // Return the total users as JSON
    echo json_encode(['users' => $totalUsers]);
} else {
    echo json_encode(['error' => 'No users found.']);
}

$conn->close();


?>
