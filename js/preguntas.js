function Respuesta(opcion, correcto, id) {
	if (opcion==correcto)
	{
  	window.location.assign("correcto.php?id=" + id + "?correcto");
  	}
else
	{
	window.location.assign("incorrecto.php?id=" + id + "?incorrecto");
	}
}
