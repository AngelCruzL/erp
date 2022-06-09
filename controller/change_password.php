<?php
include '../config/db_connection.php';

$temp_pass = $_POST['tempPass'];
$new_pass = $_POST['newPass'];
$email = $_POST['email'];

$dbConnection = dbConnection();
$getEmployeeQuery = "SELECT reset_password, password FROM employee WHERE email = '$email'";
$result = mysqli_query($dbConnection, $getEmployeeQuery);
$userQuery = mysqli_fetch_assoc($result);

if (!$userQuery || $userQuery['reset_password'] != 1) {
  include '../shared/display_message.php';
  display_message('No es posible realizar una actualización de contraseña, hable con el administrador');
  return;
}

$auth = password_verify($temp_pass, $userQuery['password']);

if (!$auth) {
  include '../views/change_password_fail.php';
  return;
}

$new_pass = password_hash($new_pass, PASSWORD_BCRYPT);

$updatePasswordQuery = "UPDATE employee SET password = '$new_pass', reset_password = 0 WHERE email = '$email'";
mysqli_query($dbConnection, $updatePasswordQuery);

include '../shared/display_message.php';
display_message('Contraseña actualizada exitosamente');
return;
