<?php
require '../vendor/autoload.php';

use Classes\Email;

include '../config/db_connection.php';
include '../utils/generate_random_password.php';

$email = $_POST['email'];

$dbConnection = dbConnection();
$getEmployeeQuery = "SELECT fullname, email FROM employee WHERE email = '$email'";
$result = mysqli_query($dbConnection, $getEmployeeQuery);
$userQuery = mysqli_fetch_assoc($result);

if (!$userQuery) {
  include('../views/forgot_password_fail.php');
  return;
}

$password = generate_random_password();
$mail = new Email($userQuery['email'], $userQuery['fullname'], $password);
$mail->sendMail();

$hashed_password = password_hash($password, PASSWORD_BCRYPT);
$updatePasswordQuery = "UPDATE employee SET password = '$hashed_password', reset_password = 1 WHERE email = '$email'";
mysqli_query($dbConnection, $updatePasswordQuery);

include '../shared/display_message.php';
display_message('Se envió un correo con las instrucciones para el cambio de contraseña');
