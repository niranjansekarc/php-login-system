<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$conn = mysqli_connect("localhost", "root", "", "login_system");
if (!$conn) {
    die("Database connection failed");
}

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {

    $_SESSION['username'] = $username;

    $time = date("Y-m-d H:i:s");
    mysqli_query($conn,
        "INSERT INTO login_logs (username, login_time)
         VALUES ('$username', '$time')"
    );

    echo "Login successful";

} else {
    echo "Invalid username or password";
}
?>




