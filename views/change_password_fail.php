<?php
require '../shared/head.php';
get_head('Cambiar contraseña | Ghost Burgers');

echo "
<section class='center-content mt-5 wrapper'>
  <form action='../controller/change_password.php' method='POST'>
    <label>
      Ingrese la contraseña temporal
      <input type='text' name='tempPass' placeholder='contraseña' required />
    </label>

    <label class='mt-2 mb-3'>
      Ingrese la nueva contraseña
      <input type='text' name='newPass' placeholder='nueva contraseña' required />
    </label>

    <input type='submit' class='mt-1' value='Actualizar contraseña' aria-label='Actualizar contraseña' />

    <input type='text' class='hidden' name='email' value='$email' />
  </form>
</section>

<p class='tac mt-2' style='color: #f00;'>Contraseña temporal incorrecta</p>

";
