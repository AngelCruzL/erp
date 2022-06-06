<?php
include '../../config/db_connection.php';
session_start();

$user_id = $_GET['id'];

$dbConnection = dbConnection();
$deleteQuery = ("DELETE FROM food WHERE id = '$user_id'");
mysqli_query($dbConnection, $deleteQuery);

echo "
  <script>
    window . location . href = '../../views/products.php';
  </script>
";
