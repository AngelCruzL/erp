<?php
function get_data_by_id($table, $id)
{
  require '../config/db_connection.php';

  $dbConnection = dbConnection();
  $query = "SELECT * FROM $table WHERE id = '$id'";
  $result = mysqli_query($dbConnection, $query);
  $data = array();

  while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
  }

  return [$data[0], $dbConnection];
}
