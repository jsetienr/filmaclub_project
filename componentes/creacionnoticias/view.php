<link rel="stylesheet" type="text/css" href="css/login_style.css">
<div>
    <div class='container'>
        <?php
		if (
            isset($_SESSION["usuario"]) && !empty($_SESSION["usuario"])
			&& ($_SESSION["usuario"] !== "") && ($_SESSION["usuario"] !== NULL)
            ) {
echo "        <div id='creacionNoticias' class='contenedor'>";
echo "            <form class='formulariosCreacion' action='index.php?option=creacionnoticias' method='POST'>";
echo "                <h1>Creación de Noticia:</h1>";
echo "                <div id='divSelectPelicula'>";
echo "                    <label id='labelSelectPelicula'>Película: </label>";
echo "                    <select id='inputSelectPelicula' name='inputSelectPelicula'>";
echo "                        <option disabled selected>Selecciona una Película</option>";
                        
                        $results_array = modelCreacionNoticias::viewPeliculas();
                        foreach ($results_array as $pelicula) {
                            echo "<option value='$pelicula[clave_pelicula]'>"
                                . utf8_encode($pelicula[nombre]) . "</option>";
                        }
                       
echo "                    </select>";
echo "                </div>";
echo "                <div id='divTituloNoticia'>";
echo "                    <label id='labelTituloNoticia'>Titular de la Noticia: </label>";
echo "                    <input type='text' id='inputTituloNoticia' name='inputTituloNoticia' placeholder='Introduce Titular' />";
echo "                </div>";
echo "                <div id='divContenidoNoticia'>";
echo "                    <label id='labelContenidoNoticia'>Contenido: </label>";
echo "                    <textarea id='inputContenidoNoticia' name='inputContenidoNoticia' rows='10' placeholder='Introduce Contenido'></textarea>";
echo "                </div>";
echo "                <div id='divBotonesAcceso'>";
echo "                    <input type='submit' id='submitNoticia' name='submitNoticia' value='Crear' />";
echo "                    <input type='reset' id='resetNoticia' name='resetNoticia' value='Cancelar' />";
echo "                </div>";
echo "            </form>";
echo "        </div>";
                    }?>
    </div>
</div>