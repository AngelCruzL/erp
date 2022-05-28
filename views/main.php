<?php
require '../utils/get_current_session_role.php';
require '../utils/get_current_session_branch.php';
require '../shared/head.php';
get_head('Ghost Burgers | Home');

$name = $_SESSION['user'];
$place = get_current_session_branch();
$role = get_current_session_role();
?>

<div class="welcome">
  <p>Bienvenido <?php echo $name; ?></p>
</div>

<a href="../index.php" class="logout">Salir</a>

<nav class="mainNav">
  <ul class="wrapper">
    <?php
    if ($role == 'Administrador') echo '<li><a href="#">Empleados</a></li>';
    ?>
    <li><a href="#">Sucursales</a></li>
    <li><a href="#">Productos</a></li>
  </ul>
</nav>

<main class="hero">
  <div class="wrapper">
    <p>Rol: <strong><?php echo $role; ?></strong></p>
    <p>Sucursal: <strong><?php echo $place; ?></strong></p>
  </div>
</main>
</body>

</html>