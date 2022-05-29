<?php
if (session_start()) session_destroy();
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
      <input type='text' name='user' id='user' placeholder='Usuario' required />
    </label>

    <label>
      Contraseña
      <input type='password' name='password' id='password' placeholder='Contraseña' required />
    </label>

    <input type='submit' value='Ingresar' aria-label='Ingresar' id='send' />
  </form>
</main>

</body>

</html>