var tiempo_txt = document.getElementById('seg_espera');
var info = document.getElementById('texto_pregunta');
var contador = 59;
var btn = document.getElementById('btn');
var reloj;

reloj = setInterval(function() {
  tiempo_txt.innerHTML = contador;
  contador--;
}, 1000);

setTimeout(detenerse, 61000);

function detenerse(){
  clearInterval(reloj);
  info.style.visibility = "hidden";
  btn.style.opacity = 1;
}
