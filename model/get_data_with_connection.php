<?php
function get_data_with_connection($table, $dbConnection)
{
  $query = "SELECT * FROM $table";
  $result = mysqli_query($dbConnection, $query);
  $data = array();

  while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
  }

  return $data;
}
