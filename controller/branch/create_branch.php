<?php
include '../../config/db_connection.php';

$name = $_POST['name'];
$address = $_POST['address'];
$employees_number = $_POST['employees_number'];
$phone_number = $_POST['phone_number'];
$picture = $_POST['picture'];

$dbConnection = dbConnection();
$createQuery = "INSERT INTO branch (name, address, employees_number, phone_number, picture) VALUES ('$name', '$address', '$employees_number', '$phone_number', '$picture')";
mysqli_query($dbConnection, $createQuery);

echo "
  <script>
    window . location . href = '../../views/branches.php';
  </script>
";
