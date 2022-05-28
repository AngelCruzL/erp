<?php
function get_current_session_role()
{
  $role = $_SESSION['role'];

  switch ($role) {
    case '1':
      return 'Administrador';
    case '2':
      return 'Gestor';
    case '3':
      return 'Repartidor';
    case '4':
      return 'Cocinero';
  }
  return $role;
}
