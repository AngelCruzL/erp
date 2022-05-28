<?php
require '../shared/head.php';
require '../utils/get_current_session_branch.php';
require '../shared/header.php';

get_head('Ghost Burgers | Home');

$place = get_current_session_branch();
$role = get_current_session_role();
get_header($role);
?>

<main class="hero">
  <div class="wrapper">
    <p>Rol: <strong><?php echo $role; ?></strong></p>
    <p>Sucursal: <strong><?php echo $place; ?></strong></p>
  </div>
</main>
</body>

</html>