<?php
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Ingrese los datos del nuevo usuario</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body" style="display: block;">
              <div class="row">
                <div class="col-md-12">
                  <form action="../app/controladores/usuarios/creacion.php" method="post">
                    <div class="form-group">
                      <label for="">Nombres</label>
                      <input type="text" name="nombres" class="form-control"
                        placeholder="Ingrese el nombre del usuario">
                    </div>
                    <div class="form-group">
                      <label for="">Correo Electrónico</label>
                      <input type="email" name="email" class="form-control" placeholder="Ingrese el correo del usuario">
                    </div>
                    <div class="form-group">
                      <label for="">Contraseña</label>
                      <input type="text" name="clave_usuario" class="form-control"
                        placeholder="Ingrese su nueva contraseña">
                    </div>
                    <div class="form-group">
                      <label for="">Repita la contraseña</label>
                      <input type="text" name="clave_verificar" class="form-control" placeholder="Repita contraseña">
                    </div>
                    <hr>
                    <div class="form-group">
                      <a href="" class="btn btn-secondary">Cancelar</a>
                      <button class="btn btn-primary">Guardar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <?php include('../layout/parte2.php'); ?>