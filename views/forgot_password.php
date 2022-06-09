<?php
require '../shared/head.php';
get_head('Olvide mi contraseña | Ghost Burgers');
?>

<section class="center-content mt-5 wrapper">
  <form action="../controller/reset_password.php" method='POST'>
    <label class="mb-3">
      Coloque el correo electrónico asociado a su cuenta
      <input type='email' name='email' placeholder='correo@correo.com' required />
    </label>

    <input type='submit' class="mt-1" value='Enviar' aria-label='Enviar' />
  </form>
</section>