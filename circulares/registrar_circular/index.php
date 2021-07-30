<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<?php 
date_default_timezone_set('America/Mexico_City');
$fecha_emision = date("Y-m-d, H:i:s");
?>

<body>
    <form action="action.php" method="POST" id="registro" enctype="multipart/form-data">
    <span class="label-input100">Número de Nota</span>
    <input type="text" name="n_nota" placeholder="Número de Nota">
    <span class="label-input100">Fecha de Emisión</span>
    <input type="datetime" name="fecha_emisión" id="fecha_emision" value="<?= $fecha_emision?>" disabled>
    <span class="label-input100">Dirigido a</span>
    <input type="text" name= "dirigido_a" id="dirigido_a" placeholder="Nombre Completo">
    <span class="label-input100">Descripción</span>
    <textarea name="observaciones"> </textarea>
    <input type="submit" value="Registrar" name="reg_nota" >
    <div id="resp"></div>
    </form>
</body>
</html>