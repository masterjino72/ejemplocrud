<!DOCTYPE>
<html>
<head>
    <title>EJEMPLO CRUD</title>
</head>
<body>
    <p>------------- REGISTRO -------------------------</p>
    <form action="registro.php" method="POST">
        Clave: <input type="text" name="txtClave"> <br>
        Nombre: <input type="text" name="txtNombre"> <br/>
        Sexo: <select name="cmbSexo">
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
        </select><br>
        Estudios: <br> 
        <select multiple name="estudios[]"> 
           <option value="Primaria">Primaria</option> 
           <option value="Secundaria">Secundaria</option> 
           <option value="Tecnico">Tecnico</option> 
           <option value="Universitario">Universitario</option> 
           <option value="Postgrado">Postrgado</option> 
           <option value="Master">Master</option> 
           <option value="Doctorado">Doctorado</option> 
        </select><br> 
        <input type="submit" value="Registrar" name="btnRegistrar">
    </form>
    
    <p>------------- ELIMINACION -------------------------</p>
    <form action="eliminar.php" method="POST">
        Clave: <input type="text" name="txtClave"> <br/>
        <input type="submit" value="Eliminar registro" name="btnEliminar">
    </form>
        
    <p>------------- ACTUALIZACION SOLO DEL NOMBRE POR MEDIO DE LA CLAVE -------------------------</p>
    <form action="actualizar.php" method="POST">
        Clave: <input type="text" name="txtClave"> <br/>
        Nombre: <input type="text" name="txtNombre"> <br/>
        <input type="submit" value="Actualizar registro" name="btnActualizar">
    </form>
    
    <p>------------- CONSULTAR TODOS-------------------------</p>
    <form action="consultar.php">
        <input type="submit" value="Consultar todos los registro" name="btnRegistros">
    </form>
    
    <p>------------- CONSULTAR UNO -------------------------</p>
    <form action="consultar_uno.php" method="POST">
        Clave: <input type="text" name="txtClave"> <br/>
        <input type="submit" value="Consultar un registro" name="btnConsultar_Uno">
    </form>
    
   
</body>
</html>