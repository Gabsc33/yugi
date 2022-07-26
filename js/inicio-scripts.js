$(document).ready(function(){
	$("#idbusqueda").keyup(function(e){
		console.log(e.keyCode);
		if(e.keyCode==13){
			search_producto();
		}
	});
});
function search_producto(){
	window.location.href="busqueda.php?text="+$("#idbusqueda").val();
}