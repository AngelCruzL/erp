<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function dbConnection()
{
  $host = "localhost";
  $username = "root";
  $password = "root";
  $database = "ghost_burgers";

  if (!($dbConnection = mysqli_connect($host, $username, $password, $database))) {
    echo "Error conectando a la base de datos.";
    exit();
  } else {
    // echo "<br>conecto";
  }
  return $dbConnection;
}
