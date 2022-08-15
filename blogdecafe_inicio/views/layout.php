<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=Open+Sans:ital,wght@0,500;0,700;1,300;1,400&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="build/css/app.css"/>
    <title>BlogDeCafé &#9749; | <?php echo $titulo ?? ''; ?></title>
</head>
<body>
    
    <?php include_once __DIR__ . '/utilidades/header.php'; ?>    

    <?php 
        echo $contenido;
    ?>



    <?php include_once __DIR__. '/utilidades/footer.php'; ?>


    <script src="build/js/app.js"></script>
</body>
</html>