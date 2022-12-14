<?php
$inc = include("conexion.php");
if ($inc) {
    $consulta = "select * from direcciones";
    $resultado = mysqli_query($conex, $consulta);
    if ($resultado == true) {
        while ($row = $resultado ->fetch_array()) {
            $id = $row['id'];
            $nombre = $row['nombre'];
            $direccion = $row['direccion'];
            $ciudad = $row['ciudad'];
            $estado = $row['estado'];
            $html_maps = $row['html_maps'];
            $agregar_clase = '<iframe class = "mapa" ';
            $mapa_corregido = str_replace("<iframe ",$agregar_clase,$html_maps);
            ?> 
        <style> .mapa {
            width: 350px;
            height: 250px;
        }</style>
            <h2><?php echo $ciudad ?></h2>
            <h4><?php echo $nombre ?></h4>
            <h5><?php echo $direccion ?></h5>
            <?php echo $mapa_corregido ?>
            <br><br>
            <?php
        }
    }
}
?>