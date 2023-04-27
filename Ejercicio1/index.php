<!DOCTYPE html>
<html>
<head>
	<title>Menú con PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<center>
    <div class="divmenu">
	<h1>Operaciones Matematicas</h1>
	<form action="acciones.php" method="post">
		<label>Ingrese su nombre:</label>
		<input type="text" name="nombre" required pattern="^[a-zA-Z]+$"><br>
		<label>Seleccione una operación:</label><br>
		<select name="opcion" required>
        <option value="">Seleccione...</option>
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select><br>
		<label>Ingrese el primer número:</label>
		<input type="text" name="numero1" required><br>
		<label>Ingrese el segundo número:</label>
		<input type="text" name="numero2" required><br>
		<input type="submit" value="Enviar" id="boton">
	</form>
</div>
</center>
</body>
</html>
