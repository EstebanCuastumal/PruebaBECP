<?php

include ('../app/config.php');
include ('../layout/sesion.php');
include ('../layout/parte1.php');
include ('../app/controladores/usuarios/listado_usuarios.php');

?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Listado de usuarios</h1>  <!-- modifico el nombre para que aparezca el portal de ventas online -->

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- Main content -->
    <div class="content">   
      <div class="container-fluid">
        Listado de usuarios 

        <div class="row">
        <div class="col-md-8">
        <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Usuarios Registrados</h3>
            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
            </button>
          </div>

        </div>
        <div class="card-body" style="display: block;">
        <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Nro</th>
                <th>Nombres</th>
                <th>Correo Electrónico</th>
              </tr>
              </thead>

              <tbody>
              <?php
              // me sirve para desplegar toda la información que existe en la base de datos
                foreach($datos_usuarios as $datos_usuario){
                 // echo "hola";
                ?>
              <!--escribimos en lenguaje html-->
              <tr>
                <td><?php echo $datos_usuario['id_usuario']?></td>
                <td><?php echo $datos_usuario['nombres']?></td>
                <td><?php echo $datos_usuario['correo_electronico']?></td>
              </tr>

              <?php }?>
              <tfoot>
              <th>Nro</th>
                <th>Nombres</th>
                <th>Correo Electrónico</th>
              </tr>
                </tfoot>


              </tbody>
            </table>
          </div>
                </div>
                </div>
                </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div> 
  <!-- /.content-wrapper -->

<?php include ('../layout/parte2.php');?>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>