<!DOCTYPE>
<html>

<head>
    <title>Eliminar</title>
</head>
<body>
    <?php
        $conexion = mysqli_connect("localhost","root","","ejemplo")
            or die ("ERROR EN LA CONEXION");
    
        $clave = $_POST['txtClave'];
        $consulta = mysqli_query($conexion, "SELECT * FROM datos WHERE clave = '$clave'")
            or die("Error al extraer los registros");
        
        $usuario = mysqli_fetch_array($consulta);
        if($usuario){
        }else {
               print "<script>alert('No existe esta clave para eliminar');window.location='./index.php';</script>";
              }
            
        mysqli_query($conexion, "DELETE from datos where clave='$clave'")
            or die("Error al eliminar registro");
        
        mysqli_close($conexion);
        print "<script>alert('Registro eliminado correctamente');window.location='./index.php';</script>";
    ?>
</body>
</html>
       