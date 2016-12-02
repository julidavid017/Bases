<?php include 'header.php'; ?>
<?php require_once("conexion.php"); ?>
	<article>
		<img src="img/infraccion.png">
		<div id="form_mod">
			<form method="POST" id="informa">
				<input type="text" name="nit" id="nitinfractor" placeholder="NIT Infractor">
				<input type="date" name="fecha" id="nitinfractor" placeholder="NIT Infractor">
				<input type="submit" value="Eliminar" name="eliminar" id="btn">
			</form>
		</div>
	</article>
	<?php
		if(isset($_POST['eliminar'])){
			$nit = $_POST['nit'];
			$fecha = $_POST['fecha'];
			$sql = "DELETE FROM infraccion WHERE (nit_propietario = '$nit' AND fecha_infraccion = '$fecha')";
			$result = mysql_query($sql);
			echo $result? '<script>alert("Eliminado con éxito");</script>' : '<script>alert("No se pudo eliminar");</script>';
		}
	?>
<?php include 'footer.php'; ?>