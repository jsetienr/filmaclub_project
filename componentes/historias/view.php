<link rel="stylesheet" type="text/css" href="css/style.css">
<div class="container">
    <div class="row">
        <h1>HISTORIAS DE CINE</h1>
    </div>
    <div class="col-md-12">
        <section class="container-fluid" id="contenido">
            <div class="cabecera-seccion row">
                <h2>Nuestras películas con Curiosidades: </h2>
            </div>
            <div class="row">

                <?php
                $results_array = modelStories::viewPeliculas();

                $i = 0;
                foreach ($results_array as $pelicula) {
                    $contHistorias = modelStories::countHistorias($pelicula['clave_pelicula']);
                    foreach ($contHistorias as $value) {
                        $contador = $value;
                    }

                    echo " <div class='col-md-12'>";
                    echo "     <div class='contenido-reciente independiente container-fluid'>";
                    echo "         <div class='col-md-3'>";
                    echo "         <div class='col-md-6'>";
                    echo "             <img src='" . $pelicula['poster'] . "' class='align-self-center mr-3 rounded' alt='poster' height='128' width='90'>";
                    echo "         </div>";
                    echo "         <div class='col-md-6'>";
                    echo "             <button type='button' class='btn btn-danger btn-lg btn-block botonDesplegableDatos' data-toggle='collapse' data-target='#info_pelicula" . $i . "'>Información</button>";
                    echo "             <button type='button' class='btn btn-success btn-lg btn-block botonDesplegableDatos' data-toggle='collapse' data-target='#info_curiosidades" . $i . "'>Curiosidades</button>";
                    echo "         </div>";
                    echo "         </div>";
                    echo "         <div class='col-md-9'>";
                    echo "             <h3><strong>" . utf8_encode(stripslashes($pelicula['nombre'])) . "</strong></h3>";
                    echo "             <div class='col-md-4'>";
                    echo "                 <label class='labelDataMovie'>Director: </label>";
                    echo "                 <p class='dataMovie'>" . utf8_encode(stripslashes($pelicula['director'])) . "</p>";
                    echo "             </div>";
                    echo "             <div class='col-md-4'>";
                    echo "                 <label class='labelDataMovie'>Año: </label>";
                    echo "                 <p class='dataMovie'>" . $pelicula['anyo'] . "</p>";
                    echo "             </div>";
                    echo "             <div class='col-md-4'>";
                    echo "                 <label class='labelDataMovie'>Nº de Curiosidades: </label>";
                    echo "                 <p class='dataMovie'>" . $contador . "</p>";
                    echo "             </div>";
                    echo "            <div id='info_pelicula" . $i . "' class='row collapse'>";
                    echo "                <div class='col-md-12'>";
                    echo "                    <div class='infoPeli'>";
                    echo "                        <div class='datosPeli'>";
                    echo "                             <h3>" . utf8_encode($pelicula['genero_pelicula']) . "</h3>";
                    $arrayActores = modelStories::viewActores($pelicula['clave_pelicula']);
                    foreach ($arrayActores as $actor) {
                        echo "                             <span>" . utf8_encode($actor['nombre']) . " " . utf8_encode($actor['apellidos']) . "</span><br/>";
                    }
                    echo "                        </div>";
                    echo "                             <span>" . $pelicula['duracion'] . "mins</span>";
                    echo "                         <p>" . utf8_encode(stripslashes($pelicula['descripcion'])) . "</p>";
                    echo "                    </div>";
                    echo "                </div>";
                    echo "            </div>";
                    echo "            <div id='info_curiosidades" . $i . "' class='row collapse'>";
                    echo "                <div class='col-md-12'>";
                    $curiosidades = modelStories::viewCuriosidades($pelicula['clave_pelicula']);
                    foreach ($curiosidades as $curiosidad) {
                        echo "                    <div class='curiosidad'>";
                        echo "                        <div class='datosCuriosidad'>";
                        echo "                             <h3>" . stripslashes($curiosidad['titulo']) . "</h3>";
                        echo "                             <span>" . $curiosidad['alias_usuario'] . "</span>";
                        echo "                        </div>";
                        echo "                         <p>" . stripslashes($curiosidad['curiosidad']) . "</p>";
                        echo "                    </div>";
                    }
                    echo "                </div>";
                    echo "            </div>";
                    echo "         </div>";
                    echo "     </div>";
                    echo " </div>";
                    $i++;
                }
                ?>

            </div>
            <div class="row">
                <h3><a href="index.php?option=creacionhistorias">Demuestra tus conocimientos de cine aportando una historia</a></h3>
            </div>
        </section>
    </div>
</div>