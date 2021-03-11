<html>
    <head>
        <meta charset="utf-8">
        <title>SIGTALLER - Crear Cargos</title>
        <link href="css/estilo2.css" rel="stylesheet">
    </head>
    
    <body>
       <div id="barra-contenedora-menu">
            <div id="barra-menu">
                <h1>Sistema de Control y Gestion del Taller</h1>
            </div>
        </div>
        
        <p id="titulo">CREAR CARGOS</p>
        
        <div class="parrafos">
            <p id="links">
                <a href="index.php" >INICIO</a> - <a href="estados.php" >ESTADOS</a>
                <br><br>
            </p>
            
            <form action="guardarCargo.php" method="POST">
            nombre <input type="text" name="nombre"><br>
            cargo <input type="text" name="cargo"><br>
            
            <br>
            <input type="submit" value="Guardar Cargo">
            </form>
            
            
        </div>
    </body>
</html>