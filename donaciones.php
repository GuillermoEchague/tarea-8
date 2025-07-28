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
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
  <h1><?php echo $title; ?></h1>
  <p><?php echo $content; ?></p>

  <form id="donationForm">
    <label for="monto">Monto a donar ($):</label>
    <input type="number" id="monto" name="monto" min="1" step="0.01" required>
    <button type="submit">Donar</button>

    <div class="success-message" id="successMessage">🎉 ¡Gracias por tu donación!</div>
    <div class="error-message" id="errorMessage">❌ Ingresa un monto válido mayor a 0.</div>
  </form>

  <script>
    document.getElementById('donationForm').addEventListener('submit', function (e) {
      e.preventDefault();

      const monto = parseFloat(document.getElementById('monto').value);
      const successMessage = document.getElementById('successMessage');
      const errorMessage = document.getElementById('errorMessage');

      if (!isNaN(monto) && monto > 0) {
        successMessage.style.display = 'block';
        errorMessage.style.display = 'none';
        console.log(`Monto donado: $${monto.toFixed(2)}`);
        document.getElementById('monto').value = '';
      } else {
        errorMessage.style.display = 'block';
        successMessage.style.display = 'none';
      }
    });
  </script>
</body>
</html>
