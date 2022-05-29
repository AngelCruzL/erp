<?php
session_start();
require '../shared/head.php';
require '../shared/header.php';
require '../shared/footer.php';
require '../model/get_employee_data.php';
require '../utils/load_employee_data.php';

get_head('Empleado');
get_header();

if (isset($_GET['id'])) {
  [$employeeData, $dbConnection] = get_employee_data($_GET['id']);
  load_employee_data($employeeData, $dbConnection);
} else {
  echo "No hay id";
}

get_footer();
