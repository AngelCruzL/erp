<?php
require '../config/db_connection.php';

function get_employee_data($employeeId)
{
  $dbConnection = dbConnection();
  $employeeQuery = "SELECT * FROM employee WHERE id = '$employeeId'";
  $employeeResult = mysqli_query($dbConnection, $employeeQuery);
  $employeeData = array();

  while ($row = mysqli_fetch_assoc($employeeResult)) {
    $employeeData[] = $row;
  }

  return [$employeeData[0], $dbConnection];
}
