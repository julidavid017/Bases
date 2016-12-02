<?php include 'header.php'; ?>
<?php require_once("conexion.php"); ?>
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
	
	$sql = "SELECT nombre_marca FROM marca";
	$result = mysql_query($sql);
	//echo $result? "lel":"lol";
	$i = 0;
	while($rows= mysql_fetch_array($result)){
		$marcas[$i] = $rows['nombre_marca'];
		$i++;
	}
	
	$sql = "SELECT nombre_modelo FROM modelo";
	$result = mysql_query($sql);
	//echo $result? "lel":"lol";
	$i = 0;
	while($rows= mysql_fetch_array($result)){
		$modelos[$i] = $rows['nombre_modelo'];
		$i++;
	}
?>
	<script>
	var ciudades = <?php echo json_encode($ciudades); ?>;
	var departamentos = <?php echo json_encode($departamentos); ?>;
	var marcas = <?php echo json_encode($marcas); ?>;
	var modelos = <?php echo json_encode($modelos); ?>;
	</script>
	<article>
		<img src="img/infraccion.png">
		<div id="botones"><button onclick="addInfraccion()">Infraccion</button><button onclick="addMatricula()">Matricula</button></div>
		<div id="form">
			<form method="POST" action="envioMatricula.php" id="informa"></form>
			<form method="POST" action="envioInfraccion.php" id="inforin"></form>
			<form method="POST" action="envioInfraccionVeh.php" id="inforinveh"></form>
		</div>
	</article>
<?php include 'footer.php'; ?>