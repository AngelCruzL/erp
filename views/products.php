<?php
session_start();
require '../shared/head.php';
require '../shared/header.php';
require '../model/get_table_data.php';

get_head('Productos');
get_header();

$productData = get_table_data('food');

echo "<div class='mt-5 wrapper branches-container'>";
foreach ($productData as $product) {
  $productID = $product['id'];

  echo "
  <div class='branch-card'>
    <header>
      <img src=" . $product['image'] . " alt=''>
    </header>

    <div class='branch-card-content'>
      <h3>" . $product['name'] . "</h3>

      <p>" . $product['description'] . "</p>

      <div class='svg-container'>
        <p> $" . $product['price'] . "</p>
      </div>

      <div class='svg-container'>
        <p>" . $product['weigh'] . " gramos</p>
      </div>

      <div class='mt-1'>
        <a href='./product.php?id=$productID' class='btn is-secondary'>Editar</a>
      </div>
    </div>
  </div>
";
}
echo "</div>";
