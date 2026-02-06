<?php
require_once "./functions.php";
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
    <input
      type="number"
      name="password_length"
      id="password_length"
      min="8"
      max="16"
      value="<?php echo $_GET['password_length'] ?? '' ?>"
      required>

    <button type="submit">Invia</button>
    <?php
    if (!empty($_GET['password_length'])) {
      echo rand_password($_GET['password_length']);
    }
    ?>
  </form>
</body>

</html>