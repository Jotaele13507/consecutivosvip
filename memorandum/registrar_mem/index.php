<!doctype html>
<html lang="en">

<head>
    <!-- ico -->
   <link rel="icon" href="../../images/up2.ico">
    <title>Dir. Adm - Consecutivos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <?php
    date_default_timezone_set('America/Mexico_City');
    $fecha_emision = date("Y-m-d, H:i:s");
    ?>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h1 class="heading-section">Dirección Administrativa<br /><small style="font-size:20px">Registro de Memorándus</small></h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12">
                    <div class="wrapper">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="contact-wrap">
                                    <form method="POST" id="registro" action="action.php">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="n_memorandum" placeholder="Número de Memorándus">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="fecha_emision" id="fecha_emision" value="<?= $fecha_emision?>" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="dirigido_a" id="dirigido_a" placeholder="Dirigido a">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea name="observaciones" class="form-control" id="observaciones" cols="30" rows="8" placeholder="Descripción"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="Registar" name="reg_nota" class="btn btn-primary">
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>

</body>
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

</html>
