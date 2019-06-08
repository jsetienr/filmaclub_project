<link rel="stylesheet" type="text/css" href="css/login_style.css">
<div>
    <div class="container">
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
    </div>
</div>