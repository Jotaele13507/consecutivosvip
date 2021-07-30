<?php 
$conn = mysqli_connect('localhost', 'root', '', 'correspondencia');

    $n_memorandum = $_POST['n_memorandum'];
    //$fecha_emision = $_POST['fecha_emision'];
    $dirigido_a = $_POST['dirigido_a'];
    $observaciones = $_POST['observaciones'];
    
    $stm = "INSERT INTO memorandum (n_memorandum,fecha_emision,dirigido_a,observaciones) 
    VALUES ('$n_memorandum', NOW(),'$dirigido_a','$observaciones')";
    $result = mysqli_query($conn, $stm);

    header('location: ../buscar_mem/index.php');
 
?>