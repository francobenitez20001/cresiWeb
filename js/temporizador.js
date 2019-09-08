let reloj;
let contador = 14;
let c = document.getElementById('contador');

function detenerse(id) {
  clearInterval(reloj);
  c.style.visibility = "hidden";
  window.location.assign("incorrecto.php?id=" + id);
}

setTimeout(detenerse, 16000);

reloj = setInterval(function() {
  c.innerHTML = contador;
  contador--;
}, 1000);
