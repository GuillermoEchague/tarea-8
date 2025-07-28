<?php
// donaciones.php

$title = "Apoya nuestra causa";
$content = "Tu donación contribuye directamente a nuestros proyectos y campañas.";

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title><?php echo $title; ?></title>
</head>
<body>
  <h1><?php echo $title; ?></h1>
  <p><?php echo $content; ?></p>
  <form action="procesar_donacion.php" method="POST">
    <label for="monto">Monto:</label>
    <input type="number" name="monto" id="monto" required>
    <button type="submit">Donar</button>
  </form>
</body>
</html>
