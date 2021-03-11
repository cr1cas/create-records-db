<?php
    $host = "localhost";
    $dbname ="create-records-db";
    $username ="root";
    $password ="";

    
   

    
    $cnx = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    /*contruir la sentencia */
    $sql = "SELECT id, nombre FROM cliente";
     /*preparar la sentencia */
    $q = $cnx -> prepare ($sql);
     /*ejecutar la sentencia sql*/
    $result = $q -> execute();
    $cliente = $q -> fetchAll();

    /*contruir la sentencia */
    $sql = "SELECT id, servicio FROM tiposervicio";
    /*preparar la sentencia */
    $q = $cnx -> prepare ($sql);
    /*ejecutar la sentencia sql*/
    $result = $q -> execute();
    $tiposervicio = $q -> fetchAll();

    /*contruir la sentencia */
    $sql = "SELECT id, nombre FROM crearingtecnico";
    /*preparar la sentencia */
    $q = $cnx -> prepare ($sql);
    /*ejecutar la sentencia sql*/
    $result = $q -> execute();
    $crearingtecnico = $q -> fetchAll();



    
    


     
?>


<html>
    <head>
        <meta charset="utf-8">
        
        <title>SIGTALLER - Crear orden de servicio</title>
        <link href="../css/estilo2.css" rel="stylesheet">
    </head>
    
    <body>
       <div id="barra-contenedora-menu">
            <div id="barra-menu">
                <h1>Sistema de Control y Gestion del Taller</h1>
            </div>
        </div>
        
        <p id="titulo">CREAR ORDEN DE SERVICIO</p>
        
        <div class="parrafos">
            <p id="links">
                <a href="../index.php" >INICIO</a> - <a href="../estados.php" >ESTADOS</a>
                <br><br>

                
                
            </p>
            <form action="save-enrollment.php" method="post">

                
            Fecha de solicitud
            <input type="date" name="fechaSolicitud" /><br>
            
            Cliente
            <select name="cliente" >
                <?php
                    for ($i=0; $i < count($cliente) ; $i++) { 
                ?>
                <option value="<?php echo $cliente[$i]["id"] ?>">
                <?php echo $cliente[$i]["nombre"] ?>
                </option>
            <?php
                }
            ?>
            </select>
            <br>
            
            Direccion
            <input type="" name="direccion" placeholder="direccion" /><br>
        
            Telefono
            <input type ="" name="telefono" placeholder="telefono"/><br>
            


            Tipo de servicio
            <select name="tiposervicio" >
            <?php
                for ($i=0; $i < count($tiposervicio) ; $i++) { 
            ?>

            <option value="<?php echo $tiposervicio[$i]["id"] ?>">
            <?php echo $tiposervicio[$i]["servicio"] ?>
            </option>
            <?php
                }
            ?>
            </select>
            <br>

            Descripcion
            <textarea name="descripcion" for="descripcion" placeholder="Describe el servicio que solicita el cliente" 
            maxlength="500"></textarea><br>
            

            Tecnico o Ingeniero Asignado
            <select name="crearingtecnico" >
            <?php
            for ($i=0; $i < count($crearingtecnico) ; $i++) { 
            ?>

            <option value="<?php echo $crearingtecnico[$i]["id"] ?>">
            <?php echo $crearingtecnico[$i]["nombre"] ?>
            </option>
            <?php
            }
            ?>
            </select>
            <br>

            Solucion
            <textarea name="solucion" for="solucion" placeholder="solucion" 
            maxlength="500"></textarea><br>

                
                <input type="submit" name="enviar" value="Guardar"/>
            </form>
            
        </div>
    </body>
</html>