document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, {});


  console.log({
    estado: estado,
    mensaje: mensaje
  });

  if (estado != '') {
    console.log('hola');
    if (estado == '1') {
      console.log('1');
      toast(mensaje);
    } else {
      toastError(mensaje);
    }
  }

});

function toast(mensaje) {
  M.toast({ html: mensaje, classes: 'rounded green darken-3 white-text' });
}

function toastError(mensaje) {
  M.toast({ html: mensaje, classes: 'rounded red darken-3 white-text' });
}