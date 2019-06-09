<link rel="stylesheet" type="text/css" href="css/login_style.css">
<div>
    <div class=" container">
        <div id="creacionActor" class="contenedor">
            <form class="formulariosCreacionMultiple" action="index.php?option=creacionactores" method="POST">
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
        <div id="creacionRelacionActores" class="contenedor">
            <form class="formulariosCreacionVarios" action="index.php?option=creacionactores" method="POST">
                <h1>Creación de Relaciones [Actor - Película]:</h1>
                <div id="divSelectActor">
                    <label id="labelSelectActor">Actor: </label>
                    <select id="inputSelectActor" name="inputSelectActor">
                        <option disabled selected>Selecciona un Actor</option>
                        <?php
                        $results_array = modelCreacionActores::viewActores();
                        foreach ($results_array as $actor) {
                            echo "<option value='$actor[id_actor]'>"
                                . utf8_encode($actor[nombre])." ". utf8_encode($actor[apellidos]). "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div id="divSelectPelicula">
                    <label id="labelSelectPelicula">Película: </label>
                    <select id="inputSelectPelicula" name="inputSelectPelicula">
                        <option disabled selected>Selecciona una Película</option>
                        <?php
                        $results_array = modelCreacionActores::viewPeliculas();
                        foreach ($results_array as $pelicula) {
                            echo "<option value='$pelicula[clave_pelicula]'>"
                                . utf8_encode($pelicula[nombre]) . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div id="divBotonesAcceso">
                    <input type="submit" id="submitRelacion" name="submitRelacion" value="Crear" />
                    <input type="reset" id="resetRelacion" name="resetRelacion" value="Cancelar" />
                </div>
            </form>
        </div>
    </div>
</div>