<?php
$conn = mysqli_connect('localhost', 'root', '', 'consecutivos');

//$n_memorandum = $_POST['n_memorandum'];
//$fecha_emision = $_POST['fecha_emision'];
$dirigido_a = $_POST['dirigido_a'];
$observaciones = $_POST['observaciones'];

if (isset($_POST['n_memorandum']) && !empty($_POST['n_memorandum'])) {

    //Hacer una consulta a la base de datos en la tabla antes de registrar
    $n_memorandum = $_POST['n_memorandum'];
    $dato = mysqli_query($conn, "SELECT n_memorandum FROM memorandum WHERE n_memorandum = '" . $n_memorandum . "' ");

    //Verifica si encontro al menos un registro. Contar número de filas tambien.
    $duplicado = mysqli_num_rows($dato);

    if ($duplicado == 0) {
        //Quiere decir que no se encontró un n_memorandum, por enden se inserta.
        $stm = "INSERT INTO memorandum (n_memorandum,fecha_emision,dirigido_a,observaciones) 
    VALUES ('$n_memorandum', NOW(),'$dirigido_a','$observaciones')";
        $result = mysqli_query($conn, $stm);

        header('location: ../buscar_mem/index.php');
    } else {
        echo "<script> alert('Ya existe una nota registrada con este número.');
            window.location.href='../registrar_mem/index.php'; </script>";
    }
} else {

    echo "<script> alert('Error!! No se han podido ingresar datos a  la base de datos') window.location.href='../registrar_mem/index.php';</script>";
}