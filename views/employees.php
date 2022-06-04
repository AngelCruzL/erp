<?php
session_start();
require '../shared/head.php';
require '../shared/header.php';
require '../model/get_table_data.php';
require '../utils/get_branch_name.php';
require '../utils/get_role_name.php';

get_head('Empleados');
get_header();

$employeeData = get_table_data('employee', 'ORDER BY is_active DESC, branch ASC');

echo "
<div class='wrapper'>
  <table class='mt-5 tac'>
    <tr>
      <th>Foto</th>
      <th>Nombre Completo</th>
      <th>Correo electrónico</th>
      <th>Número telefónico</th>
      <th>Activo</th>
      <th>Rol</th>
      <th>Sucursal</th>
      <th></th>
    </tr>
";
foreach ($employeeData as $employee) {
  $employeeID = $employee['id'];

  if ($employee['is_active'] == 1) $isActive = 'Si';
  else $isActive = 'No';

  echo "
    <tr>
      <td><div class='profile-pic'><img src='" . $employee['profile_picture'] . "'></img></div></td>
      <td>" . $employee['fullname'] . "</td>
      <td>" . $employee['email'] . "</td>
      <td>" . $employee['phone_number'] . "</td>
      <td>" . $isActive . "</td>
      <td>" . get_role_name($employee['role']) . "</td>
      <td>" . get_branch_name($employee['branch']) . "</td>
      <td><a href='./employee.php?id=$employeeID'>Editar</a></td>
    </tr>
  ";
}
echo "
</table>
</div>
<div class='mt-2 mb-3 center-content'>
  <a href='./employee.php' class='btn'>Agregar empleado</a>
</div>
";
