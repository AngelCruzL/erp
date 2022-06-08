<?php

function generate_random_password()
{
  $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
  $random_string = str_shuffle($alphabet);
  $random_string = substr($random_string, 0, 8);
  return $random_string;
}
