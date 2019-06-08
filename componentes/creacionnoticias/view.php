<link rel="stylesheet" type="text/css" href="css/login_style.css">
<div>
    <div class="container">
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
    </div>
</div>