<?php
session_start();

if (!isset($_SESSION['generated_password'])) {
  header('Location: ./index.php');
  exit;
}

$password = $_SESSION['generated_password'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EX - Password Generator</title>
</head>

<body>
  <h1>La tua Password Sicura</h1>
  <p>Ecco la password generata per te:</p>
  <div>
    <code><?php echo $password; ?></code>
  </div>

  <br>
  <a href="./index.php">Generane un'altra</a>
</body>

</html>