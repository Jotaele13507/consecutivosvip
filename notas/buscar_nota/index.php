<!doctype html>
<html lang="es">
  <head>
    <!-- ico -->
   <link rel="icon" href="../../images/up2.ico">
    <title>Dir. Adm - Consecutivos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- importante -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  </head>
  <body>


<div class="container mt-5">
    <div class="col-12">

        <div class="mb-3">

            <label class="form-label">Dirigida A</label>
            <input type="text" class="form-control" id="buscar" name="buscar">

            <label class="form-label">Número de Nota</label>
            <input onkeyup="buscar_ahora($('#buscar_1').val());" type="text" class="form-control" id="buscar_1" name="buscar_1">

        </div>
        <button class="btn btn-primary" onclick="buscar_ahora($('#buscar').val());">Buscar</button>
        <button class="btn btn-danger" onclick="window.location.href='../../index.html'">Cerrar</button>
        <br><br>

        <div class="container" id="datos_buscador"></div>
                
    </div>
</div>

<script type="text/javascript">
        function buscar_ahora(buscar) {
        var parametros = {"buscar":buscar};
        $.ajax({
        data:parametros,
        type: 'POST',
        url: 'buscador.php',
        success: function(data) {
        document.getElementById("datos_buscador").innerHTML = data;
        }
        });
        }
     //   buscar_ahora();
</script>
  </body>
</html>
