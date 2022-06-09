<?php
session_destroy();
require '../shared/head.php';
get_head('Ghost Burgers | Login');
?>

<main class='wrapper flex-cc errorMessage'>
  <h1>Ghost Burgers</h1>

  <img src='../img/logo.png' class='logo mt-3' alt='Logo ghost burgers' />

  <br /><br />
  <p>Datos de ingreso incorrectos</p>

  <form class='mt-5 login' method='POST' action='../controller/login.php'>
    <label>
      Usuario
      <input type='email' name='email' placeholder='correo@correo.com' required />
    </label>

    <label>
      Contraseña
      <input type='password' name='password' placeholder='Contraseña' required />
    </label>

    <input type='submit' value='Ingresar' aria-label='Ingresar' id='send' />
  </form>

  <div>
    <div></div>
    <a href="../views/forgot_password.php" class="forgot-password">¿Olvidaste tu contraseña?</a>
  </div>
</main>

</body>

</html>