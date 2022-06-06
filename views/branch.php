<?php
session_start();

require '../shared/head.php';
require '../shared/header.php';
require '../shared/footer.php';

get_head('Sucursal');
get_header();

if (isset($_GET['id'])) {
  require '../model/get_data_by_id.php';
  require '../partials/branch/branch_data_form.php';

  [$branchData, $dbConnection] = get_data_by_id('branch', $_GET['id']);
  branch_data_form($branchData, $dbConnection);
} else {
  require '../config/db_connection.php';
  require '../partials/branch/new_branch_form.php';

  $dbConnection = dbConnection();
  new_employee_form($dbConnection);
}

get_footer();
