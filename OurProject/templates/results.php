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
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Farm on Table</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

  <style>
  .checked {
    color: orange;
  }
  </style>
</head>
<body style="background:#76b852;">

<div class="container" style="padding:8% 0 0; margin:auto; ">
  <div class="row">
    <div class="col-md-10 "></div>
    <div class="form-group col-md-2">
      <label class="text-white" for="sel1">Sort By:</label>
      <select class="form-control" id="sel1">
        <option>Price</option>
        <option>Rating</option>
        <option>Distance</option>
      </select>
    </div>
  </div>
  <?php
  // echo "Connected successfully";
  $stmt = $conn->prepare('SELECT * FROM `products` WHERE `name` LIKE ?');
  $stmt->bind_param("s", $_POST["name"]);
  $stmt->execute();
  $result = $stmt->get_result();

  if($result->num_rows === 0) echo "No rows";
  while($row = $result->fetch_assoc()) {
  ?>
  <div class="card-deck">
    <div class="card" style="width:400px">
      <img class="card-img-top" src="<?php echo $row['image']?>" alt="Card image" style="width:100px; heigth:100px;">
      <div class="card-body">
        <h4 class="card-title"><?php echo $row['name']?></h4>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <p class="card-text"><?php echo $row['price']?></p>
        <p class="card-text"><?php echo $row['description']?></p>
        <!--<a href="#" class="btn btn-success">Add</a>-->
        <a href="product.php?id=<?php echo $row['id']?>" class="btn btn-danger">View</a>
      </div>
    </div>
  <?php
  }
  $stmt->close();
  ?>

  </div>

</body>
</html>

<?php
$conn->close();
?>
