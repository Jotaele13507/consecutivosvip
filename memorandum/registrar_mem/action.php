<?php 
$conn = mysqli_connect('localhost', 'root', '', 'correspondencia');

    $n_nota = $_POST['n_nota'];
    //$fecha_emision = $_POST['fecha_emision'];
    $dirigido_a = $_POST['dirigido_a'];
    $observaciones = $_POST['observaciones'];
    
    $stm = "INSERT INTO notas (n_nota,fecha_emision,dirigido_a,observaciones) 
    VALUES ('$n_nota', NOW(),'$dirigido_a','$observaciones')";
    $result = mysqli_query($conn, $stm);

    header('location: ../notas/index.php');
 
?>