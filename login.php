<?php
// Database connection
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = "Chanh123456*"; // Your MySQL password
$database = "users"; // Your MySQL database name

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Vulnerable SQL query prone to SQL injection
    //This is the vulnerable code
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    //Replace to this
    $sql = "SELECT * FROM user WHERE username=? AND password=?";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User authenticated, redirect to dashboard or desired page
        header("Location: dashboard.php");
        exit();
    } else {
        // Invalid credentials, display error message
        echo "Invalid username or password.";
    }
}

$conn->close();
?>
