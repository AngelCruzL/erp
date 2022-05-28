<?php
session_start();
require '../model/get_employee_data.php';
require '../shared/head.php';
require '../shared/header.php';
require '../shared/footer.php';
require '../utils/get_branch_name.php';
require '../utils/get_role_name.php';

get_head('Employees');
get_header();

$employeeData = get_employee_data();

echo "
<div class='wrapper'>
  <table class='mt-5 tac'>
    <tr>
      <th>Foto</th>
      <th>Nombre(s)</th>
      <th>Apellido(s)</th>
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
  echo "
    <tr>
      <td><div class='profile-pic'><img src='" . $employee['profile_picture'] . "'></img></div></td>
      <td>" . $employee['firstname'] . "</td>
      <td>" . $employee['lastname'] . "</td>
      <td>" . $employee['email'] . "</td>
      <td>" . $employee['phone_number'] . "</td>
      <td>" . $employee['is_active'] . "</td>
      <td>" . get_role_name($employee['role']) . "</td>
      <td>" . get_branch_name($employee['branch']) . "</td>
      <td><a href='../controller/edit_employee.php?id=$employeeID'>Editar</a></td>
    </tr>
  ";
}
echo "
</table>
</div>
<div class='center-content mt-2'>
<a href='../controller/create_employee.php' class='btn'>Agregar empleado</a>
</div>
";

get_footer();
