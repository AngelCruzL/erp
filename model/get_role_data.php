<?php
function get_role_data($dbConnection)
{
  $roleQuery = "SELECT * FROM role";
  $roleResult = mysqli_query($dbConnection, $roleQuery);
  $roleData = array();

  while ($row = mysqli_fetch_assoc($roleResult)) {
    $roleData[] = $row;
  }

  return $roleData;
}
