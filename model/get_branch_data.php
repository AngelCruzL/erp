<?php
function get_branch_data($dbConnection)
{
  $branchQuery = "SELECT * FROM branch";
  $branchResult = mysqli_query($dbConnection, $branchQuery);
  $branchData = array();

  while ($row = mysqli_fetch_assoc($branchResult)) {
    $branchData[] = $row;
  }

  return $branchData;
}
