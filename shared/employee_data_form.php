<?php
require '../model/get_role_data.php';
require '../utils/get_role_name.php';
require '../model/get_branch_data.php';
require '../utils/get_branch_name.php';

function employee_data_form($employeeData, $dbConnection)
{
  echo "
    <div class='card mt-5'>
      <div class='profile-picture'>
        <img src='$employeeData[profile_picture]'>
      </div>

      <div class='card-body'>
        <form method='POST' action='../controller/employee/update_employee.php?id=$employeeData[id]'>
          <div>
            <label for='firstname'>Nombre(s)</label>
            <input name='firstname' id='firstname' type='text' value='$employeeData[firstname]' required />
          </div>

          <div>
            <label for='lastname'>Apellido(s)</label>
            <input name='lastname' id='lastname' type='text' value='$employeeData[lastname]' required />
          </div>

          <div>
            <label for='email'>Correo electrónico</label>
            <input name='email' id='email' type='email' value='$employeeData[email]' required />
          </div>

          <div>
            <label for='password'>Contraseña</label>
            <input name='password' id='password' type='password' value='$employeeData[password]' required />
          </div>

          <div>
            <label for='phone_number'>Número telefónico</label>
            <input name='phone_number' id='phone_number' type='text' value='$employeeData[phone_number]' required />
          </div>

          <div>
            <label for='profile_picture'>Enlace de la foto de perfil</label>
            <input name='profile_picture' id='profile_picture' type='text' value='$employeeData[profile_picture]' />
          </div>

          <div>
            <label for='is_active'>¿Esta activo?</label>
            <select name='is_active' id='is_active' required>
              <option value='1'>Si</option>
              <option value='0'>No</option>
            </select>
          </div>

          <div>
            <label for='role'>Rol</label>
            <select name='role' id='role' required>
  ";
  $roleData = get_role_data($dbConnection);
  foreach ($roleData as $role) {
    $roleID = $role['id'];
    $roleName = get_role_name($role['id']);
    echo "<option value='$roleID'";
    if ($roleID == $employeeData['role']) echo " selected";
    echo ">$roleName</option>
    ";
  }
  echo "        </select>
          </div>

          <div>
            <label for='branch'>Sucursal</label>
            <select name='branch' id='branch' required>";
  $branchData = get_branch_data($dbConnection);
  foreach ($branchData as $branch) {
    $branchID = $branch['id'];
    $branchName = get_branch_name($branch['id']);
    echo "<option value='$branchID'";
    if ($branchID == $employeeData['branch']) echo " selected";
    echo ">$branchName</option>
    ";
  }
  echo "    </select>
          </div>

          <input type='submit' class='btn send' value='Actualizar' />

          <input type='text' class'hidden' style='display: none;' name='id' value='$employeeData[id]' />
        </form>
      </div>
    </div>

    ";

  if ($employeeData['role'] === '1') {
    require '../shared/confirm_alert.php';

    echo "
    <div class='mt-3 center-content'>";
    confirm_alert('employee', 'empleado', $employeeData['id']);
    echo "</div>
    ";
  }
}
