<link rel="stylesheet" type="text/css" href="css/login_style.css">
<div>
    <div class=" container">

        <?php
        if (
            isset($_SESSION["usuario"]) && !empty($_SESSION["usuario"])
            && ($_SESSION["usuario"] !== "") && ($_SESSION["usuario"] !== NULL)
        ) {
            echo "        <div id='creacionActor' class='contenedor'>            ";
            echo "            <form class='formulariosCreacionMultiple' action='index.php?option=creacionactores' method='POST'>";
            echo "                <h1>Creación de Actor:</h1>";
            echo "                <div id='divNombreActor'>";
            echo "                    <label id='labelNombreActor'>Nombre del Actor: </label>";
            echo "                    <input type='text' id='inputNombreActor' name='inputNombreActor' placeholder='Introduce Nombre' />";
            echo "                </div>";
            echo "                <div id='divApellidosActor'>";
            echo "                    <label id='labelApellidosActor'>Apellidos del Actor: </label>";
            echo "                    <input type='text' id='inputApellidosActor' name='inputApellidosActor' placeholder='Introduce Apellidos' />";
            echo "                </div>";
            echo "                <div id='divFechaNacActor'>";
            echo "                    <label id='labelFechaNacActor'>Fecha de nacimiento: </label>";
            echo "                    <input type='date' id='inputFechaNacActor' name='inputFechaNacActor' placeholder='Introduce Fecha de nacimiento' />";
            echo "                </div>";
            echo "                <div id='divLugarNacActor'>";
            echo "                    <label id='labelLugarNacActor'>Lugar de Nacimiento: </label>";
            echo "                    <input type='text' id='inputLugarNacActor' name='inputLugarNacActor' placeholder='Introduce Lugar de nacimiento' />";
            echo "                </div>";
            echo "                <div id='divBotonesAcceso'>";
            echo "                    <input type='submit' id='submitActor' name='submitActor' value='Crear' />";
            echo "                    <input type='reset' id='resetActor' name='resetActor' value='Cancelar' />";
            echo "                </div>";
            echo "            </form>";
            echo "        </div>";
            echo "        <div id='creacionRelacionActores' class='contenedor'>";
            echo "            <form class='formulariosCreacionVarios' action='index.php?option=creacionactores' method='POST'>";
            echo "                <h1>Creación de Relaciones [Actor - Película]:</h1>";
            echo "                <div id='divSelectActor'>";
            echo "                    <label id='labelSelectActor'>Actor: </label>";
            echo "                    <select id='inputSelectActor' name='inputSelectActor'>";
            echo "                        <option disabled selected>Selecciona un Actor</option>";

            $results_array = modelCreacionActores::viewActores();
            foreach ($results_array as $actor) {
                echo "<option value='$actor[id_actor]'>"
                    . utf8_encode($actor[nombre]) . " " . utf8_encode($actor[apellidos]) . "</option>";
            }

            echo "                    </select>";
            echo "                </div>";
            echo "                <div id='divSelectPelicula'>";
            echo "                    <label id='labelSelectPelicula'>Película: </label>";
            echo "                    <select id='inputSelectPelicula' name='inputSelectPelicula'>";
            echo "                        <option disabled selected>Selecciona una Película</option>";

            $results_array = modelCreacionActores::viewPeliculas();
            foreach ($results_array as $pelicula) {
                echo "<option value='$pelicula[clave_pelicula]'>"
                    . utf8_encode($pelicula[nombre]) . "</option>";
            }

            echo "                    </select>";
            echo "                </div>";
            echo "                <div id='divBotonesAcceso'>";
            echo "                    <input type='submit' id='submitRelacion' name='submitRelacion' value='Crear' />";
            echo "                    <input type='reset' id='resetRelacion' name='resetRelacion' value='Cancelar' />";
            echo "                </div>";
            echo "            </form>";
            echo "        </div>";
        } else {
            echo "<div class='h-100 row align-items-center avisoNoLogin alert alert-warning' role='alert'>";
            echo "Ups!... Parece que ahora mismo no hay ningún usuario en la sesión. <i class='fas fa-frown emoji'></i><br/>";
            echo "Puedes acceder desde <a href='index.php?option=login'>Login</a> o dirigirte a <a href='index.php?option=home'>Inicio</a><br/>";
            echo "</div>";
        }
        ?>
        
    </div>
</div>