<?php

    //conexión a la base de datos....
    $db = mysqli_connect($_ENV["HOST"], $_ENV["USER"], $_ENV["PASS"], $_ENV["DB"]);

    if(!$db){
        return 'Error en la conexión :'. mysqli_connect_error();
        return 'Error : '. mysqli_connect_errno();
    }
    return $db;
    
?>