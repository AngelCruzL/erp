<?php
session_start();
require '../model/get_employee_data.php';
require '../shared/head.php';
require '../shared/header.php';
require '../shared/employee_data_form.php';
require '../shared/footer.php';

get_head('Empleado');
get_header();

if (isset($_GET['id'])) {
  [$employeeData, $dbConnection] = get_employee_data($_GET['id']);
  employee_data_form($employeeData, $dbConnection);
} else {
  echo "No hay id";
}

get_footer();
