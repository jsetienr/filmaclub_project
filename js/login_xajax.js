function buscaAlias()
{
    //Obtenemos el codigo introducido y ejecutamos el metodo en el servidor
    var codigo = document.getElementById("inputNuevoAlias").value;
    var respuesta = xajax.request({xjxfun: "buscaAlias"}, {mode: 'synchronous', parameters: [codigo]});
}