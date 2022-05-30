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

if (!$userQuery) {
  include('../views/index_fail.php');
  return;
}

($userQuery['is_active'] == 1) ? $isActive = true : $isActive = false;
$auth = password_verify($password, $userQuery['password']);

if ($auth && $isActive) {
  $loginQuery = ("SELECT email, role, fullname, branch FROM employee WHERE email = '$user'");
  $result = mysqli_query($dbConnection, $loginQuery);

  while ($row = mysqli_fetch_assoc($result)) {
    $username = $row['fullname'];
    $role = $row['role'];
    $branch = $row['branch'];
  }

  $_SESSION['username'] = $username;
  $_SESSION['role'] = $role;
  $_SESSION['branch'] = $branch;

  include('../views/home.php');
} else {
  include('../views/index_fail.php');
}
