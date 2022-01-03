<?php 
$conn = mysqli_connect('localhost', 'root', '', 'consecutivos');

    //$n_nota = $_POST['n_nota'];
    //$fecha_emision = $_POST['fecha_emision'];
    $dirigido_a = $_POST['dirigido_a'];
    $observaciones = $_POST['observaciones'];

    if (isset($_POST['n_nota']) && !empty($_POST['n_nota'])){

        //Hacer una consulta a la base de datos en la tabla antes de registrar
        $n_nota = $_POST['n_nota'];
        $dato = mysqli_query($conn, "SELECT n_nota FROM notas WHERE n_nota = '".$n_nota."' ");

        //Verifica si encontro al menos un registro. Contar número de filas tambien.
        $duplicado = mysqli_num_rows($dato);

        if($duplicado == 0){
            //Quiere decir que no se encontró un n_nota, por enden se inserta.
            $stm = "INSERT INTO notas (n_nota,fecha_emision,dirigido_a,observaciones) 
            VALUES ('$n_nota', NOW(),'$dirigido_a','$observaciones')";
            $result = mysqli_query($conn, $stm);
        
            header('location: ../buscar_nota/index.php');
        }else{
            echo "<script> alert('Ya existe una nota registrada con este número.');
            window.location.href='../registrar_nota/index.php'; </script>"; 
        }
    }else {

        echo "<script> alert('Error!! No se han podido ingresar datos a  la base de datos') </script>";
        }
