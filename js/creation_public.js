$(document).ready(init);

function init() {

    $('#submitCuriosidad').attr('disabled', true);
    $('#submitReview').attr('disabled', true);

    $('#inputSelectPelicula, #inputTituloCuriosidad, #inputContenidoCuriosidad').bind('input propertychange', function () {

        checkFieldsHistoria();

    });

    $('#inputSelectPelicula, #inputTituloReview, #inputContenidoReview, #puntuacion').bind('input propertychange', function () {

        checkFieldsReviews();

    });
}

function checkFieldsHistoria() {

    if ($('#inputSelectPelicula').val().length != 0
        && $('#inputTituloCuriosidad').val() != ""
        && $('#inputContenidoCuriosidad').val() != "") {

        $('#submitCuriosidad').attr('disabled', false);

    } else {
        $('#submitCuriosidad').attr('disabled', true);
    }
}

function checkFieldsReviews() {

    if ($('#inputSelectPelicula').val().length != 0
        && $('#inputTituloReview').val() != ""
        && $('#inputContenidoReview').val() != "") {

        $('#submitReview').attr('disabled', false);

    } else {
        $('#submitReview').attr('disabled', true);
    }
}