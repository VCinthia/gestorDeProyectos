function closeAlert(alertBox) {
  alertBox.parentNode.style.display = 'none';
}

function setFormMethod(method) {
  var form = document.getElementById('login-register-form');
  form.method = method;
}

