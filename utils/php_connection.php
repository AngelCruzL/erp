  <?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  function dbConnection()
  {
    $dsn = "Driver={SQL Server};
      Server=localhost;Database=ghost_burgers;";
    $username = "sa";
    $password = "sluigy123";

    if (!($link = odbc_connect($dsn, $username, $password))) {
      echo "Error conectando a la base de datos.";
      exit();
    } else {
      // echo "<br>conecto";
    }
    return $link;
  }
  ?>
