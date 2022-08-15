<?php 
    require __DIR__ . '/../vendor/autoload.php';

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->safeLoad();
    
    require __DIR__. '/databases.php';
    require __DIR__. '/funciones.php';

    use Model\ActiveRecord;

    ActiveRecord::setDB($db);
?>