
<?php
include("conex.php");
  
$identificacion = $_POST['identificacion'];
	$nombres = $_POST['nombres'];
	$apellidos = $_POST['apellidos'];
	$programa = $_POST['programa'];
	$fecha_inicio = $_POST['fecha_inicio'];
	$fecha_final = $_POST['fecha_final'];

        
    $nombre_base = basename($_FILES["archivo"]["name"]);
    $nombre_final = $nombre_base;
    $ruta = "archivo/" . $nombre_final;

   		 $subirarchivo = move_uploaded_file($_FILES["archivo"]["tmp_name"], $ruta);
   
        
        $consulta = "INSERT INTO datos (identificacion, nombres, apellidos, programa, fecha_inicio, fecha_final, archivo) VALUES (' $identificacion','$nombres','$apellidos','$programa','$fecha_inicio','$fecha_final','$ruta')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	 
	    	echo "<script>alert('Datos registrados exitosamente')</script>";
			echo "<script>setTimeout(\"location.href='../../'\",100)</script>";
	    } else {
	    
	    }





	    
      
?>
