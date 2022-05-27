  <?php
  include './php_connection.php';
  session_start();

  $user = $_POST['user'];
  $password = $_POST['password'];
  $dbUser = '';
  $dbPassword = '';
  $dbRole = '';

  $db = dbConnection();
  $loginQuery = ("SELECT id, password, role FROM employee WHERE id = '$user' AND password = '$password'");
  $result = mysqli_query($db, $loginQuery);

  echo "<pre>";
  var_dump($result);
  var_dump(mysqli_fetch_assoc($result));
  echo "</pre>";

  while ($row = odbc_fetch_array($result)) {
    $dbUser = $row['db_user'];
    $dbPass = $row['db_pass'];
    $dbRole = $row['db_role'];
  }

  if ($dbUser != '' && $dbPass != '') {
    $_SESSION['user'] = $dbUser;
    $_SESSION['role'] = $dbRole;

    include('../views/management.php');
    // switch ($dbRole) {
    //   case 'management':
    //     include('../views/management.php');
    //     break;
    //   case 'deliveryman':
    //     include('../views/deliveryman.php');
    //     break;
    //   case 'chef':
    //     include('../views/chef.php');
    //     break;
    // }
  } else {
    include('../views/index_fail.php');
  }
  ?>
