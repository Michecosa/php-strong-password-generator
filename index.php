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

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EX - Password Generator</title>
</head>

<body>

  <h1>EX - Password Generator</h1>
  <form action="" method="get">
    <label for="password_length">Lunghezza password:</label>
    <input type="number" name="password_length" id="password_length" min=8 max=16 value=<?php if (!empty($_GET['password_length'])) echo $_GET['password_length'] ?>>
    <button type="submit">Invia</button>
    <?php
    if (!empty($_GET['password_length'])) {
      echo rand_password($_GET['password_length']);
    }
    ?>
  </form>
</body>

</html>