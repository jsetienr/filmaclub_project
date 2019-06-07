<link rel="stylesheet" type="text/css" href="css/login_style.css">
<!--Inicio FORMULARIOS-->
<!--Inicio Login-->
<div id="form_login">

    <div class="mensajes-sistema">
        <?php echo $estado = ''; ?>
    </div>

    <h1>Login:</h1>
    <form id="login" method="post" action="index.php?option=login">
        <div id="divAlias">
            <label id="labelAlias">Alias: </label>
            <input type="text" id="inputAlias" name="inputAlias" placeholder="Introduce Alias" />
        </div>
        <div id="divPassword">
            <label id="labelPassword">Contraseña: </label>
            <input type="password" id="inputPassword" name="inputPassword" placeholder="Introduce Contraseña" />
        </div>
        <div id="divBotonesAcceso">
            <input type="submit" id="submitAcceso" name="submitAcceso" value="Acceder" />
            <input type="reset" id="resetAcceso" name="resetAcceso" value="Cancelar" />

            <!--Enlace desplegable de contenido-->
            <a id="enlaceNuevoRegistro" data-toggle="collapse" data-target="#btnNuevoUsuario">¿No estás
                registrado?</a>
            <div id="btnNuevoUsuario" class="collapse"><input type="button" id="btnRegistrar" name="btnRegistrar" value="Ir a Registro" /></div>
        </div>
    </form>
</div>
<!--Fin Login-->
<!--Inicio Registro-->
<div id="form_registro" style="display: none;">
    <div class="mensajes-sistema">
        <?php echo $estado = ''; ?>
    </div>
    <h1>Registro de usuario:</h1>
    <form id="registro" method="post" action="index.php?option=login">
        <div id=" divNombre">
        <label id="labelNombre">Nombre: </label>
        <input type="text" id="inputNombre" name="inputNombre" placeholder="Introduce tu Nombre" />
</div>
<div id="divApellidos">
    <label id="labelApellidos">Apellidos: </label>
    <input type="text" id="inputApellidos" name="inputApellidos" placeholder="Introduce tus Apellidos" />
</div>
<div id="divDNI">
    <label id="labelDNI">DNI: </label><label id="errlabelDNI" class="labelError"></label>
    <input type="text" id="inputDNI" name="inputDNI" placeholder="Introduce tu DNI" />
</div>
<div id="divFecha">
    <label id="labelFecha">Fecha de Nacimiento: </label>
    <input type="date" id="inputFecha" name="inputFecha" />
</div>
<div id="divMail">
    <label id="labelMail">Dirección de correo: </label>
    <input type="text" id="inputMail" name="inputMail" placeholder="Introduce tu dirección de correo" />
</div>
<div id="divTelefono">
    <label id="labelTelefono">Teléfono: </label><label id="errlabelTelefono" class="labelError"></label>
    <input type="text" id="inputTelefono" name="inputTelefono" placeholder="Introduce tu Teléfono" />
</div>
<div id="divDireccion">
    <label id="labelDireccion">Dirección de domicilio: </label>
    <input type="text" id="inputDireccion" name="inputDireccion" placeholder="Introduce tu Dirección" />
</div>
<div id="divNuevoAlias">
    <label id="labelNuevoAlias">Alias: </label>
    <input type="text" id="inputNuevoAlias" name="inputNuevoAlias" placeholder="Introduce un alias" />
</div>
<div id="divNuevoPassword">
    <label id="labelNuevoPassword">Contraseña: </label>
    <input type="password" id="inputNuevoPassword" name="inputNuevoPassword" placeholder="Introduce una contraseña" />
</div>
<div id="divRepitePassword">
    <label id="labelRepitePassword">Repite Contraseña: </label><label id="errlabelRepitePassword" class="labelError"></label>
    <input type="password" id="inputRepitePassword" name="inputRepitePassword" placeholder="Repite de nuevo la contraseña" />
</div>
<div id="divBotonesEnviar">
    <input type="submit" id="submitRegistro" name="submitRegistro" value="Registrar" />
    <input type="button" id="checkRegistro" name="checkRegistro" value="Check" />
    <!-- <input type="reset" id="resetRegistro" name="resetRegistro" value="Vaciar Campos" /> -->
    <input type="button" id="cancelRegistro" name="cancelRegistro" value="Cancelar" />
</div>
</form>
</div>

<script src="./js/login_script.js"></script>

<!--Fin Registro-->
<!--Fin FORMULARIOS-->