<link rel="stylesheet" type="text/css" href="css/login_style.css">
<div>
    <div class="container">
        <?php
        if (
            isset($_SESSION["usuario"]) && !empty($_SESSION["usuario"])
            && ($_SESSION["usuario"] !== "") && ($_SESSION["usuario"] !== NULL)
        ) {
            echo "  <div id='creacionHistorias' class='contenedor'>";
            echo "      <form class='formulariosCreacion' action='index.php?option=creacionhistorias' method='POST'>";
            echo "          <h1>Creación de Curiosidad:</h1>";
            echo "          <div id='divSelectPelicula'>";
            echo "              <label id='labelSelectPelicula'>Película: </label>";
            echo "              <select id='inputSelectPelicula' name='inputSelectPelicula'>";
            echo "                  <option disabled selected>Selecciona una Película</option>";

            $results_array = modelCreacionHistorias::viewPeliculas();
            foreach ($results_array as $pelicula) {
                echo "<option value='$pelicula[clave_pelicula]'>"
                                . utf8_encode($pelicula[nombre]) . "</option>";
            }

            echo "              </select>";
            echo "          </div>";
            echo "          <div id='divTituloCuriosidad'>";
            echo "              <label id='labelTituloCuriosidad'>Título de Curiosidad: </label>";
            echo "              <input type='text' id='inputTituloCuriosidad' name='inputTituloCuriosidad' placeholder='Introduce Título' />";
            echo "          </div>";
            echo "          <div id='divContenidoCuriosidad'>";
            echo "              <label id='labelContenidoCuriosidad'>Contenido: </label>";
            echo "              <textarea id='inputContenidoCuriosidad' name='inputContenidoCuriosidad' rows='6' placeholder='Introduce Contenido'></textarea>";
            echo "          </div>";
            echo "          <div id='divBotonesAcceso'>";
            echo "              <input type='submit' id='submitCuriosidad' name='submitCuriosidad' value='Crear' disabled/>";
            echo "              <input type='reset' id='resetCuriosidad' name='resetCuriosidad' value='Cancelar' />";
            echo "          </div>";
            echo "      </form>";
            echo "  </div>";
        } else {
            echo "<div class='h-100 row align-items-center avisoNoLogin alert alert-warning' role='alert'>";
            echo "Ups!... Parece que ahora mismo no hay ningún usuario en la sesión. <i class='fas fa-frown emoji'></i><br/>";
            echo "Puedes acceder desde <a href='index.php?option=login'>Login</a> o dirigirte a <a href='index.php?option=home'>Inicio</a><br/>";
            echo "Es necesario estar registrado para poder crear una <a href='index.php?option=historias'>Historia de Cine</a>";
            echo "</div>";
        }
        ?>
    </div>
</div>
<script src="./js/creation_public.js"></script>