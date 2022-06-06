<?php
require '../model/get_data_with_connection.php';
require '../utils/get_role_name.php';
require '../utils/get_branch_name.php';

function product_data_form($productData)
{
  echo "
    <div class='mt-5 card'>
      <div class='profile-picture'>
        <img src='$productData[image]'>
      </div>

      <div class='card-body'>
        <form method='POST' action='../controller/product/update_product.php'>
          <div>
            <label for='name'>Nombre del producto</label>
            <input name='name' id='name' type='text' value='$productData[name]' required />
          </div>

          <div>
            <label for='price'>Precio</label>
            <input name='price' id='price' type='text' value='$productData[price]' required />
          </div>

          <div>
            <label for='description'>Descripción</label>
            <input name='description' id='description' type='text' value='$productData[description]' required />
          </div>

          <div>
            <label for='weigh'>Peso en gramos</label>
            <input name='weigh' id='weigh' type='text' value='$productData[weigh]' required />
          </div>

          <div>
            <label for='image'>Enlace de la foto del producto</label>
            <input name='image' id='image' type='text' value='$productData[image]' />
          </div>

          <input type='submit' class='btn send' value='Actualizar' />

          <input type='text' class='hidden' name='id' value='$productData[id]' />
        </form>
      </div>
    </div>
    ";

  if ($_SESSION['role'] == '1') {
    require '../shared/confirm_alert.php';

    echo "
    <div class='mt-3 center-content'>";
    confirm_alert('product', 'producto', $productData['id']);
    echo "</div>
    ";
  }
}
