<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<body>

  <!--Se comienza a realizar el contenido del ingreso de datos-->
    <section class="contenido">

    <div>
        <h5 class="center-align">Iniciar Sesión</h5>
    </div>

    <div class="section">
        <div class="row">
            <div class="input-field col offset-s5 s1">
                <input id="email" type="email" class="validate">
                <label for="usuario">Usuario</label>

            </div>
        </div>

        <div class="row">
            <div class="input-field col offset-s4 s4">
                <input id="password" type="password" class="validate">
                <label for="password">Contraseña</label>
            </div>
        </div>
    </div>




       <!-- Boton para Ingresar al sistema, en caso que el usuario exista -->
        <div class="row center">
            <button class="btn waves-effect waves-light" type="submit" name="btnguardar">Ingresar
            <i class="material-icons right">send</i>
          </button>

        </div>


      </form>
    </div>



  </section>

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>

<?php
  // Programación en PHP para el grabado de los datos PHP
  include('config/conexion.php');

  // Se deshabilitan errores en la ejecución del programa
  error_reporting(0);

  $id=$_POST['txtid'];
  $nom=$_POST['txtnom'];
  $ape=$_POST['txtape'];
  $email=$_POST['txtemail'];
  $guardar=$_POST['btnguardar'];

  if(isset($guardar)){
    $sql="INSERT INTO usuarios VALUES ($id,'$nom','$ape','$email')";

    if($ejecutar=$conexion->query($sql)){
        echo "<script>M.toast({html: 'Grabado', classes: 'rounded'})</script>";

        }else{
          echo "<script> Materialize.toast('Error', 3000, 'red')</script>";
        }
  }

  ?>