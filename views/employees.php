<?php
session_start();
require '../model/get_employees_data.php';
require '../shared/head.php';
require '../shared/header.php';
// require '../shared/footer.php';
require '../utils/get_branch_name.php';
require '../utils/get_role_name.php';

get_head('Employees');
get_header();

$employeeData = get_employees_data();

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
<div class='center-content mt-2 mb-3'>
  <a href='./employee.php' class='btn'>Agregar empleado</a>
</div>
";

// get_footer();
