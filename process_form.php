<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate and sanitize the data (you can add more validation as needed)

    // Example: Simple validation for email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Invalid email format
        echo "Invalid email format";
        exit; // Stop further execution
    }

    // Example: Simple validation for password (ensure it's not empty)
    if (empty($password)) {
        // Password is empty
        echo "Password is required";
        exit; // Stop further execution
    }

    // Now you can process the data further, such as storing it in a database
    // Example: Store the data in a MySQL database (you need to configure your database connection)
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "database";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute SQL statement to insert data into a table (replace table_name with your actual table name)
    $sql = "INSERT INTO table_name (email, password) VALUES ('$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>
