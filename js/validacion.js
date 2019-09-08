var boton = document.getElementById('btn-confirmar'),
    user = document.getElementById('input_User'),
    pw = document.getElementById('input_Password'),
    email = document.getElementById('input_Email');

boton.addEventListener("click", function validacion(){
  if (user.value == "" ||  pw.value == "" || email.value == "") {
    window.location.assign("login.html");
    alert("Completa todos los campos por favor.");
  }
})
