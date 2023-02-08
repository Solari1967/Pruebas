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

    <div class="row">


        <div class="row">
            <div class="input-field col offset-s5 s2">
                <label for="usuario">Usuario</label>
                <input type="text" id="text" name="name" class="validate" minlength="4" maxlength="8" size="35">
            </div>
        </div>

        <div class="row">
            <div class="input-field col offset-s5 s2">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="contra" class="validate">
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

