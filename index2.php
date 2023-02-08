<!DOCTYPE html>
<html>

<head>

  <!-- Se importan las fuentes de icono de Google-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
  <!--Se importa framework materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <!--Se activa la funcion responsive que informar al navegador que el sitio web está optimizado para dispositivos móviles-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

  <!-- Comienzo de la programación-->
  <section class="contenido">
    <h2>Crear Usuarios</h2>

    <!-- Cpdigo de ingreso de los datos -->
    <div class="row">
      <form class="col s12" method="POST" action="index2.php">
        <div class="row">

          <!-- Ingreso del ID del usuario-->
          <div class="input-field col s6">
            <i class="material-icons prefix">#</i>
            <input id="iden" type="number" class="validate" name="txtid">
            <label for="iden">Identificacion</label>
          </div>

          <!-- Ingreso del nombre del usuario-->
          <div class="input-field col s6">
            <i class="material-icons prefix">account_circle</i>
            <input id="nombre" type="text" class="validate" name="txtnom">
            <label for="nombre">Nombre</label>
          </div>

          <!-- Ingreso del apellido del usuario-->
          <div class="input-field col s6">
            <i class="material-icons prefix">account_circle</i>
            <input id="ape" type="text" class="validate" name="txtape">
            <label for="ape">Apellido</label>
          </div>

          <!-- Ingreso del correo del usuario-->
          <div class="input-field col s6">
            <i class="material-icons prefix">mail</i>
            <input id="correo" type="email" class="validate" name="txtemal">
            <label for="correo">Correo</label>
          </div>

          <!-- Boton para grabar datos -->
          <button class="btn waves-effect waves-light" type="submit" name="btnguardar">Grabar
            <i class="material-icons right">send</i>
          </button>
        </div>

      </form>
    </div>



  </section>

  <!--Se incluye JavaScript al final del cuerpo para una carga optimizada-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>


<?php
  // Programación en PHP para el grabado de los datos PHP
  include('config/conexion.php');

  // Se deshabilitan errores en la ejecución del programa
  error_reporting(0);

  // Se declaran las varianles recibidas el formulario de ingreso a los datos, esto son para grabar la información en la base de datos
  $id=$_POST['txtid'];
  $nom=$_POST['txtnom'];
  $ape=$_POST['txtape'];
  $email=$_POST['txtemail'];
  $guardar=$_POST['btnguardar'];

  // Función en la cual se valida el boton de acción
  if(isset($guardar)){
    $sql="INSERT INTO usuarios VALUES ($id,'$nom','$ape','$email')";

    // además se realiza una validación para el grabado de los datos
    if($ejecutar=$conexion->query($sql)){
        echo "<script>M.toast({html: 'Grabado', classes: 'rounded'})</script>";

        }else{
          echo "<script> Materialize.toast('Error', 3000, 'red')</script>";
        }
  }

  ?>