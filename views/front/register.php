<?php include ('templates/head_register.php'); ?>
<fieldset id="fieldset">	
	<p id="pr">NOMBRE</p>
	<input id="inputre" type="text" name="nombre" required> 
	<p id="pr">APELLIDOS</p>
	<input id="inputre" type="text" name="apellido" required> 
	<p id="pr">CORREO</p>
	<input id="inputre" type="email" name="correo" required> 
	<p id="pr">GENERO</p>
	<select id="inputre" name="genero" required> 
		<option>--SELECCIONAR--</option>
		<option>HOMBRE</option>
		<option>MUJER</option>
		<option>OTRO</option>
	</select> 
	<p id="pr">TIPO DE DOCUMENTO</p>
	<select id="inputre" name="t_d" required> 
		<option>--SELECCIONAR--</option>
		<option>CEDULA DE CIUDADANIA</option>
		<option>TARJETA DE IDENTIDAD</option>
		<option>CEDULA DE EXTRANJERIA</option>
		<option>PASAPORTE</option>
		<option>OTROS</option>
	</select>
	<p id="pr">NUMERO DE DOCUMENTO</p>
	<input id="inputre" type="text" name="numero_doc" required> 
	<p id="pr">NUMERO DE CELULAR</p>
	<input id="inputre" type="text" name="numero_cel" required> 
	<p id="pr">NUMERO DE TELEFONO</p>
	<input id="inputre" type="text" name="numero_tel" required> 
	<p id="pr">TIPO DE USUARIO</p> 
	<select id="inputre" required> 
		<option>--SELECCIONAR--</option>
		<option>APRENDIZ</option>
		<option>ASPIRANTE</option>
		<option>USUARIO</option>
		<option>INSTRUCTOR</option>
	</select>
	<p id="pr">PAIS</p>
	<select id="inputre" required>
		<option>--SELECCIONAR--</option>
		<option>Bogota</option>
	</select>
	<p id="pr">DEPARTAMENTO</p>
	<select id="inputre" required> 
		<option>--SELECCIONAR--</option>
		<option>Antioquia</option>
	</select>
	<p id="pr">CIUDAD</p>
	<select id="inputre" required> 
		<option>--SELECCIONAR--</option>
		<option>Medellin</option>
	</select>
	<p id="pr">COMUNA</p>
	<select id="inputre" required> 
		<option>--SELECCIONAR--</option>
		<option>comuna 5-Castilla</option>
	</select>
	<p id="pr">CORREGIMIENTO</p>
	<select id="inputre" required> 
		<option>--SELECCIONAR--</option>
		<option>Altavista</option>
	</select>
	<p id="pr">VEREDA</p>
	<select id="inputre" required> 
		<option>--SELECCIONAR--</option>
		<option>Santa Elena</option>
	</select>
	<p id="pr">BARRIO</p>
	<select id="inputre" required> 
		<option>--SELECCIONAR--</option>
		<option>Toscana</option>
	</select>
	<form name="register" method="post">

	<p id="pr">CONTRASEÑA</p>
	<input id="inputre" type="password" name="password" id="password" place[]holder="ingresar contraseña.."
	pattern="^(?=.*\d)(?=.*\[\u002-\u002b-\u003c-\u0040])(?=.*\[A-Z])(?=.*\[a-z])\S{8,16}$"
	onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Debe contener entre 8 y 16 caracteres (digitos, minusculas, mayusculas y simbolos)' : ''); if(this.checkValidity()) form.confirm_password.pattern = this.value;" required> 
	<p id="pr">CONFIRMAR CONTRASEÑA</p>
	<input id="inputre" type="password" name="confirm_password" id="confirm_password" place[]holder="ingresar contraseña.." pattern="^(?=.*\d)(?=.*\[\u002-\u002b-\u003c-\u0040])(?=.*\[A-Z])(?=.*\[a-z])\S{8,16}$"
	onchange="this.setCustomValidity(this.validity.patternMismatch ? 'por favor,ingresa la misma contraseña de arriba)' : '');" required> 

	<p><input class="submit" type="submit" name="btn_registrarse"></p>
	<?php 

	if(isset($_POST['btn_registrarse'])){

	$password = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];
	if($password == $confirm_password){
		header('http://localhost:8085/paginasw/views/front/iniciar.php');
	}
	}
	?>
    <form>
</fieldset>
<?php include ('templates/foot.php'); ?>