<?php
// Establish a database connection
$host = "localhost";
$username = "root";
$password = "";
$database = "localgov";

$conn = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Initialize a variable to track the form submission status
$submissionStatus = "";

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["Name"];
    $email = $_POST["email"];
    $message = $_POST["Message"];

    // Insert the form data into the database
    $sql = "INSERT INTO feedback (name, email, message) VALUES ('$name', '$email', '$message')";

    if (mysqli_query($conn, $sql)) {
        $submissionStatus = "Form submitted successfully!";
    } else {
        $submissionStatus = "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
    <!-- Display the submission status message within the UI -->
    <?php if (!empty($submissionStatus)) : ?>
        <div class="submission-status">
            <?php echo $submissionStatus; ?>
        </div>
    <?php endif; ?>
</div>
