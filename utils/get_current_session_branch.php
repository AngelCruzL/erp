<?php
function get_current_session_branch()
{
  $branch = $_SESSION['branch'];

  switch ($branch) {
    case '1':
      return 'Azcapotzalco';
    case '2':
      return 'Miguel Hidalgo';
    case '3':
      return 'Gustavo A. Madero';
  }
  return $branch;
}
