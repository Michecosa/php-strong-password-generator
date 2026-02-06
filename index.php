<?php
session_start();
require_once "./functions.php";

if (isset($_GET['password_length']) && !empty($_GET['password_length'])) {
  $len = intval($_GET['password_length']);

  $_SESSION['generated_password'] = rand_password($len);

  header('Location: ./result.php');
  exit;
}
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

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="text-center mb-4">
          <h1 class="text-secondary">Strong Password Generator</h1>
          <h2 class="text-white bg-primary p-3 rounded shadow-sm">Genera una password sicura</h2>
        </div>

        <div class="card shadow-sm">
          <div class="card-body p-4">
            <form action="" method="get">
              <div class="mb-3">
                <label for="password_length" class="form-label">Lunghezza password (8-16):</label>
                <input
                  type="number"
                  name="password_length"
                  class="form-control"
                  id="password_length"
                  min="8"
                  max="16"
                  value="<?php echo $_GET['password_length'] ?? '' ?>"
                  required>
              </div>

              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Invia</button>
                <button type="reset" class="btn btn-outline-secondary">Annulla</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>