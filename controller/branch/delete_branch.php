<?php
include '../../config/db_connection.php';
session_start();

$branch_id = $_GET['id'];

$dbConnection = dbConnection();
$deleteQuery = ("DELETE FROM branch WHERE id = '$branch_id'");
mysqli_query($dbConnection, $deleteQuery);

echo "
  <script>
    window . location . href = '../../views/branches.php';
  </script>
";
