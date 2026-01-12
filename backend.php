<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "login_system");

if (!isset($_SESSION['username'])) {
    die("Access denied. Please login first.");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Backend Dashboard</title>
</head>
<body style="font-family:Arial; background:#f4f6f8;">

<div style="width:700px; margin:50px auto; background:white; padding:20px;">

<h2>Backend Server</h2>

<p>
    Logged in user:
    <strong><?php echo $_SESSION['username']; ?></strong>
</p>

<h3>Login Records</h3>

<table border="1" cellpadding="10" cellspacing="0" width="100%">
<tr>
    <th>Username</th>
    <th>Login Time</th>
</tr>

<?php
$result = mysqli_query($conn,
    "SELECT * FROM login_logs ORDER BY id DESC"
);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$row['username']}</td>
            <td>{$row['login_time']}</td>
          </tr>";
}
?>

</table>

</div>
</body>
</html>
