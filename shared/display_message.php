<?php
require '../shared/head.php';
get_head('Ghost Burgers');

function display_message($message)
{
  echo "
    <p class='tac mt-3'>" . $message . "</p>

    <p class='mt-5 tac'>
      <a href='../index.php' class='btn is-tertiary'>Ir al login</a>
    </p>
  ";
}
