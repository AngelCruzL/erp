<?php
include '../../config/db_connection.php';

$id = $_POST['id'];
$employees_number = $_POST['employees_number'];
$phone_number = $_POST['phone_number'];
$picture = $_POST['picture'];

$dbConnection = dbConnection();
$updateQuery = ("UPDATE branch SET employees_number = '$employees_number', phone_number = '$phone_number', picture = '$picture' WHERE id = '$id'");
mysqli_query($dbConnection, $updateQuery);

echo "
  <script>
    window . location . href = '../../views/branches.php';
  </script>
";
