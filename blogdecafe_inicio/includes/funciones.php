<?php
    // funciones que ocuparemos a lo largo de todo nuestro proyecto.
    function debuguear($dato){
        echo "<pre>";
        var_dump($dato);
        echo "</pre>";
        exit;
    }

    function s($html){
        $resultado = htmlspecialchars($html,ENT_SUBSTITUTE);
        return $resultado;
    }

?>