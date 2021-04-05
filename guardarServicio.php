<?php
    
    //$id= $_REQUEST["id"];
    $servicio= $_REQUEST["servicio"];
    $sector= $_REQUEST["sector"];
    
     
    $host = "localhost";
    $dbname ="create-records-db";
    $username ="root";
    $password ="";

    $cnx = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    /*contruir la sentencia */
    $sql = "INSERT INTO tiposervicio (id, servicio, sector) VALUES (NULL, '$servicio', '$sector')";
    
    /*preparar la sentencia */
    $q = $cnx -> prepare ($sql);

    /*ejecutar la sentencia sql*/
    $result = $q -> execute();
    if ($result) {
        echo
        "ok guardado";
    } 
        else{
            echo"se ha producido un error";
        }
    

?>
<HTml>
<meta http-equiv="refresh" content="1;url=http://localhost/create-records-db/creartiposervicio.php">

</HTml>