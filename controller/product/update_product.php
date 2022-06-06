<?php
include '../../config/db_connection.php';

$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];
$weigh = $_POST['weigh'];
$image = $_POST['image'];

$dbConnection = dbConnection();
$updateQuery = ("UPDATE food SET name = '$name', price = '$price', description = '$description', weigh = '$weigh', image = '$image' WHERE id = '$id'");
mysqli_query($dbConnection, $updateQuery);

echo "
  <script>
    window . location . href = '../../views/products.php';
  </script>
";
