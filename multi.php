<?php
	if($_POST)
	{	
		$destino = "software.realize.101@gmail.com";
		$num1 = $_POST['numero1'];
		$num2 = $_POST['numero2'];
		$multi = $num1 * $num2;
		$direccion = "https://actividadweb.000webhostapp.com/";
		$asunto = "Julio Adrian Leon de la Cruz";
		$repositori ="https://github.com/AdrianLyon/actividad.git";
		$contenido = "La Multiplicacion de ".$num1." y ".$num2." es ".$multi." \nla direccion de correo es: ".$direccion." \nel repositori es: ".$repositori." \nAsunto: ".$asunto." \nSaludos "; 
		
		mail($destino,"Contacto",$contenido);
		header("Location:gracias.html");
	}


	

?>