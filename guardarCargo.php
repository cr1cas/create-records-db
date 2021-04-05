<?php
    
    //$id= $_REQUEST["id"];
    $nombre= $_REQUEST["nombre"];
    $cargo= $_REQUEST["cargo"];
        
    

    $host = "localhost";
    $dbname ="create-records-db";
    $username ="root";
    $password ="";

    $cnx = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    /*contruir la sentencia */
    $sql = "INSERT INTO crearingtecnico (id, nombre, cargo) VALUES (NULL, '$nombre', '$cargo')";
    
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
<meta http-equiv="refresh" content="1;url=http://localhost/create-records-db/crearIngTecnico.php">

</HTml>