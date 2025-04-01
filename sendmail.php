<?php
if(isset($_POST['email'])){
		
		$the_name 		= $_POST['name'];
		$the_puesto 	= $_POST['puesto'];
		$the_lastn 		= $_POST['lastname'];
		$the_email 		= $_POST['email'];
		$the_phone 		= $_POST['phone'];
		$the_asunt		= $_POST['asunt'];
		$the_message 	= $_POST['message'];
		$the_corporative = $_POST['corporative'];
		$the_option 	= $_POST['options'];

		$nombre = "Contacto WEB SealQuality";

		$headers = "From: $nombre <contacto@sealquality.com.mx>\r\n"; //Quien envia?
        $headers .= "X-Mailer: PHP5\n";
        $headers .= 'MIME-Version: 1.0' . "\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; //
		

		//personalizar mi 2.plantilla
	$plantilla =file_get_contents("http://sealquality.com.mx/wp-content/themes/sealquality/p_contacto.html");
	$plantilla = str_replace("{{nombres}}", $the_name, $plantilla);
	$plantilla = str_replace("{{puestos}}", $the_puesto, $plantilla);
	$plantilla = str_replace("{{apellidos}}", $the_lastn, $plantilla);
	$plantilla = str_replace("{{correos}}", $the_email, $plantilla);
	$plantilla = str_replace("{{telefonos}}", $the_phone, $plantilla);
	$plantilla = str_replace("{{asuntos}}", $the_asunt, $plantilla);
	$plantilla = str_replace("{{mensajes}}", $the_message, $plantilla);
	$plantilla = str_replace("{{empresas}}", $the_corporative, $plantilla);
	$plantilla = str_replace("{{opciones}}", $the_option, $plantilla);
	
			
$send = mail("esaumunive@gmail.com,enrique.hernandez@sealquality.com.mx, lia.samay@hotmail.com ","contacto@sealquality.com.mx", $plantilla, $headers); 
	// var_dump($send);
						
	 if ($send){
	 		 header ("Location: http://sealquality.com.mx");
	 		}else{
			echo '<h3>Oops!</h3><div class="confirm">
					<p class="texterror">Error de conexión 	</p> <br> <a href="contacto.php"></a>
				  </div>'; 
	}		
}
?>