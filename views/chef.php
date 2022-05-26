<?php
require '../shared/head.php';
get_head('Ghost Burgers | Home');

$name = 'Luis Ángel';
$place = 'Ciudad de México';
$role = 'Cocinero';
?>

<div class="welcome">
  <p>Bienvenido <?php echo $name; ?></p>
</div>

<a href="../index.php" class="logout">Salir</a>

<nav class="mainNav">
  <ul class="wrapper">
    <li><a href="#">Productos</a></li>
    <li><a href="#">Sucursales</a></li>
    <li><a href="#">Precios</a></li>
  </ul>
</nav>

<main class="hero">
  <div class="wrapper">
    <p>Sucursal: <strong><?php echo $place; ?></strong></p>
    <p>Rol: <strong><?php echo $role; ?></strong></p>
  </div>
</main>
</body>

</html>