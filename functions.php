<?php
function rand_password(int $length)
{
  $sets = [
    'abcdefghijklmnopqrstuvwxyz',
    'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
    '0123456789',
    '!@#$%^&*-_'
  ];

  $password = '';

  // Garantisco almeno un carattere per tipo
  foreach ($sets as $set) {
    $password .= $set[rand(0, strlen($set) - 1)];
  }

  // Unisco i caratteri rimanenti
  $all_chars = implode('', $sets);

  // completo la password fino alla lunghezza desiderata
  while (strlen($password) < $length) {
    $password .= $all_chars[rand(0, strlen($all_chars) - 1)];
  }

  // mescolo la stringa finale
  return str_shuffle($password);
}
?>