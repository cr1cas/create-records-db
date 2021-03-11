<?php
    $id= $_REQUEST["id"];
    $fechaSolicitud= $_REQUEST["fechaSolicitud"];
    $cliente= $_REQUEST["cliente"];
    $direccion= $_REQUEST["direccion"];
    $telefono= $_REQUEST["telefono"];
    $tiposervicio= $_REQUEST["tiposervicio"];
    $descripcion= $_REQUEST["descripcion"];
    $crearingtecnico= $_REQUEST["crearingtecnico"];
    $solucion= $_REQUEST["solucion"];

    $host = "localhost";
    $dbname ="create-records-db";
    $username ="root";
    $password ="";

    $cnx = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    /*contruir la sentencia */
    $sql = "INSERT INTO ordenservicio (id, fechaSolicitud, cliente, direccion, telefono, tipoServicio, descripcion,
    tecnico_ing_asignado, solucion)
    VALUES (NULL, '$fechaSolicitud', '$cliente', '$direccion', '$telefono', '$tiposervicio', 
    '$descripcion', '$crearingtecnico', '$solucion')";
    
    /*preparar la sentencia */
    $q = $cnx -> prepare ($sql);

    /*ejecutar la sentencia sql*/
    $result = $q -> execute();
    if ($result) {
        echo
        "enrollment creado satisfactoriamente";
    } 
        else{
            echo"se ha producido un error creando enrollment";
        }
        
    
        

?>

<HTml>
<meta http-equiv="refresh" content="1;url=http://localhost/create-records-db/enrollmentCrearOrdenServicio/create-enrollment.php">

</HTml>