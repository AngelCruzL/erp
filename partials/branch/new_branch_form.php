<?php
require '../model/get_data_with_connection.php';
require '../utils/get_role_name.php';
require '../utils/get_branch_name.php';

function new_employee_form()
{
  echo "
    <div class='mt-5 card new'>
      <div class='card-body new-register'>
        <form method='POST' action='../controller/branch/create_branch.php'>
          <div>
            <label for='name'>Nombre de la sucursal</label>
            <input name='name' id='name' type='text' placeholder='Gustavo A. Madero' required />
          </div>

          <div>
            <label for='address'>Dirección</label>
            <input name='address' id='address' type='text' placeholder='Dirección de ejemplo, CP: 12345' required />
          </div>

          <div>
            <label for='employees_number'>Número de empleados</label>
            <input name='employees_number' id='employees_number' type='text' placeholder='15' required />
          </div>

          <div>
            <label for='phone_number'>Número telefónico</label>
            <input name='phone_number' id='phone_number' type='text' placeholder='1230984765' required />
          </div>

          <div>
            <label for='picture'>Enlace de la foto de sucursal</label>
            <input name='picture' id='picture' type='text' placeholder='Alguna url' />
          </div>

          <div>
            <input type='submit' class='btn send' placeholder='Agregar sucursal' />
          </div>
        </form>
      </div>
    </div>
  ";
}
