
<!DOCTYPE html>
<html>
<head>
  <title>Página PHP</title>
</head>
<body>
  <h1>Valores Recebidos</h1>

  <?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = $_POST["user"];
    $password = $_POST["password"];


    echo "<p>Nome: " . $user . "</p>";
    echo "<p>Password: " . $password . "</p>";

  } else {
    echo "<p>Nenhum valor recebido.</p>";
  }
  ?>
</body>
</html>