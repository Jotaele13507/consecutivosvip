<?php 
$conn = mysqli_connect('localhost', 'root', '', 'consecutivos');

    $n_circular = $_POST['n_circular'];
    //$fecha_emision = $_POST['fecha_emision'];
    $dirigido_a = $_POST['dirigido_a'];
    $observaciones = $_POST['observaciones'];
    
    $stm = "INSERT INTO circulares (n_circular,fecha_emision,dirigido_a,observaciones) 
    VALUES ('$n_circular', NOW(),'$dirigido_a','$observaciones')";
    $result = mysqli_query($conn, $stm);

    header('location: ../buscar_circular/index.php');
 
?>