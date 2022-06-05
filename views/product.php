<?php
session_start();

require '../shared/head.php';
require '../shared/header.php';
require '../shared/footer.php';

get_head('Empleado');
get_header();

if (isset($_GET['id'])) {
  require '../model/get_data_by_id.php';
  require '../shared/employee_data_form.php';

  [$productData, $dbConnection] = get_data_by_id('food', $_GET['id']);
  employee_data_form($productData, $dbConnection);
} else {
  require '../config/db_connection.php';
  require '../shared/new_employee_form.php';

  $dbConnection = dbConnection();
  new_employee_form($dbConnection);
}

get_footer();
