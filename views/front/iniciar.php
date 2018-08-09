<?php include ('templates/head_inicio.php'); ?>
<fieldset id="fieldset">	
	<form name="login" method="post" action="register.php">
	<p id="pr">CORREO</p>
	<input id="inputre" type="email" name="correo">
	<p id="pr">CONTRASEÑA</p>
	<input id="inputre" type="password" name="password" id="password" place[]holder="ingresar contraseña.."
	pattern="^(?=.*\d)(?=.*\[\u002-\u002b-\u003c-\u0040])(?=.*\[A-Z])(?=.*\[a-z])\S{8,16}$"
	onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Debe contener entre 8 y 16 caracteres (digitos, minusculas, mayusculas y simbolos)' : ''); if(this.checkValidity()) form.confirm_password.pattern = this.value;" required>
	<br>
     <p><input class="submit" type="submit" name="registrarse" href="http://localhost:8085/paginasw/"></p>
     </form>
</fieldset>
<?php include ('templates/foot.php'); ?>