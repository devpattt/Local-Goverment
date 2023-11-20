<?php
// Establish a connection to the database (Replace these values with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "localgov";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch users from the database
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

$users = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $users[] = array(
            'profileImage' => $row['profileImage'],
            'username' => $row['username'],
            'lastActive' => $row['lastActive']
        );
    }
}

// Close the connection
$conn->close();

// Return the JSON response
header('Content-Type: application/json');
echo json_encode($users);
?>
