window.onload = function () {
    calcularProyecto();
};

function calcularTotal() {
    //console.log("Calculando el total...");
  var servicios = parseFloat(document.getElementById('servicios').value) || 0;
  var alquiler = parseFloat(document.getElementById('alquiler').value) || 0;
  var alimentos = parseFloat(document.getElementById('alimentos').value) || 0;
  var educacion = parseFloat(document.getElementById('educacion').value) || 0;
  var transporte = parseFloat(document.getElementById('transporte').value) || 0;
  var impuestos = parseFloat(document.getElementById('impuestos').value) || 0;
  var ocio = parseFloat(document.getElementById('ocio').value) || 0;
  var otros = parseFloat(document.getElementById('otros').value) || 0;

  var horasmes = parseFloat(document.getElementById('horasmes').value) || 0;

  var total = servicios + alquiler + alimentos + educacion + transporte + impuestos + ocio + otros;
  document.getElementById('total').value = total.toFixed(0);

  var valorhora = total/horasmes;
  document.getElementById('valorhora').value = valorhora.toFixed(0);

  document.getElementById('total').style.color = 'grey';
  document.getElementById('valorhora').style.color = 'grey';
}