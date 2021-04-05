<?php
$host = "localhost";
$dbname ="create-records-db";
$username ="root";
$password ="";
$cnx = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$where= '';


//-------------pruebas-------------
//$nombreprueba = isset($_REQUEST['nombrecliente']);
//var_dump($nombreprueba);
//$where = "WHERE cl.nombre = '$nombreprueba' ";
//----------------------------------

//-------------si funciona - filtro manual-------------
$nombrecliente = "EMPRESA Y";//si funciona  - filtro manual
$whereprueba = "WHERE cl.nombre = '$nombrecliente' ";//si funciona - filtro manual
//---------------------------------------------------------

/*if (isset($_REQUEST['nombrecliente'])) {//si la variable nombrecliente existe entonces....
    $nombrecliente = $_REQUEST['nombrecliente'];
    $where = "WHERE cl.nombre = '$nombrecliente' ";
}*/
/*
if (isset($_REQUEST['nombrecliente'])) {//si la variable gender existe entonces....
    $nombrecliente = $_REQUEST['nombrecliente'];
    if ($nombrecliente != "") {
        $where = "WHERE nombrecliente = '$nombrecliente' ";
    }
    $where = "WHERE nombrecliente = '$nombrecliente' ";
}*/


/*contruir la sentencia */
$sql = "SELECT cl.nombre as nombrecliente, cl.id, cl.direccion as direccion, ts.servicio as tiposerv, 
cit.nombre as nombretecnicoing
FROM ordenservicio as os 
JOIN cliente cl ON os.cliente = cl.id 
JOIN tiposervicio ts ON os.tipoServicio = ts.id 
JOIN crearingtecnico cit ON os.tecnico_ing_asignado = cit.id
";
/*preparar la sentencia */
$q = $cnx -> prepare ($sql);
/*ejecutar la sentencia sql*/
$result = $q -> execute();

$consulta =$q->fetchAll();
//var_dump($consulta);
/*if ($result) {
    echo
    "ok guardado";
} 
    else{
        echo"se ha producido un error $name";
    }
*/

/*contruir la sentencia */
//$sql = "SELECT id, servicio FROM tiposervicio";
/*preparar la sentencia */
//$q = $cnx -> prepare ($sql);
/*ejecutar la sentencia sql*/
//$result = $q -> execute();
//$tiposervicio = $q -> fetchAll();


/*contruir la sentencia */
$sql2 = "SELECT id, nombre FROM cliente";
/*preparar la sentencia */
$preparar = $cnx -> prepare ($sql2);
/*ejecutar la sentencia sql*/
$ejecutar = $preparar -> execute();
$cliente = $preparar -> fetchAll();

/*contruir la sentencia */
$sql3 = "SELECT id, servicio FROM tiposervicio";
/*preparar la sentencia */
$q2 = $cnx -> prepare ($sql3);
/*ejecutar la sentencia sql*/
$ejecutar2 = $q2 -> execute();
$tiposervicio = $q2 -> fetchAll();

/*contruir la sentencia */
$sql4 = "SELECT id, nombre FROM crearingtecnico";
/*preparar la sentencia */
$q4 = $cnx -> prepare ($sql4);
/*ejecutar la sentencia sql*/
$result4 = $q4 -> execute();
$crearingtecnico = $q4 -> fetchAll();


?>



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
        
        <p id="titulo">ESTADOS - CONSULTAS</p>
        
        <div class="parrafos">
            <p id="links">
                <a href="index.php" >INICIO</a> - <a href="estados.php" >ESTADOS</a>
                <br><br>
            </p>
            

            <!------------------------------------------------->
            <form action="estadoOrdenServicio.php" >

            Cliente
            <select name="nombrecliente" >
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


                <input type="submit" value="Search">
            </form>
            <br>
            <!------------------------------------------------->
          
    <table align="center" border="1">
    <!--hacer las filas,    tr (table row)    dentro del tr va el td(las columnas) -->
    <tr>
        <td >
                CLIENTE
        </td>
        <td>
                DIRECCION
        </td>
        <td>
                TIPO DE SERVICIO
        </td>
        <td>
                TEC O ING ASIGNADO
        </td>
    </tr>

    <?php
        for ($i=0; $i < count($consulta) ; $i++) { 
            //var_dump($consulta);

            //si funciona-------------------
            if (isset($_GET['nombrecliente'])){
                if($consulta[$i]['id'] == $_GET['nombrecliente']){
                    // (($consulta[$i]['id'] == $_GET['tiposervicio'])) {
                    
                    
                    
            //---------------------------------

            /*
            if (isset($_REQUEST['nombrecliente'])) {//si la variable gender existe entonces....
                $nombrecliente = $_REQUEST['nombrecliente'];
                if ($nombrecliente != "") {
                    $where = "WHERE cl.nombre = '$nombrecliente' ";
                }
            }
            
        /*
            if (isset($_REQUEST['tiposerv'])) {//si la variable gender existe entonces....
                $tiposerv = $_REQUEST['tiposerv'];
                if ($tiposerv != "") {
                    if ($where == "") {
                        $where = "WHERE ts.servicio = '$tiposerv' ";
                    }
                    else {
                        $where = "$where OR ts.servicio = '$tiposerv'";
                    }
                }*/
                
            
    ?>

    <tr>
        <td>
            <?php echo $consulta[$i]["nombrecliente"] ?>
    
        </td>

        <td>
                <?php echo $consulta[$i]["direccion"]?>
        </td>
        
        <td>
                <?php echo $consulta[$i]["tiposerv"] ?>
        </td>

        <td>
                <?php echo $consulta[$i]["nombretecnicoing"] ?>
        </td>
    </tr>

    <?php
            }
        }
    }    
    ?>

    </table>           
</div>

 
    </body>
</html>