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
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$address = $_POST["address"];
$city = $_POST["city"];
$state = $_POST["state"];
$zipcode = $_POST["zipcode"];
if($_POST["role"] == "Farmer"){
  $role = 0;
}
else {
  $role = 1;
}
$password = $_POST["password"];
// echo "Connected successfully";
$stmt = $conn->prepare("INSERT INTO user (name, phone, email, address, city, state, zipcode, role, password)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssis", $name, $phone, $email, $address, $city, $state, $zipcode, $role, $password);
$stmt->execute();
$stmt = $conn->prepare("SELECT * FROM user ORDER BY id DESC LIMIT 1");
$stmt->execute();
$result = $stmt->get_result();
if($result->num_rows === 0) echo "No rows";
while($row = $result->fetch_assoc()) {
  $user_id = $row["id"];
}
setcookie("user_id", $user_id, time() + (86400 * 30), "/"); // 86400 = 1 day
header('Location: index.php');
?>
