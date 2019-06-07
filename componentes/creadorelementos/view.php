<link rel="stylesheet" type="text/css" href="css/login_style.css">
<div>
    <div id="botonesCreacion" class="creacionElemento col-md-12 text-center">
        <button id="creaPeliculaBtn" class=" col-md-4 btn btn-primary">Crear Pelicula</button>
        <button id="creaActorBtn" class=" col-md-4 btn btn-primary">Crear Actor</button>
        <button id="creaReviewBtn" class=" col-md-4 btn btn-primary">Crear Review</button>
        <button id="creaHistoriaBtn" class=" col-md-4 btn btn-primary">Crear Historia</button>
        <button id="creaNoticiaBtn" class=" col-md-4 btn btn-primary">Crear Noticia</button>
        <button id="creaProductoBtn" class=" col-md-4 btn btn-primary">Crear Producto</button>
    </div>
    <div class=" container">
        <div id="creacionPeliculas" class="contenedor">
            <form class="formulariosCreacion" action="index.php?option=login" method="POST">
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
                        $results_array = modelCreadorElementos::viewGenre();

                        foreach ($results_array as $genero) {
                            echo "<option value='$genero[id_genero]'>"
                                . $genero[genero_pelicula] . "</option>";
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
                    <textarea id="inputDescripcionPelicula" name="inputDescripcionPelicula" placeholder="Introduce Descripción"></textarea>
                </div>
                <div id="divPosterPelicula">
                    <label id="labelPosterPelicula">Poster: </label><br />
                    <input type="file" id="inputPosterPelicula" multiple class="form-control">
                    <label for="file-upload" class="custom-file-upload"></label>
                </div>

                <div id="divBotonesAcceso">
                    <input type="submit" id="submitPelicula" name="submitPelicula" value="Crear" />
                    <input type="reset" id="resetPelicula" name="resetPelicula" value="Cancelar" />
                </div>
            </form>
        </div>
        <div id="creacionActor" class="contenedor" style="display: none;">
            <form class="formulariosCreacion" action="index.php?option=login" method="POST">
                <h1>Creación de Actor:</h1>
                <div id="divNombreActor">
                    <label id="labelNombreActor">Nombre del Actor: </label>
                    <input type="text" id="inputNombreActor" name="inputNombreActor" placeholder="Introduce Nombre" />
                </div>
                <div id="divApellidosActor">
                    <label id="labelApellidosActor">Apellidos del Actor: </label>
                    <input type="text" id="inputApellidosActor" name="inputApellidosActor" placeholder="Introduce Apellidos" />
                </div>
                <div id="divFechaNacActor">
                    <label id="labelFechaNacActor">Fecha de nacimiento: </label>
                    <input type="date" id="inputFechaNacActor" name="inputFechaNacActor" placeholder="Introduce Fecha de nacimiento" />
                </div>
                <div id="divLugarNacActor">
                    <label id="labelLugarNacActor">Lugar de Nacimiento: </label>
                    <input type="text" id="inputLugarNacActor" name="inputLugarNacActor" placeholder="Introduce Lugar de nacimiento" />

                </div>
                <div id="divBotonesAcceso">
                    <input type="submit" id="submitActor" name="submitActor" value="Crear" />
                    <input type="reset" id="resetActor" name="resetActor" value="Cancelar" />
                </div>
            </form>
        </div>
        <div id="creacionReviews" class="contenedor">
            <form class="formulariosCreacion" action="index.php?option=login" method="POST">
                <h1>Creación de Review:</h1>
                <div id="divAutorReview">
                    <label id="labelAutorReview">Autor: </label><label id="errlabelAutorReview"></label>
                    <input type="text" id="inputAutorReview" name="inputAutorReview" value="Autor" disabled />
                </div>
                <div id="divPuntuacionReview">
                    <label id="labelPuntuacionReview">Valoración: </label><label id="errlabelPuntuacionReview"></label>
                    <input type="text" id="inputPuntuacionReview" name="inputPuntuacionReview" placeholder="Introduce Valoración" />
                </div>
                <div id="divTituloReview">
                    <label id="labelTituloReview">Título de Review: </label>
                    <input type="text" id="inputTituloReview" name="inputTituloReview" placeholder="Introduce Título" />
                </div>
                <div id="divContenidoReview">
                    <label id="labelContenidoReview">Contenido: </label>
                    <textarea id="inputContenidoReview" name="inputContenidoReview" placeholder="Introduce Contenido"></textarea>
                </div>
            </form>
        </div>
        <div id="creacionHistorias" class="contenedor">
            <form class="formulariosCreacion" action="index.php?option=login" method="POST">
                <h1>Creación de Curiosidad:</h1>
                <div id="divAutorCuriosidad">
                    <label id="labelAutorCuriosidad">Autor: </label><label id="errlabelAutorCuriosidad"></label>
                    <input type="text" id="inputAutorCuriosidad" name="inputAutorCuriosidad" value="Autor" disabled />
                </div>
                <div id="divTituloCuriosidad">
                    <label id="labelTituloCuriosidad">Título de Curiosidad: </label>
                    <input type="text" id="inputTituloCuriosidad" name="inputTituloCuriosidad" placeholder="Introduce Título" />
                </div>
                <div id="divContenidoCuriosidad">
                    <label id="labelContenidoCuriosidad">Contenido: </label>
                    <textarea id="inputContenidoCuriosidad" name="inputContenidoCuriosidad" placeholder="Introduce Contenido"></textarea>
                </div>
            </form>
        </div>
        <div id="creacionNoticias" class="contenedor">
            <form class="formulariosCreacion" action="index.php?option=login" method="POST">
                <h1>Creación de Noticia:</h1>
                <div id="divTituloNoticia">
                    <label id="labelTituloNoticia">Titular de la Noticia: </label>
                    <input type="text" id="inputTituloNoticia" name="inputTituloNoticia" placeholder="Introduce Titular" />
                </div>
                <div id="divContenidoNoticia">
                    <label id="labelContenidoNoticia">Contenido: </label>
                    <textarea id="inputContenidoNoticia" name="inputContenidoNoticia" placeholder="Introduce Contenido"></textarea>
                </div>
            </form>
        </div>
        <div id="creacionProductos" class="contenedor">
            <form class="formulariosCreacion" action="index.php?option=login" method="POST">
                <h1>Creación de Producto:</h1>
                <div id="divDescripcionProducto">
                    <label id="labelDescripcionProducto">Descripción: </label>
                    <textarea id="inputDescripcionProducto" name="inputDescripcionProducto" placeholder="Introduce Descripción"></textarea>
                </div>
                <div id="divPVPProducto">
                    <label id="labelPVPProducto">Precio del Producto: </label><label id="errlabelPVPProducto"></label>
                    <input type="text" id="inputPVPProducto" name="inputPVPProducto" placeholder="Introduce Precio" />
                </div>
                <div id="divFechaProducto">
                    <label id="labelFechaProducto">Fecha del Registro: </label>
                    <input type="date" id="inputFechaProducto" name="inputFechaProducto" placeholder="Introduce Fecha del Registro" />
                </div>
                <div id="divStockProducto">
                    <label id="labelStockProducto">Stock del Producto: </label><label id="errlabelStockProducto"></label>
                    <input type="text" id="inputStockProducto" name="inputStockProducto" placeholder="Introduce Stock" />
                </div>
                <div id="divTipoProducto">
                    <label id="labelTipoProducto">Tipo de Producto: </label>
                    <select id="inputTipoProducto" name="inputTipoProducto">
                        <option disabled selected>Selecciona un Tipo</option>
                        <?php
                        $results_array = modelCreadorElementos::viewTypeProduct();

                        foreach ($results_array as $tipo) {
                            echo "<option value='$tipo[id_tipo]'>"
                                . $tipo[descripcion] . "</option>";
                        }
                        ?>
                    </select>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="./js/creaelementos_script.js"></script>