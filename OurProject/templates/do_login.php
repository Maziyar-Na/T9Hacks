<?php
$servername = "localhost";
$username = "root";
$password = "root";
$databasename = "T9Hacks";

// Create connection
$conn = new mysqli($servername, $username, $password, $databasename);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$email = $_POST["email"];
$password = $_POST["password"];
// echo "Connected successfully";
$stmt = $conn->prepare("SELECT * FROM user WHERE email = ? and password = ?");
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$result = $stmt->get_result();
if($result->num_rows === 0) echo "No rows";
while($row = $result->fetch_assoc()) {
  $user_id = $row["id"];
}
setcookie("user_id", $user_id, time() + (86400 * 30), "/"); // 86400 = 1 day
header('Location: index.php');
?>
