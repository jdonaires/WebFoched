function openCity(evt, cityName) {
  var i, tabcontent, tablinks;

  //Oculta todos los formularios con nombre de Clase "tabcontent".
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  //Desmarca los botones con clase tablinks.
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  //Hace visible el formulario con el id enviado por el botón.
  document.getElementById(cityName).style.display = "block";
  document.getElementsByClassName('content-form')[0].style.display = 'block';


  //Marca el botón presionado.
  evt.currentTarget.className += " active";

  /******************************
  Autor: Ever Néstarez Martinez
  ******************************/
}

function validarSoloNumeros(e) {
  tecla = e.keyCode || e.which;

  //Tecla de retroceso para borrar, siempre la permite
  if (tecla == 8) {
    return true;
  }

  // Patron de entrada, en este caso solo acepta numeros
  patron = /[0-9]/;
  tecla_final = String.fromCharCode(tecla);
  return patron.test(tecla_final);
}

function validarSoloNumerosDecimales(e) {
  tecla = e.keyCode || e.which;

  //Tecla de retroceso para borrar, siempre la permite
  if (tecla == 8) {
    return true;
  }

  // Patron de entrada, en este caso solo acepta numeros
  patron = /[0-9-.]/;
  tecla_final = String.fromCharCode(tecla);
  return patron.test(tecla_final);
}

function validarSoloLetras(e) {
  tecla = e.keyCode || e.which;

  //Tecla de retroceso para borrar, siempre la permite
  if (tecla == 8 || tecla == 32) {
    return true;
  }

  // Patron de entrada, en este caso solo acepta letras
  patron = /[A-z]/;
  tecla_final = String.fromCharCode(tecla);
  return patron.test(tecla_final);
}