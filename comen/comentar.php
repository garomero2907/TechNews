<?php 

include("comen/database.php");

if (isset($_POST['comentar'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['mensaje']) >= 1) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $mensaje = trim($_POST['mensaje']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO comen(nombre,email,mensaje,fecha_reg) VALUES ('$name','$email','$mensaje','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Tú mensaje ha sido enviado!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>