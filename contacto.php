<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tarea_1</title>
</head>
<body>
  
</body>
</html><!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tarea_1</title>
  <link rel="stylesheet" href="estilos.css">
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
</head>
<body>
  <br>
  <?php
    include("arriba.php")
  ?>

  <?php 
    include("menu.php")
  ?>

<div class="servicio">
    <div class="verde">
      <div class="servi ancho margen centrar">
        <h1>Request now</h1>
      </div>
    </div>
    <br><br>
  <div class="contacto">

    <div class="txt_tabla ancho centrar margen verdesito">
      <h2>Beatifully designed, print-ready massage gift certificate</h2>
      <p class="margen">Leave your personal data, phone, select the desirable service <br>
      and suitable time. Leave a request and check email.</p>
    </div>
    <br>
    <div class="formulario ancho margen centrar">
      <form  action="loquese.html" id="solicitud" method="get">
        <input type="email" placeholder="Enter your email:" id="correo">
        <input type="Telefono" placeholder="Enter your phone" id="telefono">
        <br>
        <input type="text" placeholder="Select services:" id="tipo_servi">
        <input type="text" placeholder="Select time: " id="tiempo">
        <br>
        <button type="button"  id="enviar">Leave a Request</button>
      </form>

    </div>
  </div>
  <br><br>
  <br>
  <?php
    include("abajo.php")
  ?>


</body>
</html>