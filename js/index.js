document.addEventListener('DOMContentLoaded', function () {
  
  $('.modal').modal();
  console.log("he llegado");

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

function eliminar(_id, _nombre){
  const btnEliminar = $('#mb_btn_eliminar');
  const nombre = $('#mb_nombre');

  nombre.html(_nombre);
  btnEliminar.attr('href',`eliminar_empleado.php?id=${_id}`);
  
}

function toast(mensaje) {
  M.toast({ html: mensaje, classes: 'rounded green darken-3 white-text' });
}

function toastError(mensaje) {
  M.toast({ html: mensaje, classes: 'rounded red darken-3 white-text' });
}