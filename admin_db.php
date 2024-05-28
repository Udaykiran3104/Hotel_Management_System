<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verify reCAPTCHA
    $secret = '6LfBNukpAAAAAHCp-nBdR1HQwsHqQIB9putPpmZE'; // Replace with your secret key
    $response = $_POST['g-recaptcha-response'];
    $remoteip = $_SERVER['REMOTE_ADDR'];

    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = [
        'secret' => $secret,
        'response' => $response,
        'remoteip' => $remoteip
    ];

    $options = [
        'http' => [
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data)
        ]
    ];

    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $resultJson = json_decode($result);

    if ($resultJson->success != true) {
        // reCAPTCHA verification failed
        echo 'reCAPTCHA verification failed. Please try again.';
        exit;
    }

    // reCAPTCHA verification succeeded
    $conn = new mysqli("localhost", "root", "", "iwp");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $user = $conn->real_escape_string($_POST["adminid"]);
    $pwd = $conn->real_escape_string($_POST["password"]);

    $sql = "SELECT adminid, password FROM admin WHERE adminid = '$user' AND password = '$pwd'";
    $result = $conn->query($sql);

    if (!$result) {
        echo "Error executing query: " . mysqli_error($conn); // Display SQL error, if any
        exit;
    }

    if ($result->num_rows > 0) {
        // Valid login credentials
        header("Location: admin_view.php");
        exit;
    } else {
        // Invalid login credentials
        echo "Invalid User ID or Password.";
    }

    $conn->close();
} else {
    // Invalid request method
    echo 'Invalid request method.';
}
?>
