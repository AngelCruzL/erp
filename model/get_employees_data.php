<?php
require '../config/db_connection.php';

function get_employees_data()
{
  $dbConnection = dbConnection();
  $employeeQuery = "SELECT * FROM employee";
  $employeeResult = mysqli_query($dbConnection, $employeeQuery);
  $employeeData = array();

  while ($row = mysqli_fetch_assoc($employeeResult)) {
    $employeeData[] = $row;
  }

  return $employeeData;
}
