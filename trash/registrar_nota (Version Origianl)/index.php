<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dir. Adm - Consecutivos</title>
     <!-- basic -->
     <meta charset="utf-8">
	   <meta http-equiv="X-UA-Compatible" content="IE=edge">
	   <!-- mobile metas -->
	   <meta name="viewport" content="width=device-width, initial-scale=1">
	   <meta name="viewport" content="initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="../../estilos_css/style2.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../../estilos_css/estilo_index.css">
    <link href="../../estilos_css/menu.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/rightde.js"></script>
</head>
<?php 
date_default_timezone_set('America/Mexico_City');
$fecha_emision = date("Y-m-d, H:i:s");
?>
<body>
    <div class="row">
			<h1 class="text-center ">Dirección Administrativa<br/></h1>
		</div>

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
    	   <!--  footer -->
           <footer>
		<div class="copyright">
			<div class="container">
			   <div class="row">
				  <div class="col-md-12">
					 <p>© 2021 All Rights Reserved. COORDINACIÓN DE TIC</a></p>
				  </div>
			   </div>
			</div>
		 </div>
	 </footer>
	 <!-- end footer -->
</body>
</html>