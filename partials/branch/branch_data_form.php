<?php
require '../model/get_data_with_connection.php';
require '../utils/get_role_name.php';
require '../utils/get_branch_name.php';

function branch_data_form($branchData)
{
  echo "
    <div class='mt-5 card'>
      <div class='profile-picture'>
        <img src='$branchData[picture]'>
      </div>

      <div class='card-body'>
        <form method='POST' action='../controller/branch/update_branch.php?id=$branchData[id]'>
          <div>
            <label for='name'>Nombre de la sucursal</label>
            <input name='name' id='name' type='text' value='$branchData[name]' disabled />
          </div>

          <div>
            <label for='address'>Dirección</label>
            <input name='address' id='address' type='text' value='$branchData[address]' disabled />
          </div>

          <div>
            <label for='employees_number'>Número de empleados</label>
            <input name='employees_number' id='employees_number' type='text' value='$branchData[employees_number]' required />
          </div>

          <div>
            <label for='phone_number'>Número telefónico</label>
            <input name='phone_number' id='phone_number' type='text' value='$branchData[phone_number]' required />
          </div>

          <div>
            <label for='picture'>Enlace de la foto de sucursal</label>
            <input name='picture' id='picture' type='text' value='$branchData[picture]' />
          </div>

          <input type='submit' class='btn send' value='Actualizar' />

          <input type='text' class='hidden' name='id' value='$branchData[id]' />
        </form>
      </div>
    </div>

    ";

  if ($_SESSION['role'] == '1') {
    require '../shared/confirm_alert.php';

    echo "
    <div class='mt-3 center-content'>";
    confirm_alert('branch', 'sucursal', $branchData['id']);
    echo "</div>
    ";
  }
}
