<!DOCTYPE>
<html>

<head>
    <title>Consulta General</title>
</head>
<body>
    <?php
        $conexion = mysqli_connect("localhost","root","","ejemplo")
            or die ("ERROR EN LA CONEXION");
    
        $consulta = mysqli_query($conexion, "SELECT * FROM datos")
            or die("Error al extraer los registros");
        
        echo '<table border="1">';
        echo '<tr>';
        echo '<th id="clave">Clave</th>';
        echo '<th id="nombre">Nombre</th>';
        echo '<th id="sexo">Sexo</th>';
        echo '<th id="cerveza">Estudios</th>';
        echo '</tr>';
    
        while ($extraido = mysqli_fetch_array($consulta))
        {
            echo '<tr>';
            echo '<td>'.$extraido['clave'].'</td>';
            echo '<td>'.$extraido['nombre'].'</td>';
            echo '<td>'.$extraido['sexo'].'</td>';
            echo '<td>'.$extraido['estudios'].'</td>';
            echo '</tr>';
        }
        mysqli_close($conexion);
        echo '</table>';
        
    ?>
</body>
</html>