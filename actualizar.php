<!DOCTYPE>
<html>

<head>
    <title>Actualizar</title>
</head>
<body>
    <?php
        $conexion = mysqli_connect("localhost","root","","ejemplo")
            or die ("ERROR EN LA CONEXION");
    
        $clave = $_POST['txtClave'];
        $nombre = $_POST['txtNombre'];
        $consulta = mysqli_query($conexion, "SELECT * FROM datos WHERE clave = '$clave'")
            or die("Error al extraer los registros");
        
        $usuario = mysqli_fetch_array($consulta);
        if($usuario){
        }else {
               print "<script>alert('Clave no registrada');window.location='./index.php';</script>";
              }
            
        mysqli_query($conexion, "UPDATE datos set nombre='$nombre' where clave='$clave'")
            or die("Error al actualizar registro");
        
        mysqli_close($conexion);
        print "<script>alert('Nombre actualizado correctamente');window.location='./index.php';</script>";
    ?>
</body>
</html>