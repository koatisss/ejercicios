

<form action="insertar_publicacion.php" method="post">
        <label>Publicacion</label>
        <input type="text" name="nombre">
	<label>Temporada</label>
	<input type="text" name="anyo">
	<select name="editorial_id">
        <option value="1">Panini</option>
	<option value="2">Mundicromo</option>
	<option value="3">Topps</option>
	<option value="4">As</option>
	<option value="5">Marca</option>
	</select>
	<select name="categoria_publicacion_id">
        <option value="1">Periodico</option>
	<option value="2">Album</option>
	<option value="3">Cromo</option>
	<option value="4">Revista</option>
	</select>
        <input type="submit" value="enviar">
</form>


