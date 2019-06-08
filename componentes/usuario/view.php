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
            }
            echo "<h1>HOLA: $nombreUsuario</h1>";
            echo    "<form method='post'>
                        <button class='btn btn-outline-secondary' id='cierrasesionbtn' name='cierrasesionbtn'>Cerrar Sesión</button>
                    </form>";
            echo "<div class='container-fluid datosUsuario'>";
            echo "        <h2>Datos del Usuario:</h2>";
            echo "       <div class='row'>";
            echo "        <div class='col-md-6'>";
            echo "            <label class='labelDataUser'>Nombre: </label>";
            echo "            <p class='dataUser'>$nombreUsuario</p>";
            echo "            <label class='labelDataUser'>Apellidos: </label>";
            echo "            <p class='dataUser'>$apellidosUsuario</p>";
            echo "            <label class='labelDataUser'>Cumpleaños: </label>";
            echo "            <p class='dataUser'>$fechaNacUsuario</p>";
            echo "            <label class='labelDataUser'>DNI: </label>";
            echo "            <p class='dataUser'>$dniUsuario</p>";
            echo "        </div>";
            echo "        <div class='col-md-6'>";
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
            echo "    <div class='col-md-6'>";
            echo "        <h3>Reviews del Usuario:</h3>";
            echo "        <label class='labelDataUser'>Totales: </label>";
            echo "        <p class='dataUser'>0</p>";
            echo "    </div>";
            echo "    <div class='col-md-6'>";
            echo "        <h3>Historias del cine del Usuario:</h3>";
            echo "        <label class='labelDataUser'>Totales: </label>";
            echo "        <p class='dataUser'>0</p>";
            echo "    </div>";
            echo "  </div>";
            echo " </div>";
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