<?php
function get_role_name($role)
{
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
