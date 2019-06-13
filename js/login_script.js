/*
 * Autor: Javier Setién Rivas
 * Fecha: 20/03/2019
 * Descripción: Script de la página de Login/Registro de la web FilmaClub
 */

$(document).ready(init);

function init() {
    $("#btnRegistrar").on("click", nuevoRegistro);
    $("#cancelRegistro").on("click", cancelRegistro);
    $('#submitRegistro').attr('disabled', true);


    $('#inputNombre, #inputApellidos, #inputDNI, #inputFecha, #inputMail, #inputTelefono, #inputDireccion, #inputNuevoAlias, #inputNuevoPassword, #inputRepitePassword').bind('input propertychange', function () {

        checkFields();

    });
}

function nuevoRegistro() {
    $("#form_login").hide();
    $("#form_registro").show();
}

function cancelRegistro() {
    $("#form_login").show();
    $("#form_registro").hide();
}

function checkData() {
    console.log("Alias: " + $('#inputAlias').val());
    console.log("Passwd: " + $('#inputNuevoPassword').val());
    console.log("Nombre: " + $('#inputNombre').val());
    console.log("Apellidos: " + $('#inputApellidos').val());
    console.log("DNI: " + $('#inputDNI').val());
    console.log("Fecha: " + $('#inputFecha').val());
    console.log("Mail: " + $('#inputMail').val());
    console.log("Direccion: " + $('#inputDireccion').val());
    console.log("Telefono: " + $('#inputTelefono').val());
}

function checkFields() {
    var enable = false;
    if ($('#inputNombre').val().length != 0
        && $('#inputApellidos').val().length != 0
        && $('#inputDNI').val().length != 0
        && $('#inputFecha').val().length != 0
        && $('#inputMail').val().length != 0
        && $('#inputTelefono').val().length != 0
        && $('#inputDireccion').val().length != 0
        && $('#inputNuevoAlias').val().length != 0
        && $('#inputNuevoPassword').val().length != 0
        && $('#inputRepitePassword').val().length != 0) {

        if (verNombre() && verApellidos() && verDni() && verFecha() && verMail() && verTelefono() && verDireccion() && verAlias() && verPassword1() && verPassword2()) {
        
            $('#submitRegistro').attr('disabled', false);
        } else {
            $('#submitRegistro').attr('disabled', true);
        }
    } else {
        $('#submitRegistro').attr('disabled', true);
    }
}

//---------------------------------------------- VER KEYUP ----------------------------------------------//

function verNombre() {
    if ($('#inputNombre').val().length != 0) {
        if (checkCamposTexto($('#inputNombre').val())) {
            $('#errlabelNombre').hide();
            return true;
        } else {
            $('#errlabelNombre').show();
            $('#errlabelNombre').html('Nombre erroneo. El nombre no es valido');
            $('#errlabelNombre').addClass('inputIncorrecto');
            return false;
        }
    }
    else {
        $('#errlabelNombre').hide();
        return false;
    }
}

function verApellidos() {
    if ($('#inputApellidos').val().length != 0) {
        if (checkCamposTexto($('#inputApellidos').val())) {
            $('#errlabelApellidos').hide();
            return true;
        } else {
            $('#errlabelApellidos').show();
            $('#errlabelApellidos').html('Apellidos erroneos. Los apellidos no son válidos');
            $('#errlabelApellidos').addClass('inputIncorrecto');
            return false;
        }
    }
    else {
        $('#errlabelApellidos').hide();
        return false;
    }
}

function verDni() {
    if ($('#inputDNI').val().length != 0) {
        if (checkDNI($('#inputDNI').val())) {
            $('#errlabelDNI').show();
            $('#errlabelDNI').html('Dni valido');
            $('#errlabelDNI').addClass('inputCorrecto');
            $('#errlabelDNI').removeClass('inputIncorrecto');
            return true;

        } else {
            $('#errlabelDNI').show();
            $('#errlabelDNI').html('DNI erroneo. DNI invalido');
            $('#errlabelDNI').removeClass('inputCorrecto');
            $('#errlabelDNI').addClass('inputIncorrecto');
        }
    }
    else {
        $('#errlabelDNI').hide();
        return false;
    }
}

function verFecha() {
    if ($('#inputFecha').val().length != 0) {
        return true;
    }
    else {
        return false;
    }
}

function verMail() {
    if ($('#inputMail').val().length != 0) {
        if (checkMail($('#inputMail').val())) {
            $('#errlabelMail').hide();
            return true;
        } else {
            $('#errlabelMail').show();
            $('#errlabelMail').html('E-Mail invalido');
            $('#errlabelMail').addClass('inputIncorrecto');
        }
    }
    else {
        return false;
    }
}

function verTelefono() {
    if ($('#inputTelefono').val().length != 0) {
        if (checkTelf($('#inputTelefono').val())) {

            $('#errlabelTelefono').hide();
            console.log("telf. true");
            return true;

        } else {
            console.log("telf. false");
            $('#errlabelTelefono').show();
            $('#errlabelTelefono').html('Teléfono erroneo, formato no válido');
            $('#errlabelTelefono').addClass('inputIncorrecto');
        }
    }
    else {
        return false;
    }
}

function verDireccion() {
    if ($('#inputDireccion').val().length != 0) {
        return true;
    }
    else {
        return false;
    }
}

function verAlias() {
    if ($('#inputNuevoAlias').val().length != 0) {
        return true;
    }
    else {
        return false;
    }
}

function verPassword1() {
    if ($('#inputNuevoPassword').val().length != 0) {
        return true;
    }
    else {
        return false;
    }
}

function verPassword2() {
    if ($('#inputRepitePassword').val().length != 0) {
        if (checkPasswd($('#inputRepitePassword').val())) {
            $('#errlabelRepitePassword').hide();
            return true;
        } else {
            $('#errlabelRepitePassword').show();
            $('#errlabelRepitePassword').html('Las contraseñas no coinciden');
            $('#errlabelRepitePassword').addClass('inputIncorrecto');
        }
    }
    else {
        return true;
    }
}


//---------------------------------------------- CHECKS ----------------------------------------------//

function checkCamposTexto(text) {

    var re = /[^A-Za-zÑñ ]+/g
    if (re.test(text)) {
        return false;
    } else {
        return true;
    }

}

function checkDNI(dni) {
    var numero;
    var letr;
    var letra;
    var expresion_regular_dni;

    expresion_regular_dni = /^\d{8}[a-zA-Z]$/;
    if (expresion_regular_dni.test(dni) == true) {
        numero = dni.substr(0, dni.length - 1);
        letr = dni.substr(dni.length - 1, 1);
        numero = numero % 23;
        letra = 'TRWAGMYFPDXBNJZSQVHLCKET';
        letra = letra.substring(numero, numero + 1);
        if (letra != letr.toUpperCase()) {
            return false;
        } else {
            return true;
        }
    } else {
        return false;
    }
}

function checkMail(mail) {

    var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
    if (!re.test(mail)) {
        return false;
    } else {
        return true;
    }

}

function checkTelf(telf) {

    var expresion_regular_telf;

    expresion_regular_telf = /^\d{9}$/;

    if (expresion_regular_telf.test(telf) == true) {
        return true;
    } else {
        return false;
    }
}

function checkPasswd() {

    if (($('#inputNuevoPassword').val()) === ($('#inputRepitePassword').val())) {
        return true;
    } else {
        return false;
    }
}