<?php include 'header.php'; ?>
<?php require_once("conexion.php"); ?>
	<article>
		<img src="img/infraccion.png">
		<div id="form_mod">
			<form method="POST" id="informa">
				<input type="text" name="nit" id="nitinfractor" placeholder="NIT Infractor">
				<input list="items" name="item_mod" placeholder="Campo a modificar">
				<datalist id="items">
					<option value="Valor_Infraccion"></option>
					<option value="Direccion_calle"></option>
					<option value="Direccion_numero"></option>
					<option value="Direccion_ciudad"></option>
					<option value="Direccion_departamento"></option>
				</datalist>
				<input type="text" name="nuevo" placeholder="Nuevo valor" id="nuevo">
				<input type="submit" value="Modificar" name="modificar" id="btn">
			</form>
		</div>
	</article>
	<?php
		$sql = "SELECT nombre_ciudad FROM ciudad";
		$result = mysql_query($sql);
		//echo $result? "lel":"lol";
		$i = 0;
		while($rows= mysql_fetch_array($result)){
			$ciudades[$i] = $rows['nombre_ciudad'];
			$i++;
		}
		
		$sql = "SELECT nombre_departamento FROM departamento";
		$result = mysql_query($sql);
		//echo $result? "lel":"lol";
		$i = 0;
		while($rows= mysql_fetch_array($result)){
			$departamentos[$i] = $rows['nombre_departamento'];
			$i++;
		}
	
		if(isset($_POST['modificar'])){
			$nuevoValor = $_POST['nuevo'];
			$nit = $_POST['nit'];
			if($_POST['item_mod'] == "Valor_Infraccion"){
				$sql = "UPDATE infraccion SET importe_infraccion = '$nuevoValor' WHERE nit_propietario = '$nit'";
				$result = mysql_query($sql);
			}else if($_POST['item_mod'] == "Direccion_calle"){
				$sql = "UPDATE domicilio SET calle_domicilio = '$nuevoValor' WHERE nit_propietario = '$nit'";
				$result = mysql_query($sql);
			}else if($_POST['item_mod'] == "Direccion_numero"){
				$sql = "UPDATE domicilio SET numero_domicilio = '$nuevoValor' WHERE nit_propietario = '$nit'";
				$result = mysql_query($sql);
			}else if($_POST['item_mod'] == "Direccion_ciudad"){
				if(in_array($nuevoValor, $ciudades)){
					$sql = "SELECT cod_ciudad FROM ciudad WHERE nombre_ciudad = '$nuevoValor'";
					$result = mysql_query($sql);
					$rows= mysql_fetch_array($result);	
					$id_ciu=$rows['cod_ciudad'];
					$sql = "UPDATE domicilio SET cod_ciudad = '$id_ciu' WHERE nit_propietario = '$nit'";
					$result = mysql_query($sql);
				}else{
					$sql = "INSERT INTO ciudad VALUES ('NULL', '$nuevoValor')";
					$result = mysql_query($sql);
					$id_ciu = mysql_insert_id();
					$sql = "UPDATE domicilio SET cod_ciudad = '$id_ciu' WHERE nit_propietario = '$nit'";
					$result = mysql_query($sql);
				}
			}else if($_POST['item_mod'] == "Direccion_departamento"){
				if(in_array($nuevoValor, $departamentos)){
					$sql = "SELECT cod_departamento FROM departamento WHERE nombre_departamento = '$nuevoValor'";
					$result = mysql_query($sql);
					$rows= mysql_fetch_array($result);	
					$id_dep=$rows['cod_departamento'];
					$sql = "UPDATE domicilio SET cod_departamento = '$id_dep' WHERE nit_propietario = '$nit'";
					$result = mysql_query($sql);
				}else{
					$sql = "INSERT INTO departamento VALUES ('NULL', '$nuevoValor')";
					$result = mysql_query($sql);
					$id_dep = mysql_insert_id();
					$sql = "UPDATE domicilio SET cod_departamento = '$id_dep' WHERE nit_propietario = '$nit'";
					$result = mysql_query($sql);
				}
			}
		}
	?>
<?php include 'footer.php'; ?>