function addInfraccion(){
	document.getElementById("botones").innerHTML = '<button onclick="addVehiculo()">Insertar Vehiculo</button>';
	var inform = document.getElementById("inforin");
	var input;
	var elementos = ["ValorInf", "Carretera", "Kilometro", "Direccion", "RegAgente", "CodigoArt",
					"NIT", "Nombre", "Apellidos", "FechaNac", "Calle", "Numero", "Ciudad", "Departamento"
					];
	
	for(var i = 0; i < elementos.length-2; i++){
		input = document.createElement('input');
		//input.placeholder = elementos[i];
		input.name = elementos[i].toLowerCase();
		if(elementos[i]=="FechaNac"){input.type = "date"; input.placeholder = "Fecha de Nacimiento";}else{input.type = "text";}
		if(elementos[i]=="ValorInf"){
			input.placeholder = "Valor Infraccion"
			}else if(elementos[i]=="RegAgente"){
				input.placeholder = "Registro Agente";
				}else if(elementos[i]=="CodigoArt"){
				input.placeholder = "Codigo Articulo Vulnerado";
				}else{
					input.placeholder = elementos[i];
				}
		inform.appendChild(input);
	}
	
	var list = document.createElement("span");
	list.id = "list";
	
	inform.appendChild(list);
	
	var inicio = '<input list="'+elementos[elementos.length-2]+'" placeholder="'+elementos[elementos.length-2]+'" name="'+elementos[elementos.length-2].toLowerCase()+'">';
	var indata = '<datalist id="'+elementos[elementos.length-2]+'">';
	var opciones = '';
	for(var i=0; i < ciudades.length;i++){
		opciones += '<option value="'+ciudades[i]+'">';
	}
	var findata = '</datalist>';
	var inicio2 = '<input list="'+elementos[elementos.length-1]+'" placeholder="'+elementos[elementos.length-1]+'" name="'+elementos[elementos.length-1].toLowerCase()+'">';
	var indata2 = '<datalist id="'+elementos[elementos.length-1]+'">';
	var opciones2 = '';
	for(var i=0; i < departamentos.length;i++){
		opciones2 += '<option value="'+departamentos[i]+'">';
	}
	var findata2 = '</datalist>';
	
	var ciudad_departamento = inicio+indata+opciones+findata+inicio2+indata2+opciones2+findata2;
	
	list.innerHTML = ciudad_departamento;
	
	var btn_submit = document.createElement('input');
	btn_submit.type = "submit";
	btn_submit.value = "Agregar";
	btn_submit.id = "btn";
	btn_submit.name = "agregar";
	
	inform.appendChild(btn_submit);
}

function addVehiculo(){
	document.getElementById("botones").innerHTML = "";
	document.getElementById("inforin").innerHTML = "";
	var inform = document.getElementById("inforinveh");
	inform.innerHTML = "";
	var input;
	var elementos = ["ValorInf", "Carretera", "Kilometro", "Direccion", "RegAgente", "CodigoArt",
					"NIT", "Nombre", "Apellidos", "FechaNac", "Calle", "Numero", "Marca", "Modelo", "Ciudad", "Departamento"
					];
	
	for(var i = 0; i < elementos.length-4; i++){
		input = document.createElement('input');
		//input.placeholder = elementos[i];
		input.name = elementos[i].toLowerCase();
		if(elementos[i]=="FechaNac"){input.type = "date"; input.placeholder = "Fecha de Nacimiento";}else{input.type = "text";}
		if(elementos[i]=="ValorInf"){
			input.placeholder = "Valor Infraccion"
			}else if(elementos[i]=="RegAgente"){
				input.placeholder = "Registro Agente";
				}else if(elementos[i]=="CodigoArt"){
				input.placeholder = "Codigo Articulo Vulnerado";
				}else{
					input.placeholder = elementos[i];
				}
		inform.appendChild(input);
	}
	
	var list = document.createElement("span");
	list.id = "list";
	
	inform.appendChild(list);
	
	var inicio = '<input list="'+elementos[elementos.length-2]+'" placeholder="'+elementos[elementos.length-2]+'" name="'+elementos[elementos.length-2].toLowerCase()+'">';
	var indata = '<datalist id="'+elementos[elementos.length-2]+'">';
	var opciones = '';
	for(var i=0; i < ciudades.length;i++){
		opciones += '<option value="'+ciudades[i]+'">';
	}
	var findata = '</datalist>';
	var inicio2 = '<input list="'+elementos[elementos.length-1]+'" placeholder="'+elementos[elementos.length-1]+'" name="'+elementos[elementos.length-1].toLowerCase()+'">';
	var indata2 = '<datalist id="'+elementos[elementos.length-1]+'">';
	var opciones2 = '';
	for(var i=0; i < departamentos.length;i++){
		opciones2 += '<option value="'+departamentos[i]+'">';
	}
	var findata2 = '</datalist>';
	
	var ciudad_departamento = inicio+indata+opciones+findata+inicio2+indata2+opciones2+findata2;
	
	inicio = '<input list="'+elementos[elementos.length-4]+'" placeholder="'+elementos[elementos.length-4]+' vehiculo" name="'+elementos[elementos.length-4].toLowerCase()+'veh">';
	indata = '<datalist id="'+elementos[elementos.length-4]+'">';
	opciones = '';
	for(var i=0; i < marcas.length;i++){
		opciones += '<option value="'+marcas[i]+'">';
	}
	findata = '</datalist>';
	inicio2 = '<input list="'+elementos[elementos.length-3]+'" placeholder="'+elementos[elementos.length-3]+' vehiculo" name="'+elementos[elementos.length-3].toLowerCase()+'veh">';
	indata2 = '<datalist id="'+elementos[elementos.length-3]+'">';
	opciones2 = '';
	for(var i=0; i < modelos.length;i++){
		opciones2 += '<option value="'+modelos[i]+'">';
	}
	var findata2 = '</datalist>';
	
	var marca_modelo = inicio+indata+opciones+findata+inicio2+indata2+opciones2+findata2;
	
	list.innerHTML = ciudad_departamento + marca_modelo;
	
	input = document.createElement('input');
	input.placeholder = "Matricula vehiculo";
	input.name = "matriculaveh";
	inform.appendChild(input);
	
	var btn_submit = document.createElement('input');
	btn_submit.type = "submit";
	btn_submit.value = "Agregar";
	btn_submit.id = "btn";
	btn_submit.name = "agregar";
	
	inform.appendChild(btn_submit);
}

function addMatricula(){
	document.getElementById("botones").innerHTML = "";
	var inform = document.getElementById("informa");
	inform.innerHTML = "";
	var input;
	var elementos = ["NIT", "Nombre", "Apellidos", "FechaNac", "Calle", "Numero", "Marca", "Modelo", "Ciudad", "Departamento"];
	
	for(var i = 0; i < elementos.length-4; i++){
		input = document.createElement('input');
		input.placeholder = elementos[i];
		input.name = elementos[i].toLowerCase();
		if(elementos[i]=="FechaNac"){input.type = "date"; input.placeholder = "Fecha de Nacimiento";}else{input.type = "text";}
		inform.appendChild(input);
	}
	
	var list = document.createElement("span");
	list.id = "list";
	
	inform.appendChild(list);
	
	var inicio = '<input list="'+elementos[elementos.length-2]+'" placeholder="'+elementos[elementos.length-2]+'" name="'+elementos[elementos.length-2].toLowerCase()+'">';
	var indata = '<datalist id="'+elementos[elementos.length-2]+'">';
	var opciones = '';
	for(var i=0; i < ciudades.length;i++){
		opciones += '<option value="'+ciudades[i]+'">';
	}
	var findata = '</datalist>';
	var inicio2 = '<input list="'+elementos[elementos.length-1]+'" placeholder="'+elementos[elementos.length-1]+'" name="'+elementos[elementos.length-1].toLowerCase()+'">';
	var indata2 = '<datalist id="'+elementos[elementos.length-1]+'">';
	var opciones2 = '';
	for(var i=0; i < departamentos.length;i++){
		opciones2 += '<option value="'+departamentos[i]+'">';
	}
	var findata2 = '</datalist>';
	
	var ciudad_departamento = inicio+indata+opciones+findata+inicio2+indata2+opciones2+findata2;
	
	inicio = '<input list="'+elementos[elementos.length-4]+'" placeholder="'+elementos[elementos.length-4]+' vehiculo" name="'+elementos[elementos.length-4].toLowerCase()+'veh">';
	indata = '<datalist id="'+elementos[elementos.length-4]+'">';
	opciones = '';
	for(var i=0; i < marcas.length;i++){
		opciones += '<option value="'+marcas[i]+'">';
	}
	findata = '</datalist>';
	inicio2 = '<input list="'+elementos[elementos.length-3]+'" placeholder="'+elementos[elementos.length-3]+' vehiculo" name="'+elementos[elementos.length-3].toLowerCase()+'veh">';
	indata2 = '<datalist id="'+elementos[elementos.length-3]+'">';
	opciones2 = '';
	for(var i=0; i < modelos.length;i++){
		opciones2 += '<option value="'+modelos[i]+'">';
	}
	var findata2 = '</datalist>';
	
	var marca_modelo = inicio+indata+opciones+findata+inicio2+indata2+opciones2+findata2;
	
	list.innerHTML = ciudad_departamento + marca_modelo;
		
	var btn_submit = document.createElement('input');
	btn_submit.type = "submit";
	btn_submit.value = "Agregar";
	btn_submit.id = "btn";
	btn_submit.name = "agregar";
	
	inform.appendChild(btn_submit);
}