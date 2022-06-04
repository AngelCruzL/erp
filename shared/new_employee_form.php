<?php
require '../model/get_data_with_connection.php';
require '../utils/get_role_name.php';
require '../utils/get_branch_name.php';

function new_employee_form($dbConnection)
{
  echo "
    <div class='mt-5 card new'>
      <div class='card-body new-register'>
        <form method='POST' action='../controller/employee/create_employee.php'>
          <div>
            <label for='firstname'>Nombre(s)</label>
            <input name='firstname' id='firstname' type='text' placeholder='John' required />
          </div>

          <div>
            <label for='lastname'>Apellido(s)</label>
            <input name='lastname' id='lastname' type='text' placeholder='Doe' required />
          </div>

          <div>
            <label for='email'>Correo electrónico</label>
            <input name='email' id='email' type='email' placeholder='email@mail.com' required />
          </div>

          <div>
            <label for='phone_number'>Número telefónico</label>
            <input name='phone_number' id='phone_number' type='text' placeholder='1234567890' required />
          </div>

          <div>
            <label for='profile_picture'>Enlace de la foto de perfil</label>
            <input name='profile_picture' id='profile_picture' type='text' placeholder='url-to-image' />
          </div>

          <div>
            <label for='role'>Rol</label>
            <select name='role' id='role' required>
  ";
  $roleData = get_data_with_connection('role', $dbConnection);
  foreach ($roleData as $role) {
    $roleID = $role['id'];
    $roleName = get_role_name($role['id']);
    echo "<option value='$roleID'";
    echo ">$roleName</option>
    ";
  }
  echo "        </select>
          </div>

          <div>
            <label for='branch'>Sucursal</label>
            <select name='branch' id='branch' required>";
  $branchData = get_data_with_connection('branch', $dbConnection);
  foreach ($branchData as $branch) {
    $branchID = $branch['id'];
    $branchName = get_branch_name($branch['id']);
    echo "<option value='$branchID'";
    echo ">$branchName</option>
    ";
  }
  echo "    </select>
          </div>

          <div>
            <input type='submit' class='btn send' value='Agregar empleado' />
          </div>
        </form>
      </div>
    </div>
  ";
}
