<?php
require '../shared/head.php';
get_head('Cambiar contraseña | Ghost Burgers');

$display_errors = ini_get('display_errors'); // get the initial value
ini_set('display_errors', 0); // do not display errors or warnings. Yup, it turns off warnings, too.

if (!$email) $email = $_GET['email'];

echo "
<section class='center-content mt-5 wrapper'>
  <form action='../controller/change_password.php' method='POST'>
    <label>
      Ingrese la contraseña temporal
      <input type='password' name='tempPass' placeholder='contraseña' required />
    </label>

    <label class='mt-2 mb-3'>
      Ingrese la nueva contraseña
      <input type='password' name='newPass' placeholder='nueva contraseña' required />
    </label>

    <input type='submit' class='mt-1' value='Actualizar contraseña' aria-label='Actualizar contraseña' />

    <input type='text' class='hidden' name='email' value='$email' />
  </form>
</section>
";
