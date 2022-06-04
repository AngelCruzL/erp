<?php
function get_table_data($table, $additionalQueryPart = '')
{
  require '../config/db_connection.php';

  $dbConnection = dbConnection();
  $tableQuery = "SELECT * FROM $table $additionalQueryPart";
  $queyResult = mysqli_query($dbConnection, $tableQuery);
  $queryData = array();

  while ($row = mysqli_fetch_assoc($queyResult)) {
    $queryData[] = $row;
  }

  return $queryData;
}
