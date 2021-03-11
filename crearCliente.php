<html>
    <head>
        <meta charset="utf-8">
        <title>SIGTALLER - Crear Cliente</title>
        <link href="css/estilo2.css" rel="stylesheet">
    </head>
    
    <body>
       <div id="barra-contenedora-menu">
            <div id="barra-menu">
                <h1>Sistema de Control y Gestion del Taller</h1>
            </div>
        </div>
        
        <p id="titulo">CREAR CLIENTE</p>
        
        <div class="parrafos">
            <p id="links">
                <a href="index.php" >INICIO</a> - <a href="estados.php" >ESTADOS</a>
                <br><br>
            </p>
            
            <form action="guardarCliente.php" method="POST">
            nombre <input type="text" name="nombre"><br>
            direccion <input type="text" name="direccion"><br>
            telefono <input type="text" name="telefono"><br>
            <br>
            <input type="submit" value="Guardar Cliente">
            </form>
            
            
        </div>
    </body>
</html>