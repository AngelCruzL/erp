<?php
include '../../config/db_connection.php';

$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];
$weigh = $_POST['weigh'];
$image = $_POST['image'];
$slug = strtolower(str_replace(' ', '-', $name));

$dbConnection = dbConnection();
$createQuery = "INSERT INTO food (name, price, description, weigh, image, slug) VALUES ('$name', '$price', '$description', '$weigh', '$image', '$slug')";
mysqli_query($dbConnection, $createQuery);

echo "
  <script>
    window . location . href = '../../views/products.php';
  </script>
";
