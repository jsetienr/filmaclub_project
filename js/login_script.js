/*
 * Autor: Javier Setién Rivas
 * Fecha: 20/03/2019
 * Descripción: Script de la página de Login/Registro de la web FilmaClub
 */

$(document).ready(init);

function init() {
  $("#btnRegistrar").on("click", nuevoRegistro);
  $("#cancelRegistro").on("click", cancelRegistro);
  checkInputsVacios();
}

function nuevoRegistro() {
  $("#form_login").hide();
  //    $("#form_registro").removeAttr("hidden");
  $("#form_registro").show();
}

function cancelRegistro() {
  $("#form_login").show();
  $("#form_registro").hide();
}

/* CONTROLAR INSERCION CORRECTA DNI */
/*inputDNI ---errlabelDNI*/
$('#inputDNI').bind('input propertychange', function () {
  if (($('#inputDNI').val().length >= 0)) {
    checkDNI($('#inputDNI').val());
  }

});

function checkDNI(dni) {
  var numero;
  var letr;
  var letra;
  var expresion_regular_dni;

  expresion_regular_dni = /^\d{8}[a-zA-Z]$/;
  if (($('#inputDNI').val().length > 0)) {
    $('#errlabelDNI').show();
    if (expresion_regular_dni.test(dni) == true) {
      numero = dni.substr(0, dni.length - 1);
      letr = dni.substr(dni.length - 1, 1);
      numero = numero % 23;
      letra = 'TRWAGMYFPDXBNJZSQVHLCKET';
      letra = letra.substring(numero, numero + 1);
      if (letra != letr.toUpperCase()) {
        $('#errlabelDNI').html('Dni erroneo, la letra del NIF no se corresponde');
        $('#submitRegistro').attr("disabled", true);
        $('#errlabelDNI').removeClass('inputCorrecto');
        $('#errlabelDNI').addClass('inputIncorrecto');
      } else {
        $('#errlabelDNI').html('Dni correcto');
        $('#submitRegistro').removeAttr("disabled");
        $('#errlabelDNI').addClass('inputCorrecto');
        $('#errlabelDNI').removeClass('inputIncorrecto');
        $('#inputDNI').attr("disabled", true);
      }
    } else {
      $('#errlabelDNI').html('Dni erroneo, formato no válido');
      $('#submitRegistro').attr("disabled", true);
      $('#errlabelDNI').removeClass('inputCorrecto');
      $('#errlabelDNI').addClass('inputIncorrecto');
    }
  } else {
    $('#errlabelDNI').hide();
  }
}

$('#inputTelefono').bind('input propertychange', function () {
  if (($('#inputTelefono').val().length >= 0)) {
    checkTelf($('#inputTelefono').val());
  }
});

function checkTelf(telf) {

  var expresion_regular_telf;

  expresion_regular_telf = /^\d{9}$/;
  if (($('#inputTelefono').val().length > 0)) {
    $('#errlabelTelefono').show();
    if (expresion_regular_telf.test(telf) == true) {
      $('#errlabelTelefono').html('Teléfono correcto');
      $('#submitRegistro').removeAttr("disabled");
      $('#errlabelTelefono').addClass('inputCorrecto');
      $('#errlabelTelefono').removeClass('inputIncorrecto');
    } else {
      $('#errlabelTelefono').html('Teléfono erroneo, formato no válido');
      $('#submitRegistro').attr("disabled", true);
      $('#errlabelTelefono').removeClass('inputCorrecto');
      $('#errlabelTelefono').addClass('inputIncorrecto');
    }
  } else {
    $('#errlabelTelefono').hide();
  }
}

$('#inputRepitePassword').bind('input propertychange', function () {
  if (($('#inputRepitePassword').val().length >= 0)) {
    checkPasswd();
  }
});

function checkPasswd() {

  if (($('#inputRepitePassword').val().length > 0)) {
    $('#errlabelRepitePassword').show();
    if (($('#inputNuevoPassword').val()) === ($('#inputRepitePassword').val())) {
      $('#errlabelRepitePassword').html('Las contraseñas coinciden');
      $('#submitRegistro').removeAttr("disabled");
      $('#errlabelRepitePassword').addClass('inputCorrecto');
      $('#errlabelRepitePassword').removeClass('inputIncorrecto');
    } else {
      $('#errlabelRepitePassword').html('Las contraseñas no coinciden');
      $('#submitRegistro').attr("disabled", true);
      $('#errlabelRepitePassword').removeClass('inputCorrecto');
      $('#errlabelRepitePassword').addClass('inputIncorrecto');
    }
  } else {
    $('#errlabelRepitePassword').hide();
  }
}

function checkInputsVacios() {
  var check = true;

  $('#inputNombre').bind('input propertychange', function () {
    if (($('#inputNombre').val().length = 0)) {
      check = false;
    } else {
      check = true;
    }
  });
  $('#inputApellidos').bind('input propertychange', function () {
    if (($('#inputApellidos').val().length = 0)) {
      check = false;
    } else {
      check = true;
    }
  });
  $('#inputDNI').bind('input propertychange', function () {
    if (($('#inputDNI').val().length = 0)) {
      check = false;
    } else {
      check = true;
    }
  });
  $('#inputMail').bind('input propertychange', function () {
    if (($('#inputMail').val().length = 0)) {
      check = false;
    } else {
      check = true;
    }
  });
  $('#inputTelefono').bind('input propertychange', function () {
    if (($('#inputTelefono').val().length = 0)) {
      check = false;
    } else {
      check = true;
    }
  });
  $('#inputDireccion').bind('input propertychange', function () {
    if (($('#inputDireccion').val().length = 0)) {
      check = false;
    } else {
      check = true;
    }
  });
  $('#inputNuevoAlias').bind('input propertychange', function () {
    if (($('#inputNuevoAlias').val().length = 0)) {
      check = false;
    } else {
      check = true;
    }
  });
  $('#inputNuevoPassword').bind('input propertychange', function () {
    if (($('#inputNuevoPassword').val().length = 0)) {
      check = false;
    } else {
      check = true;
    }
  });
  $('#inputRepitePassword').bind('input propertychange', function () {
    if (($('#inputRepitePassword').val().length = 0)) {
      check = false;
    } else {
      check = true;
    }
  });

  if (check) {
    $('#submitRegistro').attr("disabled", true);
  } else {
    $('#submitRegistro').removeAttr("disabled");
  }
}