<?php
include 'librerias/framework.php';
?>

<html>

<head>
    <title>FilmaClub</title>
    <!-- fontawesome -->
    <link href="./css/fonts/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="css/fonts/font-awesome-4.7.0/css/all.css" rel="stylesheet" type="text/css" />
    <link href="css/fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <!-- Versión compilada y minimizada del CSS de Bootstrap -->
    <link rel="stylesheet" href="./css/bootstrap/css/bootstrap.min.css" />

    <!-- CSS propio que usaremos para personalizar BS -->
    <link rel="stylesheet" type="text/css" href="./css/style.css">

    <script src="js/libs/jquery-3.3.1.js" type="text/javascript"></script>
    <script src="css/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- JavaScript propio que usaremos -->
    <!-- <script src="./js/index.js"></script> -->
</head>

<body>
    <div class="content">
        <?php include 'componentes/head/controller.php';
        ?>

        <?php echo loader($componente);
        ?>

        <?php include 'componentes/commons/footer.php';
        ?>
    </div>
</body>

</html>