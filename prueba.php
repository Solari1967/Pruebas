<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>

<body>

    <form action="prueba.php" method="POST">
    
        <p>Nombre: <input type="text" name="nomb"></p>
        <p>Apellido: <input type="text" name="apell"></p>
        <p>
            <input type="radio" name="sexo">Hombre
            <input type="radio" name="sexo">Mujer
        </p>

        <input type="submit" name="bton">

    </form>

</body>

</html>


<?php
 
    error_reporting(0);

    $nomb=$_POST['nomb'];
    $apel=$_POST['apell'];
    $boton=$_POST['bton'];

    if(isset($_POST['bton'])){
        echo "Variable para Guardar fue seleccionada";
    } else {
        echo "Variable no está definida";
    }
?>


