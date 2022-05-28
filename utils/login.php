<?php
include './php_connection.php';
session_start();

$user = $_POST['user'];
$password = $_POST['password'];
$username = '';
$passwordDB = '';
$role = '';

$dbConnection = dbConnection();
$loginQuery = ("SELECT email, password, role, fullname, branch FROM employee WHERE email = '$user' AND password = '$password'");
$result = mysqli_query($dbConnection, $loginQuery);

while ($row = mysqli_fetch_assoc($result)) {
  $username = $row['fullname'];
  $passwordDB = $row['password'];
  $role = $row['role'];
  $branch = $row['branch'];
}

if ($username != '' && $passwordDB != '') {
  $_SESSION['user'] = $username;
  $_SESSION['role'] = $role;
  $_SESSION['branch'] = $branch;
  $_SESSION['connection'] = $dbConnection;

  include('../views/main.php');
} else {
  include('../views/index_fail.php');
}
