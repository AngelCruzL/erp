<?php
function get_current_session_role()
{
  $role = $_SESSION['role'];

  switch ($role) {
    case 'admin':
      return 'Administrador';
    case 'management':
      return 'Gestor';
    case 'deliveryman':
      return 'Repartidor';
    case 'chef':
      return 'Cocinero';
  }
  return $role;
}
