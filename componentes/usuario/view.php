<link rel="stylesheet" type="text/css" href="css/style.css">
<div class="container">
    <div class="usuario">
        <?php
        if (
            isset($_SESSION["usuario"]) && !empty($_SESSION["usuario"])
            && ($_SESSION["usuario"] !== "") && ($_SESSION["usuario"] !== NULL)
        ) {
            $userData = modelUsuario::viewUserData($_SESSION["usuario"]);

            foreach ($userData as $key => $value) {
                if ($key == "nombre") {
                    $nombreUsuario =  $value;
                } elseif ($key == "apellidos") {
                    $apellidosUsuario =  $value;
                } elseif ($key == "dni") {
                    $dniUsuario =  $value;
                } elseif ($key == "fecha_nacimiento") {
                    $fechaNacUsuario =  $value;
                } elseif ($key == "fecha_registro") {
                    $registroUsuario =  $value;
                } elseif ($key == "mail") {
                    $mailUsuario =  $value;
                } elseif ($key == "direccion") {
                    $direccionUsuario =  $value;
                } elseif ($key == "telefono") {
                    $telefonoUsuario =  $value;
                }
                $numHistorias = modelUsuario::countHistorias($_SESSION["usuario"]);
                foreach ($numHistorias as  $numero) {
                    $contHistorias = $numero;
                }
                $numReviews = modelUsuario::countReviews($_SESSION["usuario"]);
                foreach ($numReviews as  $numero) {
                    $contReviews = $numero;
                }
                $showHistorias = modelUsuario::viewHistorias($_SESSION["usuario"]);
                $showReviews = modelUsuario::viewReviews($_SESSION["usuario"]);
            }
            echo "<h1>Hola, $nombreUsuario</h1>";
            echo    "<form method='post'>
                        <button class='btn btn-outline-secondary' id='cierrasesionbtn' name='cierrasesionbtn'>Cerrar Sesión</button>
                    </form>";
            echo "<div class='container-fluid datosUsuario'>";
            echo "        <h2>Datos del Usuario:</h2>";
            echo "       <div class='row'>";
            echo "        <div class='col-md-6 col-xs-12'>";
            echo "            <label class='labelDataUser'>Nombre: </label>";
            echo "            <p class='dataUser'>$nombreUsuario</p>";
            echo "            <label class='labelDataUser'>Apellidos: </label>";
            echo "            <p class='dataUser'>$apellidosUsuario</p>";
            echo "            <label class='labelDataUser'>Cumpleaños: </label>";
            echo "            <p class='dataUser'>$fechaNacUsuario</p>";
            echo "            <label class='labelDataUser'>DNI: </label>";
            echo "            <p class='dataUser'>$dniUsuario</p>";
            echo "        </div>";
            echo "        <div class='col-md-6 col-xs-12'>";
            echo "            <label class='labelDataUser'>Lleva con nosotros desde...: </label>";
            echo "            <p class='dataUser'>$registroUsuario</p>";
            echo "            <label class='labelDataUser'>Mail: </label>";
            echo "            <p class='dataUser'>$mailUsuario</p>";
            echo "            <label class='labelDataUser'>Dirección: </label>";
            echo "            <p class='dataUser'>$direccionUsuario</p>";
            echo "            <label class='labelDataUser'>Teléfono: </label>";
            echo "            <p class='dataUser'>$telefonoUsuario</p>";
            echo "        </div>";
            echo "      </div>";
            echo "    </div>";
            echo " <div class='container-fluid aportesUsuario'>";
            echo "  <div class='row'>";
            echo "    <h2>Aportaciones del Usuario:</h2>";
            echo "    <div class='col-md-6 col-xs-12'>";
            echo "        <h3>Reviews del Usuario:</h3>";
            echo "        <label class='labelDataUser'>Totales: </label>";
            echo "        <p class='dataUser'>$contReviews</p>";
            if ($contReviews > 0) {
                echo "        <label class='labelDataUser'>Peliculas: </label>";
                foreach ($showReviews as $value) {
                    echo "        <p class='dataUser'>" . utf8_encode($value['nombre']) . " [Nota: " . $value['puntuacion'] . "]</p>";
                }
            }
            echo "    </div>";
            echo "    <div class='col-md-6 col-xs-12'>";
            echo "        <h3>Historias del cine del Usuario:</h3>";
            echo "        <label class='labelDataUser'>Totales: </label>";
            echo "        <p class='dataUser'>$contHistorias</p>";
            if ($contHistorias > 0) {
                echo "        <label class='labelDataUser'>Peliculas: </label>";
                foreach ($showHistorias as $value) {
                    echo "        <p class='dataUser'>" . utf8_encode($value['nombre']) . "</p>";
                }
            }
            echo "    </div>";
            echo "  </div>";
            echo " </div>";
            $numCompras = modelUsuario::countCompras($_SESSION["usuario"]);
            if ($numCompras['num'] > 0) {
                $arrayCompras = modelUsuario::viewCompras($_SESSION["usuario"]);
                echo " <div class='container-fluid comprasUsuario'>";
                echo "  <div class='row'>";
                echo "        <h2>Compras del Usuario: " . $numCompras['num'] . "</h2>";
                // echo "       <div class='row'>";
                foreach ($arrayCompras as  $compra) {
                    echo "        <div class='col-md-6 col-xs-12'>";
                    echo "            <label class='labelDataUser'>Nombre del Artículo: </label>";
                    echo "            <p class='dataUser'>" . $compra['nombre'] . "</p>";
                    echo "            <label class='labelDataUser'>Cantidad: </label>";
                    echo "            <p class='dataUser'>" . $compra['cantidad'] . "</p>";
                    echo "            <label class='labelDataUser'>Importe: </label>";
                    echo "            <p class='dataUser'>" . $compra['importe'] . "</p>";
                    echo "            <label class='labelDataUser'>Fecha de Compra: </label>";
                    echo "            <p class='dataUser'>" . $compra['fecha_compra'] . "</p>";
                    echo "        </div>";
                }
                echo "      </div>";
                echo "   </div>";
            }
            // echo "    </div>";
            // echo " </div>";
        } else {
            echo "<div class='h-100 row align-items-center'>";
            echo "Ups!... Parece que ahora mismo no hay ningún usuario en la sesión. <i class='fas fa-frown emoji'></i><br/>";
            echo "Puedes acceder desde <a href='index.php?option=login'>Login</a> o dirigirte a <a href='index.php?option=home'>Inicio</a>";
            echo "</div>";
        }
        ?>
    </div>
</div>
<script src="./js/login_script.js"></script>