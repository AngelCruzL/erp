<?php
session_start();

require '../shared/head.php';
require '../shared/header.php';
require '../shared/footer.php';

get_head('Empleado');
get_header();

if (isset($_GET['id'])) {
  require '../model/get_employee_data.php';
  require '../shared/employee_data_form.php';

  [$employeeData, $dbConnection] = get_employee_data($_GET['id']);
  employee_data_form($employeeData, $dbConnection);
} else {
  require '../config/db_connection.php';
  require '../shared/new_employee_form.php';

  $dbConnection = dbConnection();
  new_employee_form($dbConnection);
}

get_footer();
