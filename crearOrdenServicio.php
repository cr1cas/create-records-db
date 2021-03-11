<html>
    <head>
        <meta charset="utf-8">
        <title>SIGTALLER - Crear orden de servicio</title>
        <link href="css/estilo2.css" rel="stylesheet">
    </head>
    
    <body>
       <div id="barra-contenedora-menu">
            <div id="barra-menu">
                <h1>Sistema de Control y Gestion del Taller</h1>
            </div>
        </div>
        
        <p id="titulo">OPCIONES</p>
        
        <div class="parrafos">
            <p id="links">
                <a href="index.php" >INICIO</a> - <a href="estados.php" >ESTADOS</a>
                <br><br>

                
                
            </p>
            <form action="" target="" method="post" name="formDatosPersonales">

                
                Fecha de solicitud
                <input type="date" name="fechaSolicitud" /><br>
            
                Cliente
                <input type="text" name="cliente" /><br>
            
                Direccion
                <input type="" name="" placeholder="direccion" /><br>
            
                Telefono
                <input type ="" name="" placeholder="telefono"/><br>
            
                Tipo de servicio
                <input type="text" name="tiposervicio" /><br>
                
                <br>

                Descripcion
                <textarea name="descripcion" for="descripcion" placeholder="Describe el servicio que solicita el cliente" 
                maxlength="500"></textarea><br>
            
                Tecnico o Ingeniero Asignado
                <input type ="text" name="tecnico_ing_asignado"/><br>

                Solucion
                <textarea name="solucion" for="solucion" placeholder="solucion" 
                maxlength="500"></textarea><br>

                
                <input type="submit" name="enviar" value="enviar datos"/>
            </form>
            
        </div>
    </body>
</html>