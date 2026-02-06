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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

  <div class="container mt-5 text-center">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow">
          <div class="card-body p-5">
            <h1 class="h3 mb-4 text-success">Password Generata!</h1>

            <div class="alert alert-info py-3 mb-4">
              <code class="h4 text-dark"><?php echo $password; ?></code>
            </div>

            <div class="d-grid">
              <a href="./index.php" class="btn btn-secondary">Torna indietro</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>