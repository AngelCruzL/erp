<?php
include '../config/db_connection.php';
session_start();

$user = $_POST['user'];
$password = $_POST['password'];
$username = '';
$passwordDB = '';
$role = '';
$branch = '';

$dbConnection = dbConnection();
$getEmployeeQuery = "SELECT * FROM employee WHERE email = '$user'";
$result = mysqli_query($dbConnection, $getEmployeeQuery);
$userQuery = mysqli_fetch_assoc($result);
$auth = password_verify($password, $userQuery['password']);

if ($auth) {
  $loginQuery = ("SELECT email, role, fullname, branch FROM employee WHERE email = '$user' AND is_active = 1");
  $result = mysqli_query($dbConnection, $loginQuery);

  while ($row = mysqli_fetch_assoc($result)) {
    $username = $row['fullname'];
    $role = $row['role'];
    $branch = $row['branch'];
  }

  $_SESSION['username'] = $username;
  $_SESSION['role'] = $role;
  $_SESSION['branch'] = $branch;
  $_SESSION['connection'] = $dbConnection;

  include('../views/home.php');
} else {
  include('../views/index_fail.php');
}
