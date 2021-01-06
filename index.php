<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<!-- Alerta para aliminar registro -->
<script type="text/javascript">
    function confirmar()
    {
      var respuesta = confirm("¿Desea eliminar el registro?");
      if(respuesta == true)
      {
        return true;
      }
      else
      {
        return false;
      }
    }
  </script>
<!-- Fin alerta -->

<main class="container p-4">
  
  <!-- Si quiero centrar el div usar la siguiente linea -->
  <!--
  <div class="row justify-content-center h-100">
  -->
  <div class="row">
    <div class="col-md-4">

      <!-- Mensajes que son mostrados al cargar socio y eliminar socio -->
      
      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <?php session_unset(); } ?>

      <!-- FORMULARIO PARA AGREGAR SOCIO -->

      <h2 class="text-center">Alta Socio</h2>
      <div class="card card-body">
        <form action="guardar.php" method="POST">
          <div class="form-group">
            <input type="text" name="apellido" class="form-control" placeholder="Apellidos " autofocus required>
          </div>
          <div class="form-group">
            <input type="text" name="nombre" class="form-control" placeholder="Nombre " autofocus required>
          </div>
          <div class="form-group">
            <input type="text" name="dni" class="form-control" placeholder="DNI " autofocus required>
          </div>
          <div class="form-group">
            <input type="text" name="domicilio" class="form-control" placeholder="Domicilio " autofocus required>
          </div>
          <div class="form-group">
            <input type="text" name="telefono" class="form-control" placeholder="Teléfono " autofocus required>
          </div>
          <div class="form-group">
            <input type="text" name="email" class="form-control" placeholder="Email " autofocus>
          </div>
          <div class="form-group">
            <input type="date" name="fecha_alta" class="form-control" placeholder="Fecha Alta " autofocus required>
          </div>
               

          <input type="submit" name="guardar" class="btn btn-primary btn-block"  value="Guardar">

          <!-- Acá agrego un botón para cancelar la carga del socio y recargar el index-->
          <a type="submit" href="index.php" class="btn btn-dark btn-block"> Cancelar</a>
            
        </form>
      </div>
    </div>

    <!-- Fin formulario -->


    <!-- Inicio tabla -->

    <div class="col-md-8">
       
    <style>
        table.dataTable thead {
            background: linear-gradient(to right,#0575E6, #00F260);
            color:white;  #fdb827,#fd3a69, #21209c
        }
    </style>  
      
    
      
<div class="container">
       <div class="row">
           <div class="col-lg-12">
            <table id="socios" class="table-striped table-bordered" style="width:100%">
                <thead class="text-center">
                    <th>id_socio</th>
                    <th>Apellido</th>
                    <th>Nombre</th>
                    <th>DNI</th>
                    <!--<th>Domicilio</th>-->
                    <th>Teléfono</th>
                    <th>Email</th>
                    <!--<th>Fecha Alta</th>-->
                    <th>Acción</th>

                </thead>
                <tbody>

                    <?php
                    $query = "SELECT * FROM socios WHERE estado = 1";
                    $result_socios = mysqli_query($mysqli, $query);    

                    while($socio = mysqli_fetch_assoc($result_socios)) { ?>
                      
                    
                    <tr>

                        <td><?php echo $socio['id_socio']?></td>
                        <td><?php echo $socio['apellido']?></td>
                        <td><?php echo $socio['nombre']?></td>
                        <td><?php echo $socio['dni']?></td>
                        <!--<td><?php echo $socio['domicilio']?></td>-->
                        <td><?php echo $socio['telefono']?></td>
                        <td><?php echo $socio['email']?></td>
                        <!--<td><?php echo $socio['fecha_alta']?></td>-->
                        <td>

                          <a href="editar.php?id=<?php echo $socio['id_socio']?>" class="btn btn-secondary">
                          <i class="fas fa-pen"></i>
                          </a>
                          <a href="eliminar.php?id=<?php echo $socio['id_socio']?>" class="btn btn-danger" onclick="return confirmar()">
                          <i class="far fa-trash-alt"></i>
                          
                          </a>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
           </div>
       </div> 
    </div>
<!-- Fin tabla -->
     
    
  </div>
</main>


    <!-- Inicilizar la tabla con idioma español -->
    <script type="text/javascript">
        $(document).ready(function () {
            $('#socios').dataTable({
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
                }
            });
        });
    </script>


        
<?php include('includes/footer.php'); ?>

