var btn_menu = document.getElementById('icon-menu');
var nav =  document.getElementById('nav')
btn_menu.addEventListener("click", mostrar);

function mostrar(){
  nav.classList.toggle('mostrar');
}
