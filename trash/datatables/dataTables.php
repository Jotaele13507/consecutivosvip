<?php
header('content-Type: application/json');
$con = mysqli_connect('localhost','root','','correspondencia');
$consulta = "SELECT * FROM notas";
$resultado = mysqli_query($con,$consulta);
$data=array();
while($row = mysqli_fetch_assoc($resultado)){
    $filter = array();
    $filter[] = $row['n_nota'];
    $filter[] = $row['fecha_emision'];
    $filter[] = $row['dirigido_a'];
    $filter[] = $row['observaciones'];
    $filter[] = '<div class="row">
    <div class="btn mx-auto btn_primary">>i class="fa fa-pen></i></div>
    <div class="btn mx-auto btn_primary">>i class="fa fa-trash></i></div>
    </div>';
    $data[]= $filter;
}
    $json = array(
        "data" => $data
    );
    echo json_encode($json);
?>