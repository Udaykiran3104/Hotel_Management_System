<!DOCTYPE html>
<html>
<body>
<?php
// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $conn = new mysqli("localhost", "root", "", "iwp");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Sanitize user inputs
    $phone = $conn->real_escape_string($_POST["phone"]);
    $password = $conn->real_escape_string($_POST["password"]);
    $name = $conn->real_escape_string($_POST["name"]);
    $email = $conn->real_escape_string($_POST["email"]);
    $idproof = $conn->real_escape_string($_POST["idproof"]);
    $dob = $conn->real_escape_string($_POST["dob"]);

    // Prepare SQL statement
    $sql = "INSERT INTO user_login (phone, password, name, email, idproof, dob) 
            VALUES ('$phone', '$password', '$name', '$email', '$idproof', '$dob')";

    // Execute the query and check the result
    if ($conn->query($sql) === TRUE) {
        // Redirect to user_created.php if the user is successfully created
        header("Location: user_created.php");
        exit();
    } else {
        // Log error message for debugging purposes
        error_log("Error: " . $sql . "\n" . $conn->error);
        
        // Redirect to user_not_created.php if there is an error
        header("Location: user_not_created.php");
        exit();
    }

    // Close the database connection
    $conn->close();
} else {
    // If the request method is not POST, show an error message
    echo "Invalid request method.";
}
?>
</body>
</html>
