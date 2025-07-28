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
  <style>
    body { font-family: Arial, sans-serif; padding: 20px; }
    .success-message {
      color: green;
      margin-top: 10px;
      display: none;
    }
    .error-message {
      color: red;
      margin-top: 10px;
      display: none;
    }
  </style>
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
      e.preventDefault(); // Evita que se envíe el formulario por defecto

      const monto = parseFloat(document.getElementById('monto').value);
      const successMessage = document.getElementById('successMessage');
      const errorMessage = document.getElementById('errorMessage');

      if (!isNaN(monto) && monto > 0) {
        // Mostrar mensaje de éxito
        successMessage.style.display = 'block';
        errorMessage.style.display = 'none';

        // Aquí podrías enviar los datos por AJAX si lo deseas
        console.log(`Monto donado: $${monto.toFixed(2)}`);

        // Limpiar el campo
        document.getElementById('monto').value = '';
      } else {
        // Mostrar error
        errorMessage.style.display = 'block';
        successMessage.style.display = 'none';
      }
    });
  </script>
</body>
</html>
