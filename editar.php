<?php
include("db.php");

$apellido= '';
$nombre = '';
$dni = '';
$domicilio= '';
$telefono= '';
$email= '';
$estado=1;

if  (isset($_GET['id'])) {
  $id = $_GET['id'];

  $query = "SELECT * FROM socios WHERE id_socio=$id";
  $result = mysqli_query($mysqli, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $apellido = $row['apellido'];
    $nombre = $row['nombre'];
    $dni = $row['dni'];
    $domicilio= $row['domicilio'];
    $telefono= $row['telefono'];
    $email= $row['email'];
    $estado=1;

    
  }
}


if (isset($_POST['Actualizar'])) {
  $id = $_GET['id'];
  $apellido = $_POST['apellido'];
  $nombre= $_POST['nombre'];
  $dni = $_POST['dni']; 
  $domicilio = $_POST['domicilio'];
  $telefono= $_POST['telefono']; 
  $email = $_POST['email'];
  $estado=1;

  $query = "UPDATE socios set apellido = '$apellido', nombre = '$nombre', dni = '$dni', domicilio = '$domicilio', telefono = '$telefono', email = '$email', estado = '$estado' WHERE id_socio=$id";
  
  mysqli_query($mysqli, $query);
  $_SESSION['message'] = 'Se actualizó Correctamente';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>

<?php include('includes/header.php'); ?>

<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <h2 class="text-center">Actualizar Socio</h2>
      <div class="card card-body">
      <form action="editar.php?id=<?php echo $_GET['id']; ?>" method="POST">

        <div class="form-group">
          <input name="apellido" type="text" class="form-control" value="<?php echo $apellido; ?>" placeholder="Actualizar Apellido">
        </div>

        <div class="form-group">
          <input name="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>" placeholder="Actualizar Nombre">
        </div>
        
         <div class="form-group">
          <input name="dni" type="text" class="form-control" value="<?php echo $dni; ?>" placeholder="Actualizar DNI">
        </div>

        <div class="form-group">
          <input name="domicilio" type="text" class="form-control" value="<?php echo $domicilio; ?>" placeholder="Actualizar Domicilio">
        
        </div>
        <div class="form-group">
          <input name="telefono" type="text" class="form-control" value="<?php echo $telefono; ?>" placeholder="Actualizar Telefono">
        </div>
       
        <div class="form-group">
          <input name="email" type="text" class="form-control" value="<?php echo $email; ?>" placeholder="Actualizar Email">
        </div>

        <input type="submit" name="Actualizar" class="btn btn-success btn-block"  value="Actualizar">
        
        <!-- Acá agrego un botón para cancelar la carga del socio y recargar el index-->
          <a type="submit" href="index.php" class="btn btn-dark btn-block"> Cancelar</a>
        
        <!--<button class="btn  btn-success" name="Actualizar">
          Actualizar
        </button> -->

        <!-- <input type="button"onclick="location.href='index.php'"class="btn  btn-success" name="cancelar" value="Cancelar" style="float: right"> --!
        
        

          

      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
<!-- <textarea name="apellido" class="form-control"  rows="1"><?php echo $apellido;?></textarea> -->
<!--  -->