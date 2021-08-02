
<div class="container">
    <table class="table">
        <thead>
                <th># Nota</th>
                <th>fecha de Emisión</th>
                <th>Dirigido a</th>
                <th>Descripción</th>
                <th>Acciones</th>
        </thead>
        <?php 
$con = mysqli_connect('localhost','root','','consecutivos');
$consulta = "SELECT * FROM notas WHERE n_nota LIKE LOWER('%".$_POST["buscar"]."%') OR dirigido_a LIKE LOWER ('%".$_POST["buscar"]."%')";
$buscardor=mysqli_query($con,$consulta); 
$resultado = mysqli_num_rows($buscardor);
$numero = mysqli_num_rows($buscardor);
echo "<b> Resultados encontrados: $numero </b>";
while($resultado = mysqli_fetch_assoc($buscardor)){ 
   echo "<td>";
   echo $resultado['n_nota'];
   echo "</td>";
   echo "<td>";
   echo $resultado['fecha_emision']; 
   echo "</td>";
   echo "<td>";
   echo $resultado['dirigido_a']; 
   echo "</td>";
   echo "<td>";
   echo $resultado['observaciones']; 
   echo "</td>"; 
   echo "<td> <button type='button' class='btn btn-warning'>Editar</button></td>";
   echo "</tr>";
}?>
    </table>
</div>

