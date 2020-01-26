<!DOCTYPE>
<html>

<head>
    <title>Consulta Unica</title>
</head>
<body>
    <?php
        $conexion = mysqli_connect("localhost","root","","ejemplo")
            or die ("ERROR EN LA CONEXION");
        $clave = $_POST['txtClave'];
            
        $consulta = mysqli_query($conexion, "SELECT * FROM datos where clave='$clave'")
            or die("Error al encontrar registro");
    
        $usuario = mysqli_fetch_array($consulta);
        if($usuario){
        }else {
               print "<script>alert('No existe esta clave para consultar');window.location='./index.php';</script>";
              }
        
        echo '<table border="1">';
        echo '<tr>';
        echo '<th id="clave">Clave</th>';
        echo '<th id="nombre">Nombre</th>';
        echo '<th id="sexo">Sexo</th>';
        echo '<th id="estudios">Estudios</th>';
        echo '</tr>';
        
        $consulta = mysqli_query($conexion, "SELECT * FROM datos where clave='$clave'")
            or die("Error al encontrar registro");
    
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

