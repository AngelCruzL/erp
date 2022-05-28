<?php
require '../shared/head.php';
require '../utils/get_branch_name.php';
require '../utils/get_role_name.php';
require '../shared/header.php';
require '../shared/footer.php';

get_head('Ghost Burgers | Home');

$name = $_SESSION['username'];
$role = get_role_name($_SESSION['role']);
$branch = get_branch_name($_SESSION['branch']);
get_header();
?>

<main class="hero">
  <div class="wrapper">
    <p>Rol: <strong><?php echo $role; ?></strong></p>
    <p>Sucursal: <strong><?php echo $branch; ?></strong></p>
  </div>
</main>

<?php get_footer(); ?>