<link rel="stylesheet" type="text/css" href="css/login_style.css">
<div>
    <div class=" container">
        <div id="creacionPeliculas" class="contenedor">
            <form class="formulariosCreacionMultiple" action="index.php?option=creacionpeliculas" method="POST">
                <h1>Creación de Película:</h1>
                <div id="divNombrePelicula">
                    <label id="labelNombrePelicula">Nombre de la Película: </label>
                    <input type="text" id="inputNombrePelicula" name="inputNombrePelicula" placeholder="Introduce Nombre" />
                </div>
                <div id="divDirectorPelicula">
                    <label id="labelDirectorPelicula">Nombre del Director: </label>
                    <input type="text" id="inputDirectorPelicula" name="inputDirectorPelicula" placeholder="Introduce Director" />
                </div>
                <div id="divAnyoPelicula">
                    <label id="labelAnyoPelicula">Año de estreno: </label><label id="errlabelAnyoPelicula"></label>
                    <input type="text" id="inputAnyoPelicula" name="inputAnyoPelicula" placeholder="Introduce Año de estreno" />
                </div>
                <div id="divGeneroPelicula">
                    <label id="labelGeneroPelicula">Género: </label>
                    <select id="inputGeneroPelicula" name="inputGeneroPelicula">
                        <option disabled selected>Selecciona un Género</option>
                        <?php
                        $results_array = modelCreadorPeliculas::viewGenre();

                        foreach ($results_array as $genero) {
                            echo "<option value='" . $genero[id_genero] . "'>"
                                . utf8_encode($genero[genero_pelicula]) . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div id="divDuracionPelicula">
                    <label id="labelDuracionPelicula">Duración: </label><label id="errlabelDuracionPelicula"></label>
                    <input type="text" id="inputDuracionPelicula" name="inputDuracionPelicula" placeholder="Introduce Duración" />
                </div>
                <div id="divDescripcionPelicula">
                    <label id="labelDescripcionPelicula">Descripción: </label>
                    <textarea id="inputDescripcionPelicula" name="inputDescripcionPelicula" rows="6" placeholder="Introduce Descripción"></textarea>
                </div>
                <div id="divBotonesAcceso">
                    <input type="submit" id="submitPelicula" name="submitPelicula" value="Crear" />
                    <input type="reset" id="resetPelicula" name="resetPelicula" value="Cancelar" />
                </div>
            </form>
        </div>
        <div id="creacionPosterPeliculas" class="contenedor">
            <form class="formulariosCreacionVarios" action="index.php?option=creacionpeliculas" method="POST" enctype="multipart/form-data">
                <h1>Subida de Poster de Película:</h1>
                <div id="divSelectPelicula">
                    <label id="labelSelectPelicula">Película: </label>
                    <select id="inputSelectPelicula" name="inputSelectPelicula">
                        <option disabled selected>Selecciona una Película</option>
                        <?php
                        $results_array = modelCreadorPeliculas::viewPeliculas();
                        foreach ($results_array as $pelicula) {
                            echo "<option value='$pelicula[clave_pelicula]'>"
                                . utf8_encode($pelicula[nombre]) . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div id="divPosterPelicula">
                    <label id="labelPosterPelicula">Poster: </label><br />
                    <!-- <input type="file" id="inputPosterPelicula" class="form-control"> -->
                    <input name="archivo" type="file" class="form-control" />
                    <label for="file-upload" class="custom-file-upload"></label>
                </div>
                <div id="divBotonesAcceso">
                    <input type="submit" id="submitPoster" name="submitPoster" value="Crear" />
                    <input type="reset" id="resetPoster" name="resetPoster" value="Cancelar" />
                </div>
            </form>
        </div>
    </div>
    <script src="./js/creaelementos_script.js"></script>