window.onload = function () {
  calcularProyecto();
};

function calcularProyecto() {
  var carga_horaria = parseFloat(document.getElementById('carga_horaria').value) || 0;
  var valorhora = parseFloat(document.getElementById('valorhora').value) || 0;

  var valor_estimativo = carga_horaria * valorhora;
  document.getElementById('valor_estimativo').value = valor_estimativo.toFixed(0);

  document.getElementById('valorhora').style.color = 'grey';
  document.getElementById('valor_estimativo').style.color = 'grey';
}
