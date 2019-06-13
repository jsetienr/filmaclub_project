$(document).ready(init);

function init() {

    $('#submitActor').attr('disabled', true);
    $('#submitPelicula').attr('disabled', true);
    $('#submitNoticia').attr('disabled', true);
    $('#submitProducto').attr('disabled', true);


    $('#inputNombreActor, #inputApellidosActor, #inputFechaNacActor, #inputLugarNacActor').bind('input propertychange', function () {

        checkFieldsActor();

    });

    $('#inputNombrePelicula, #inputDirectorPelicula, #inputAnyoPelicula, #inputGeneroPelicula, #inputDuracionPelicula, #inputDescripcionPelicula').bind('input propertychange', function () {

        checkFieldsPelicula();

    });

    $('#inputSelectPelicula, #inputTituloNoticia, #inputContenidoNoticia').bind('input propertychange', function () {

        checkFieldsNoticia();

    });

    $('#inputNombreProducto, #inputDescripcionProducto, #inputPVPProducto, #inputFechaProducto, #inputStockProducto, #inputTipoProducto').bind('input propertychange', function () {

        checkFieldsProducto();

    });
}

function checkFieldsActor() {

    if ($('#inputNombreActor').val() != ""
        && $('#inputApellidosActor').val() != ""
        && $('#inputFechaNacActor').val() != ""
        && $('#inputLugarNacActor').val() != "") {

        $('#submitActor').attr('disabled', false);

    } else {
        $('#submitActor').attr('disabled', true);
    }
}

function checkFieldsPelicula() {

    if ($('#inputGeneroPelicula').val().length != 0
        && $('#inputNombrePelicula').val() != ""
        && $('#inputDirectorPelicula').val() != ""
        && $('#inputAnyoPelicula').val() != ""
        && $('#inputDuracionPelicula').val() != ""
        && $('#inputDescripcionPelicula').val() != "") {

        $('#submitPelicula').attr('disabled', false);

    } else {
        $('#submitPelicula').attr('disabled', true);
    }
}

function checkFieldsNoticia() {

    if ($('#inputSelectPelicula').val().length != 0
        && $('#inputTituloNoticia').val() != ""
        && $('#inputContenidoNoticia').val() != "") {

        $('#submitNoticia').attr('disabled', false);

    } else {
        $('#submitNoticia').attr('disabled', true);
    }
}

function checkFieldsProducto() {

    if ($('#inputTipoProducto').val().length != 0
        && $('#inputNombreProducto').val() != ""
        && $('#inputDescripcionProducto').val() != ""
        && $('#inputPVPProducto').val() != ""
        && $('#inputFechaProducto').val() != ""
        && $('#inputTipoProducto').val() != "") {

        $('#submitProducto').attr('disabled', false);

    } else {
        $('#submitProducto').attr('disabled', true);
    }
}