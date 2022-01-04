<?php
$conn = mysqli_connect('localhost', 'root', '', 'consecutivos');

//$n_circular = $_POST['n_circular'];
//$fecha_emision = $_POST['fecha_emision'];
$dirigido_a = $_POST['dirigido_a'];
$observaciones = $_POST['observaciones'];

if (isset($_POST['n_circular']) && !empty($_POST['n_circular'])) {

    //Hacer una consulta a la base de datos en la tabla antes de registrar
    $n_circular = $_POST['n_circular'];
    $dato = mysqli_query($conn, "SELECT n_circular FROM circulares WHERE n_circular = '" . $n_circular . "' ");

    //Verifica si encontro al menos un registro. Contar número de filas tambien.
    $duplicado = mysqli_num_rows($dato);

    if ($duplicado == 0) {
        //Quiere decir que no se encontró un n_nota, por enden se inserta.
        $stm = "INSERT INTO circulares (n_circular,fecha_emision,dirigido_a,observaciones) 
    VALUES ('$n_circular', NOW(),'$dirigido_a','$observaciones')";
        $result = mysqli_query($conn, $stm);

        header('location: ../buscar_circular/index.php');
    } else {
        echo "<script> alert('Ya existe una circular registrada con este número.');
            window.location.href='../registrar_circular/index.php'; </script>";
    }
} else {

    echo "<script> alert('Error!! No se han podido ingresar datos a  la base de datos') </script>";
}