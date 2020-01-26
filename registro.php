<!DOCTYPE>
<html>

<head>
    <title>Registro</title>
</head>
<body>
    <?php
        $estudios = "";
        $conexion = mysqli_connect("localhost","root","","ejemplo")
            or die ("ERROR EN LA CONEXION");
        $clave = $_POST['txtClave'];
        $nombre = $_POST['txtNombre'];
        $sexo = $_POST['cmbSexo'];
        $estudios = $_POST['estudios'];
        
        for ($i=0;$i<count($estudios);$i++)    
        {   $study = $estudios[$i] . " /" . $study;} 
        
        $consulta = mysqli_query($conexion, "SELECT * FROM datos WHERE clave = '$clave'")
            or die("Error al extraer los registros");
    
        $usuario = mysqli_fetch_array($consulta);
        if($usuario){
               print "<script>alert('Clave ya registrada');window.location='./index.php';</script>";
              }
            
    
        
        $insert = "INSERT INTO datos VALUES ('$clave', '$nombre','$sexo','$study')";
        
        $resultado = mysqli_query($conexion, $insert)
            or die("Error al registrarse");
        
        mysqli_close($conexion);
        
        print "<script>window.location='./index.php';</script>";
    
    ?>
</body>
</html>