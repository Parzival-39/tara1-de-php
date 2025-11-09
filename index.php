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

  <!-- a partir de aqui se mueve -->

  <div class="inicio">
    <div class="fondo">
      <div class="Relax ancho centrar">
        <h2>Relaxation</h2>
        <h3>come to us right now</h3>
        <a href="#">Book Now</a>
      </div>
    </div>

    <br>

    <div class="texto ancho margen centrar">
      <h1>Plunge into the world of <br> relaxation with us</h1> <br>
      <p>We invite you to visit the spa paradise and feel the power of relaxation. <br>
      The unique experts will do their best for you.</p>
    </div>

    <br><br>

    <div class="imagenes ancho centrar">
      <div class="img1 caja_img">
        <img src="imagenes/foto1.jpg" alt="">
        <br><br>
        <h1>High-quality services</h1> <br>
        <p>The best receptionist will put you through the world of potiteness, professinalism, deep calmness and high-quality services.</p>
      </div>
      <div class="img2 caja_img">
        <img src="imagenes/foto2.jpg" alt=""> 
        <br><br>
        <h1>Paradise atmosphere</h1> <br>
        <p>Feel the wonderfull armosphere of beauty, pleasant colors, tasty aromas and feel free to have a relax.</p>
      </div>
      <div class="img1 caja_img">
        <img src="imagenes/foto3.jpg" alt=""> 
        <br><br>
        <h1>Massage to any taste</h1> <br>
        <p>Get the qualified treatment in a most preferable way. Trust our experts and experience the best massage.</p>
      </div>
    </div>
  </div>

<br><br><br>
  <?php
    include("abajo.php")
  ?>

<script type="text/javascript">
$("#enviar").click(function () {

      if(!$("#correo")[0].checkValidity()){
        alert("Escribe correctamente tu correo");
        $("#Correo").focus();
        return 0;
      }

      if($("#correo").val().trim() == "") {
        alert("Escribe un correo valido");
        $("#Correo").focus();
        return 0;
      }

      if(!$("#telefono")[0].checkValidity()){
        alert("Escribe un telefono valido");
        $("#telefono").focus();
        return 0;
      }

      if($("#telefono").val().trim() == "") {
        alert("Escribe un telefono valido");
        $("#telefono").focus();
        return 0;
      }

      if(!$("#tipo_servi")[0].checkValidity()){
        alert("Escriba el tipo de servicio");
        $("#tipo_servi").focus();
        return 0;
      }

      if($("#tipo_servi").val().trim() == "") {
        alert("Escriba el tipo de servicio");
        $("#tipo_servi").focus();
        return 0;
      }




document.getElementById("formulario").submit();

});


</script>
</body>
</html>