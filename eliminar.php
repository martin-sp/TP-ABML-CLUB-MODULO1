<?php

include("db.php");


if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "UPDATE socios SET estado = 0, fecha_baja = NOW() WHERE id_socio = $id";
  $result = mysqli_query($mysqli, $query);
  if(!$result) {
    die("Falló la consulta.");
  }

  $_SESSION['message'] = 'El socio se eliminó correctamente';
  $_SESSION['message_type'] = 'danger';
  header('Location: index.php');
}

?>
