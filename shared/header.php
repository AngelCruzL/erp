<?php
require '../utils/get_current_session_role.php';

function get_header($role)
{
  $name = $_SESSION['username'];

  echo "
    <div class='welcome'>
      <p>Bienvenido " . $name . "</p>
    </div>

    <a href='../index.php' class='logout'>Salir</a>

    <nav class='mainNav'>
      <ul class='wrapper'>";
  if ($role == 'Administrador') echo "<li><a href='#'>Empleados</a></li>";
  echo "
        <li><a href='#'>Sucursales</a></li>
        <li><a href='#'>Productos</a></li>
      </ul>
    </nav>
  ";
}
