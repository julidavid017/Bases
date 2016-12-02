function mostrarInf(){
	document.getElementById("tabla_1").style="display: ;"
	var tblBody = document.getElementById("tinfrac");

	for (var i = 0; i < infraccion.length; i++) {
	var hilera = document.createElement("tr");
	 
		for (var j = 0; j < 8; j++) {
			var celda = document.createElement("td");
			var textoCelda = document.createTextNode(infraccion[i][j]);
			celda.appendChild(textoCelda);
			hilera.appendChild(celda);
		}
		tblBody.appendChild(hilera);
	}
}

function mostrarProp(){
	document.getElementById("tabla_2").style="display: ;"
	var tblBody = document.getElementById("tprop");

	for (var i = 0; i < propietario.length; i++) {
	var hilera = document.createElement("tr");
	 
		for (var j = 0; j < 4; j++) {
			var celda = document.createElement("td");
			var textoCelda = document.createTextNode(propietario[i][j]);
			celda.appendChild(textoCelda);
			hilera.appendChild(celda);
		}
		tblBody.appendChild(hilera);
	}
}