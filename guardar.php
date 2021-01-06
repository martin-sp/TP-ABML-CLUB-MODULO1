<?php

include('db.php');

if (isset($_POST['guardar'])) {
  $apellido = $_POST['apellido'];
  $nombre = $_POST['nombre'];
  $dni = $_POST['dni'];
  $domicilio = $_POST['domicilio'];
  $telefono = $_POST['telefono'];
  $email = $_POST['email'];
  $estado = 1;
  $fecha_alta = date("Y-m-d",strtotime($_POST['fecha_alta']));
  
  $consulta = "INSERT INTO socios(apellido, nombre, dni, domicilio, telefono, email, estado, fecha_alta) VALUES ('$apellido', '$nombre', '$dni', '$domicilio', '$telefono', '$email', '$estado', '$fecha_alta')";
 

 $resultado = mysqli_query($mysqli, $consulta);
  
  if(!$resultado) {
    die("Falló la consulta.");
  }

  $_SESSION['message'] = 'Se agrego el socio correctamente';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
