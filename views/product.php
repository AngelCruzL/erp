<?php
session_start();

require '../shared/head.php';
require '../shared/header.php';
require '../shared/footer.php';

get_head('Producto');
get_header();

if (isset($_GET['id'])) {
  require '../model/get_data_by_id.php';
  require '../partials/product/product_data_form.php';

  [$productData, $dbConnection] = get_data_by_id('food', $_GET['id']);
  product_data_form($productData);
} else {
  require '../config/db_connection.php';
  require '../partials/product/new_product_form.php';

  $dbConnection = dbConnection();
  new_product_form();
}

get_footer();
