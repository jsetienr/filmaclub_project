<link rel="stylesheet" type="text/css" href="css/login_style.css">
<div>
    <div class="container">
        <div id="creacionReviews" class="contenedor">
            <form class="formulariosCreacion" action="index.php?option=reviews" method="POST">
                <h1>Creación de Review:</h1>
                <div id="divSelectPelicula">
                    <label id="labelSelectPelicula">Película: </label>
                    <select id="inputSelectPelicula" name="inputSelectPelicula">
                        <option disabled selected>Selecciona una Película</option>
                        <?php
                        $results_array = modelCreacionReviews::viewPeliculas();
                        foreach ($results_array as $pelicula) {
                            echo "<option value='$pelicula[clave_pelicula]'>"
                                . $pelicula[nombre] . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div id="divTituloReview">
                    <label id="labelTituloReview">Título de la Review: </label>
                    <input type="text" id="inputTituloReview" name="inputTituloReview" placeholder="Introduce Titulo" />
                </div>
                <div id="divContenidoReview">
                    <label id="labelContenidoReview">Review: </label>
                    <textarea id="inputContenidoReview" name="inputContenidoReview" rows="10" placeholder="Introduce tu Review"></textarea>
                </div>
                <div id="divValoracion">
                    <label id="labelValoracion">Puntuación: </label>
                    <div class="container-fluid">
                        <div class="col-md-3">
                            <label id="labelValoracionMal">Mala: <i class="fas fa-angry labelIcon"></i></label>
                            <div class="radio">
                                <label><input type="radio" name="puntuacion" value="1">1</label>
                                <label><input type="radio" name="puntuacion" value="2">2</label>
                                <label><input type="radio" name="puntuacion" value="3">3</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label id="labelValoracionRegular">Floja...: <i class="fas fa-meh labelIcon"></i></label>
                            <div class="radio">
                                <label><input type="radio" name="puntuacion" value="4">4</label>
                                <label><input type="radio" name="puntuacion" value="5" checked>5</label>
                                <label><input type="radio" name="puntuacion" value="6">6</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label id="labelValoracionBien">Buena: <i class="fas fa-grin-beam labelIcon"></i></label>
                            <div class="radio">
                                <label><input type="radio" name="puntuacion" value="7">7</label>
                                <label><input type="radio" name="puntuacion" value="8">8</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label id="labelValoracionMuyBien">¡Excelente!: <i class="fas fa-grin-stars labelIcon"></i></label>
                            <div class="radio">
                                <label><input type="radio" name="puntuacion" value="9">9</label>
                                <label><input type="radio" name="puntuacion" value="10">10</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="divBotonesAcceso">
                    <input type="submit" id="submitReview" name="submitReview" value="Crear" />
                    <input type="reset" id="resetReview" name="resetReview" value="Cancelar" />
                </div>
            </form>
        </div>
    </div>
</div>