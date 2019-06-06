$(document).ready(init);

function init() {
    var buttonClicked;
    $("#creaPeliculaBtn").on("click", toggleDivs);
    $("#creaActorBtn").on("click", toggleDivs);
    $("#creaReviewBtn").on("click", toggleDivs);
    $("#creaHistoriaBtn").on("click", toggleDivs);
    $("#creaNoticiaBtn").on("click", toggleDivs);
    $("#creaProductoBtn").on("click", toggleDivs);

}

function toggleDivs() {
    buttonClicked = $(this).attr('id');
    // console.log(buttonClicked);
    switch (buttonClicked) {
        case 'creaPeliculaBtn':
            $("#creacionPeliculas").show();
            $("#creacionActor").hide();
            $("#creacionReviews").hide();
            $("#creacionHistorias").hide();
            $("#creacionNoticias").hide();
            $("#creacionProductos").hide();
            break;
        case 'creaActorBtn':
            $("#creacionPeliculas").hide();
            $("#creacionActor").show();
            $("#creacionReviews").hide();
            $("#creacionHistorias").hide();
            $("#creacionNoticias").hide();
            $("#creacionProductos").hide();
            break;
        case 'creaReviewBtn':
            $("#creacionPeliculas").hide();
            $("#creacionActor").hide();
            $("#creacionReviews").show();
            $("#creacionHistorias").hide();
            $("#creacionNoticias").hide();
            $("#creacionProductos").hide();
            break;
        case 'creaHistoriaBtn':
            $("#creacionPeliculas").hide();
            $("#creacionActor").hide();
            $("#creacionReviews").hide();
            $("#creacionHistorias").show();
            $("#creacionNoticias").hide();
            $("#creacionProductos").hide();
            break;
        case 'creaNoticiaBtn':
            $("#creacionPeliculas").hide();
            $("#creacionActor").hide();
            $("#creacionReviews").hide();
            $("#creacionHistorias").hide();
            $("#creacionNoticias").show();
            $("#creacionProductos").hide();
            break;
        case 'creaProductoBtn':
            $("#creacionPeliculas").hide();
            $("#creacionActor").hide();
            $("#creacionReviews").hide();
            $("#creacionHistorias").hide();
            $("#creacionNoticias").hide();
            $("#creacionProductos").show();
            break;
        default:
            console.log("No se detecta nada");
            break;
    };
}