<?php
include '../../config/db_connection.php';

$id = $_POST['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone_number = $_POST['phone_number'];
$profile_picture = $_POST['profile_picture'];
$is_active = $_POST['is_active'];
$role = $_POST['role'];
$branch = $_POST['branch'];

$dbConnection = dbConnection();
$updateQuery = ("UPDATE employee SET firstname = '$firstname', lastname = '$lastname', email = '$email', password = '$password', phone_number = '$phone_number', profile_picture = '$profile_picture', is_active = '$is_active', role = '$role', branch = '$branch' WHERE id = '$id'");
mysqli_query($dbConnection, $updateQuery);

echo "
  <script>
    window . location . href = '../../views/employees.php';
  </script>
";
