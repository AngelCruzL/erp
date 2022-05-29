<?php
function get_header()
{
  $name = $_SESSION['username'];
  $role = $_SESSION['role'];
  echo "
    <div class='welcome'>
      <a href='../views/home.php'></a>
      <p>Bienvenido " .  $name . "</p>
      <a href='../index.php'>Salir</a>
    </div>


    <nav class='mainNav'>
      <ul class='wrapper'>";
  if ($role == '1' || $role == '2') echo "<li><a href='../views/employees.php'>Empleados</a></li>";
  echo "
        <li><a href='#'>Sucursales</a></li>
        <li><a href='#'>Productos</a></li>
      </ul>
    </nav>
  ";
}
