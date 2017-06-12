

		

		<form action="nuevo_cromo.php" method="post">
			<label>Nombre</label>
			<input type="text" name="nombre">
			<select name="publicacion_id">
			<option value="1">Adrenalyn BBVA 2010</option>
			<option value="2">Adrenalyn BBVA 2011</option>
			<option value="3">Adrenalyn BBVA 2012</option>
			<option value="4">Adrenalyn BBVA 2013</option>
			<option value="5">Adrenalyn BBVA 2014</option>
			<option value="6">Adrenalyn BBVA 2015</option>
			</select>
			<select name="equipo_id">
			<option value="1">Athletic club de Bilbao</option>
			<option value="2">Real Madrid</option>
			<option value="3">F.C. Barcelona</option>
			<option value="4">Atletico de Madrid</option>
			<option value="5">Sevilla</option>
			<option value="6">Almeria</option>
			<option value="7">Alaves</option>
			</select>
			<label>Cantidad</label>
			<input type="number" name="cantidad">
			<label>Precio</label>
			<input type="number" name="precio">
			<input type="submit" value="enviar">
		</form>

