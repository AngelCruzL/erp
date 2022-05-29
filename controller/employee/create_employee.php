<?php
include '../../config/db_connection.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$phone_number = $_POST['phone_number'];
$profile_picture = $_POST['profile_picture'];
$role = $_POST['role'];
$branch = $_POST['branch'];

$dbConnection = dbConnection();
$createQuery = "INSERT INTO employee (firstname, lastname, email, password, phone_number, profile_picture, role, branch) VALUES ('$firstname', '$lastname', '$email', '$password', '$phone_number', '$profile_picture', '$role', '$branch')";
mysqli_query($dbConnection, $createQuery);

echo "
  <script>
    window . location . href = '../../views/employees.php';
  </script>
";
