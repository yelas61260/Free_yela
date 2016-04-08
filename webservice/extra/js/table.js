$(document).on("ready", function(){
	$("#add").on("click", agregarFia);
});
function agregarFia(){
	$("#tableMenu tbody").append("<tr><td>Contenido</td><td>Contenido</td><td>Contenido</td><td>Contenido</td></tr>");
}