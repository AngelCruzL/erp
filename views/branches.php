<?php
session_start();
require '../shared/head.php';
require '../shared/header.php';
require '../shared/footer.php';
require '../model/get_branch_data.php';
require '../config/db_connection.php';
$dbConnection = dbConnection();

get_head('Employees');
get_header();

$branchData = get_branch_data($dbConnection);

echo "<div class='wrapper mt-5 branches-container'>";
foreach ($branchData as $branch) {
  echo "
  <div class='branch-card'>
    <header>
      <img src=" . $branch['picture'] . " alt=''>
    </header>

    <div class='branch-card-content'>
      <h3>" . $branch['name'] . "</h3>

      <p>" . $branch['address'] . "</p>

      <div class='svg-container'>
        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
          <path d='M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z' />
        </svg>
        <p>2353636</p>
      </div>

      <div class='svg-container'>
        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 640 512'>
          <path d='M224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3c-95.73 0-173.3 77.6-173.3 173.3C0 496.5 15.52 512 34.66 512H413.3C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304zM479.1 320h-73.85C451.2 357.7 480 414.1 480 477.3C480 490.1 476.2 501.9 470 512h138C625.7 512 640 497.6 640 479.1C640 391.6 568.4 320 479.1 320zM432 256C493.9 256 544 205.9 544 144S493.9 32 432 32c-25.11 0-48.04 8.555-66.72 22.51C376.8 76.63 384 101.4 384 128c0 35.52-11.93 68.14-31.59 94.71C372.7 243.2 400.8 256 432 256z' />
        </svg>
        <p>15</p>
      </div>

      <div class='mt-1'>
        <a href='' class='btn is-secondary'>Editar</a>
      </div>
    </div>
  </div>
";
}
echo "</div>";
