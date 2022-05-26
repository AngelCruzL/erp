  <?php
  function get_head($page_title, $is_in_root = false)
  {
    $is_in_root ? $path = '.' : $path = '..';

    echo "
      <!DOCTYPE html>
      <html lang='en'>

      <head>
        <meta charset='UTF-8' />
        <meta http-equiv='X-UA-Compatible' content='IE=edge' />
        <meta name='viewport' content='width=device-width, initial-scale=1.0' />
        <title>$page_title</title>
        <link rel='icon' href='$path/img/logo.png' />
        <link rel='stylesheet' href='$path/css/styles.css' />
      </head>

      <body>";
  }
  ?>