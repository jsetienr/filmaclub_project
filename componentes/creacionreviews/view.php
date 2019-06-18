<link rel="stylesheet" type="text/css" href="css/login_style.css">
<div>
    <div class="container">
        <?php
        if (
            isset($_SESSION["usuario"]) && !empty($_SESSION["usuario"])
            && ($_SESSION["usuario"] !== "") && ($_SESSION["usuario"] !== NULL)
        ) {
            echo "    <div id='creacionReviews' class='contenedor'>";
            echo "        <form class='formulariosCreacion' action='index.php?option=creacionreviews' method='POST'>";
            echo "            <h1>Creación de Review:</h1>";
            echo "            <div id='divSelectPelicula'>";
            echo "                <label id='labelSelectPelicula'>Película: </label>";
            echo "                <select id='inputSelectPelicula' name='inputSelectPelicula'>";
            echo "                    <option disabled selected>Selecciona una Película</option>";

            $results_array = modelCreacionReviews::viewPeliculas();
            foreach ($results_array as $pelicula) {
                echo "<option value='$pelicula[clave_pelicula]'>"
                    . utf8_encode($pelicula['nombre']) . "</option>";
            }

            echo "                </select>";
            echo "            </div>";
            echo "            <div id='divTituloReview'>";
            echo "                <label id='labelTituloReview'>Título de la Review: </label>";
            echo "                <input type='text' id='inputTituloReview' name='inputTituloReview' placeholder='Introduce Titulo' />";
            echo "            </div>";
            echo "            <div id='divContenidoReview'>";
            echo "                <label id='labelContenidoReview'>Review: </label>";
            echo "                <textarea id='inputContenidoReview' name='inputContenidoReview' rows='10' placeholder='Introduce tu Review'></textarea>";
            echo "            </div>";
            echo "            <div id='divValoracion'>";
            echo "                <label id='labelValoracion'>Puntuación: </label>";
            echo "                <div class='container-fluid'>";
            echo "                    <div class='col-md-3  col-xs-6'>";
            echo "                        <label id='labelValoracionMal'>Mala: <i class='fas fa-angry labelIcon'></i></label>";
            echo "                        <div class='radio'>";
            echo "                            <label><input type='radio' name='puntuacion' value='1'>1</label>";
            echo "                            <label><input type='radio' name='puntuacion' value='2'>2</label>";
            echo "                            <label><input type='radio' name='puntuacion' value='3'>3</label>";
            echo "                        </div>";
            echo "                    </div>";
            echo "                    <div class='col-md-3 col-xs-6'>";
            echo "                        <label id='labelValoracionRegular'>Floja...: <i class='fas fa-meh labelIcon'></i></label>";
            echo "                        <div class='radio'>";
            echo "                            <label><input type='radio' name='puntuacion' value='4'>4</label>";
            echo "                            <label><input type='radio' name='puntuacion' value='5' checked>5</label>";
            echo "                            <label><input type='radio' name='puntuacion' value='6'>6</label>";
            echo "                        </div>";
            echo "                    </div>";
            echo "                    <div class='col-md-3 col-xs-6'>";
            echo "                        <label id='labelValoracionBien'>Buena: <i class='fas fa-grin-beam labelIcon'></i></label>";
            echo "                        <div class='radio'>";
            echo "                            <label><input type='radio' name='puntuacion' value='7'>7</label>";
            echo "                            <label><input type='radio' name='puntuacion' value='8'>8</label>";
            echo "                        </div>";
            echo "                    </div>";
            echo "                    <div class='col-md-3 col-xs-6'>";
            echo "                        <label id='labelValoracionMuyBien'>¡Excelente!: <i class='fas fa-grin-stars labelIcon'></i></label>";
            echo "                        <div class='radio'>";
            echo "                            <label><input type='radio' name='puntuacion' value='9'>9</label>";
            echo "                            <label><input type='radio' name='puntuacion' value='10'>10</label>";
            echo "                        </div>";
            echo "                    </div>";
            echo "                </div>";
            echo "            </div>";
            echo "            <div id='divBotonesAcceso'>";
            echo "                <input type='submit' id='submitReview' name='submitReview' value='Crear' disabled/>";
            echo "                <input type='reset' id='resetReview' name='resetReview' value='Cancelar' />";
            echo "            </div>";
            echo "        </form>";
            echo "    </div>";
        } else {
            echo "<div class='h-100 row align-items-center avisoNoLogin alert alert-warning' role='alert'>";
            echo "Ups!... Parece que ahora mismo no hay ningún usuario en la sesión. <i class='fas fa-frown emoji'></i><br/>";
            echo "Puedes acceder desde <a href='index.php?option=login'>Login</a> o dirigirte a <a href='index.php?option=home'>Inicio</a><br/>";
            echo "Es necesario estar registrado para poder crear una <a href='index.php?option=reviews'>Review</a>";
            echo "</div>";
        }
        ?>
    </div>
</div>
<script src="./js/creation_public.js"></script>