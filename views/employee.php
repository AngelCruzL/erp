<?php
session_start();

require '../shared/head.php';
require '../shared/header.php';
require '../shared/footer.php';

get_head('Empleado');
get_header();

if (isset($_GET['id'])) {
  require '../model/get_data_by_id.php';
  require '../partials/employee/employee_data_form.php';

  [$employeeData, $dbConnection] = get_data_by_id('employee', $_GET['id']);
  employee_data_form($employeeData, $dbConnection);
} else {
  require '../config/db_connection.php';
  require '../partials/employee/new_employee_form.php';

  $dbConnection = dbConnection();
  new_employee_form($dbConnection);
}

get_footer();
