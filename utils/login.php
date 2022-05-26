  <?php
  include './php_connection.php';
  session_start();

  $user = $_POST['user'];
  $password = $_POST['password'];
  $dbUser = '';
  $dbPassword = '';
  $dbRole = '';

  $link = dbConnection();
  $loginQuery = ("SELECT db_user, db_pass, db_role FROM login_data WHERE db_user = '$user' AND db_pass = '$password'");
  $result = odbc_exec($link, $loginQuery);

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
