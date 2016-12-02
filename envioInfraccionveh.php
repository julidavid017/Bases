<?php
	require_once("conexion.php");
	
	$valorInf = $_POST['valorinf'];
	$carretera = $_POST['carretera'];
	$kilometro = $_POST['kilometro'];
	$direccion = $_POST['direccion'];
	$regAgent = $_POST['regagente'];
	$codArt = $_POST['codigoart'];
	$nit = $_POST['nit'];
	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$fechaNac = $_POST['fechanac'];
	$calle = $_POST['calle'];
	$numero = $_POST['numero'];
	$ciudad = $_POST['ciudad'];
	$departamento = $_POST['departamento'];
	$marcaveh = $_POST['marcaveh'];
	$modeloveh = $_POST['modeloveh'];
	$matriculaveh = $_POST['matriculaveh'];
	
	$sql = "SELECT nombre_ciudad FROM ciudad";
		$result = mysql_query($sql);
		$i = 0;
		while($rows= mysql_fetch_array($result)){
			$ciudades[$i] = $rows['nombre_ciudad'];
			$i++;
		}
		
		$sql = "SELECT nombre_departamento FROM departamento";
		$result = mysql_query($sql);
		$i = 0;
		while($rows= mysql_fetch_array($result)){
			$departamentos[$i] = $rows['nombre_departamento'];
			$i++;
		}

	$sql = "INSERT INTO propietario VALUES ('$nit', '$nombre', '$apellidos', '$fechaNac')";
	$result = mysql_query($sql);
	
	if(in_array($ciudad, $ciudades)){
		$sql = "SELECT cod_ciudad FROM ciudad WHERE nombre_ciudad = '$ciudad'";
		$result = mysql_query($sql);
		$rows= mysql_fetch_array($result);	
		$id_ciu=$rows['cod_ciudad'];
	}else{
		$sql = "INSERT INTO ciudad VALUES ('NULL', '$ciudad')";
		$result = mysql_query($sql);
		$id_ciu = mysql_insert_id();
	}
	
	if(in_array($departamento, $departamentos)){
		$sql = "SELECT cod_departamento FROM departamento WHERE nombre_departamento = '$departamento'";
		$result = mysql_query($sql);
		$rows= mysql_fetch_array($result);	
		$id_dep=$rows['cod_departamento'];
	}else{
		$sql = "INSERT INTO departamento VALUES ('NULL', '$departamento')";
		$result = mysql_query($sql);
		$id_dep = mysql_insert_id();
	}
	
	$sql = "INSERT INTO domicilio VALUES ('NULL', '$calle', '$numero', '$id_ciu', '$id_dep', '$nit')";
	$result = mysql_query($sql);
	
	$sql = "INSERT INTO lugar VALUES ('NULL', '$carretera', '$kilometro', '$direccion')";
	$result = mysql_query($sql);
	
	$sql = "SELECT cod_lugar FROM lugar WHERE (carretera_lugar = '$carretera' AND kilometro_lugar = '$kilometro' AND direccion_lugar = '$direccion')";
	$result = mysql_query($sql);
	$rows= mysql_fetch_array($result);	
	$id_lug=$rows['cod_lugar'];
	
	$sql = "SELECT cod_marca FROM marca WHERE nombre_marca = '$marcaveh'";
	$result = mysql_query($sql);
	$rows= mysql_fetch_array($result);	
	$id_mar=$rows['cod_marca'];
	
	$sql = "SELECT cod_modelo FROM modelo WHERE nombre_modelo = '$modeloveh'";
	$result = mysql_query($sql);
	$rows= mysql_fetch_array($result);	
	$id_mod=$rows['cod_modelo'];
	
	$sql = "INSERT INTO matricula VALUES(
			'$matriculaveh', CURDATE(), '$id_mar', '$nit', '$id_mod' 
			)";
	$result = mysql_query($sql);
	
	$sql = "INSERT INTO infraccion VALUES(
			'NULL', CURDATE(), '$valorInf', '$nit', '$matriculaveh', '$id_lug', '$regAgent', '$codArt'
			)";
	$result = mysql_query($sql);
	if($result){
		header('Refresh: 3; URL = index.php');
		echo '<p style="font-size: 20px;">Infraccion realizada con éxito</p>';
	}else{
		echo "Error";
	}
?>