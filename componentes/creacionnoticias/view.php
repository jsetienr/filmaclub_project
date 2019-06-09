<link rel="stylesheet" type="text/css" href="css/login_style.css">
<div>
    <div class="container">
        <div id="creacionNoticias" class="contenedor">
            <form class="formulariosCreacion" action="index.php?option=creacionnoticias" method="POST">
                <h1>Creación de Noticia:</h1>
                <div id="divSelectPelicula">
                    <label id="labelSelectPelicula">Película: </label>
                    <select id="inputSelectPelicula" name="inputSelectPelicula">
                        <option disabled selected>Selecciona una Película</option>
                        <?php
                        $results_array = modelCreacionNoticias::viewPeliculas();
                        foreach ($results_array as $pelicula) {
                            echo "<option value='$pelicula[clave_pelicula]'>"
                                . utf8_encode($pelicula[nombre]) . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div id="divTituloNoticia">
                    <label id="labelTituloNoticia">Titular de la Noticia: </label>
                    <input type="text" id="inputTituloNoticia" name="inputTituloNoticia" placeholder="Introduce Titular" />
                </div>
                <div id="divContenidoNoticia">
                    <label id="labelContenidoNoticia">Contenido: </label>
                    <textarea id="inputContenidoNoticia" name="inputContenidoNoticia" rows="10" placeholder="Introduce Contenido"></textarea>
                </div>
                <div id="divBotonesAcceso">
                    <input type="submit" id="submitNoticia" name="submitNoticia" value="Crear" />
                    <input type="reset" id="resetNoticia" name="resetNoticia" value="Cancelar" />
                </div>
            </form>
        </div>
    </div>
</div>