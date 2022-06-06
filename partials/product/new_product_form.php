<?php
require '../model/get_data_with_connection.php';
require '../utils/get_role_name.php';
require '../utils/get_branch_name.php';

function new_product_form()
{
  echo "
    <div class='mt-5 card new'>
      <div class='card-body new-register'>
        <form method='POST' action='../controller/product/create_product.php'>
          <div>
            <label for='name'>Nombre del producto</label>
            <input name='name' id='name' type='text' placeholder='Burger' required />
          </div>

          <div>
            <label for='price'>Precio</label>
            <input name='price' id='price' type='text' placeholder='150.00' required />
          </div>

          <div>
            <label for='description'>Descripción</label>
            <input name='description' id='description' type='text' placeholder='Alguna descripción' required />
          </div>

          <div>
            <label for='weigh'>Peso en gramos</label>
            <input name='weigh' id='weigh' type='text' placeholder='250' required />
          </div>

          <div>
            <label for='image'>Enlace de la foto del producto</label>
            <input name='image' id='image' type='text' placeholder='url' />
          </div>

          <div>
            <input type='submit' class='btn send' value='Agregar producto' />
          </div>
        </form>
      </div>
    </div>
  ";
}
