<?php include 'header.php'; ?>
<?php require_once("conexion.php"); ?>

	<article>
		<img src="img/infraccion.png">
		<div id="con_resul">
		<table style="display:none;" id="tabla_1">
			<tbody id="tinfrac">
			<tr id="cabecera">
				<td>código</td>
				<td>Fecha</td>
				<td>Valor</td>
				<td>NIT infractor</td>
				<td>Matricula vehiculo</td>
				<td>Lugar</td>
				<td>Registro Agente</td>
				<td>Articulo inflingido</td>
			</tr>
			</tbody>
		</table>
		<table style="display:none;" id="tabla_2">
			<tbody id="tprop">
			<tr id="cabecera">
				<td>NIT</td>
				<td>Nombre</td>
				<td>Apellidos</td>
				<td>Fecha Nacimiento</td>
			</tr>
			</tbody>
		</table>
		</div>
		<div id="form">
			<form method="POST" id="consulta">
				<input type="text" name="nit" placeholder="NIT">
				<input type="submit" name="con_infr" value="Infraccion" id="btn">
				<input type="submit" name="con_datos" value="Datos" id="btn">
			</form>
		</div>
	</article>

	<?php
		if(isset($_POST['con_infr'])){
			$nit = $_POST['nit'];
			$sql = "SELECT * FROM infraccion WHERE nit_propietario = '$nit'";
			$result = mysql_query($sql);
			$i = 0;
			while($rows= mysql_fetch_array($result)){
				$infraccion[$i] = $rows;
				$i++;
			}
	?>
	<script>var infraccion = <?php echo json_encode($infraccion); ?>;</script>
	<?php
		echo '<script>mostrarInf();</script>';
		}else if(isset($_POST['con_datos'])){
			$nit = $_POST['nit'];
			$sql = "SELECT * FROM propietario WHERE nit_propietario = '$nit'";
			$result = mysql_query($sql);
			$i = 0;
			while($rows= mysql_fetch_array($result)){
				$infraccion[$i] = $rows;
				$i++;
			}
	?>
	<script>var propietario = <?php echo json_encode($infraccion); ?>;</script>
	<?php
		echo '<script>mostrarProp();</script>';
		}
	?>
	
<?php
	include 'footer.php';
?>
