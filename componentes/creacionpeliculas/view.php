<link rel="stylesheet" type="text/css" href="css/login_style.css">
<div>
    <div class=" container">

        <?php
        if (
            isset($_SESSION["usuario"]) && !empty($_SESSION["usuario"])
            && ($_SESSION["usuario"] !== "") && ($_SESSION["usuario"] !== NULL)
        ) {
            echo "        <div id='creacionPeliculas' class='contenedor'>";
            echo "            <form class='formulariosCreacionMultiple' action='index.php?option=creacionpeliculas' method='POST'>";
            echo "                <h1>Creación de Película:</h1>";
            echo "                <div id='divNombrePelicula'>";
            echo "                    <label id='labelNombrePelicula'>Nombre de la Película: </label>";
            echo "                    <input type='text' id='inputNombrePelicula' name='inputNombrePelicula' placeholder='Introduce Nombre' />";
            echo "                </div>";
            echo "                <div id='divDirectorPelicula'>";
            echo "                    <label id='labelDirectorPelicula'>Nombre del Director: </label>";
            echo "                    <input type='text' id='inputDirectorPelicula' name='inputDirectorPelicula' placeholder='Introduce Director' />";
            echo "                </div>";
            echo "                <div id='divAnyoPelicula'>";
            echo "                    <label id='labelAnyoPelicula'>Año de estreno: </label><label id='errlabelAnyoPelicula'></label>";
            echo "                    <input type='text' id='inputAnyoPelicula' name='inputAnyoPelicula' placeholder='Introduce Año de estreno' />";
            echo "                </div>";
            echo "                <div id='divGeneroPelicula'>";
            echo "                    <label id='labelGeneroPelicula'>Género: </label>";
            echo "                    <select id='inputGeneroPelicula' name='inputGeneroPelicula'>";
            echo "                        <option disabled selected>Selecciona un Género</option>";

            $results_array = modelCreadorPeliculas::viewGenre();

            foreach ($results_array as $genero) {
                echo "<option value='" . $genero[id_genero] . "'>"
                    . utf8_encode($genero[genero_pelicula]) . "</option>";
            }

            echo "                    </select>";
            echo "                </div>";
            echo "                <div id='divDuracionPelicula'>";
            echo "                    <label id='labelDuracionPelicula'>Duración: </label><label id='errlabelDuracionPelicula'></label>";
            echo "                    <input type='text' id='inputDuracionPelicula' name='inputDuracionPelicula' placeholder='Introduce Duración' />";
            echo "                </div>";
            echo "                <div id='divDescripcionPelicula'>";
            echo "                    <label id='labelDescripcionPelicula'>Descripción: </label>";
            echo "                    <textarea id='inputDescripcionPelicula' name='inputDescripcionPelicula' rows='6' placeholder='Introduce Descripción'></textarea>";
            echo "                </div>";
            echo "                <div id='divBotonesAcceso'>";
            echo "                    <input type='submit' id='submitPelicula' name='submitPelicula' value='Crear' />";
            echo "                    <input type='reset' id='resetPelicula' name='resetPelicula' value='Cancelar' />";
            echo "                </div>";
            echo "            </form>";
            echo "        </div>";
            echo "        <div id='creacionPosterPeliculas' class='contenedor'>";
            echo "            <form class='formulariosCreacionVarios' action='index.php?option=creacionpeliculas' method='POST' enctype='multipart/form-data'>";
            echo "                <h1>Subida de Poster de Película:</h1>";
            echo "                <div id='divSelectPelicula'>";
            echo "                    <label id='labelSelectPelicula'>Película: </label>";
            echo "                    <select id='inputSelectPelicula' name='inputSelectPelicula'>";
            echo "                        <option disabled selected>Selecciona una Película</option>";

            $results_array = modelCreadorPeliculas::viewPeliculas();
            foreach ($results_array as $pelicula) {
                echo "<option value='$pelicula[clave_pelicula]'>"
                    . utf8_encode($pelicula[nombre]) . "</option>";
            }

            echo "                    </select>";
            echo "                </div>";
            echo "                <div id='divPosterPelicula'>";
            echo "                    <label id='labelPosterPelicula'>Poster: </label><br />";
            echo "                    <!-- <input type='file' id='inputPosterPelicula' class='form-control'> -->";
            echo "                    <input name='archivo' type='file' class='form-control' />";
            echo "                    <label for='file-upload' class='custom-file-upload'></label>";
            echo "                </div>";
            echo "                <div id='divBotonesAcceso'>";
            echo "                    <input type='submit' id='submitPoster' name='submitPoster' value='Crear' />";
            echo "                    <input type='reset' id='resetPoster' name='resetPoster' value='Cancelar' />";
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
<script src="./js/creaelementos_script.js"></script>