<section class="content">
  
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Detalles de <?php echo $datos['p_nombre']; ?>
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= URL ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="#">personas</a></li>
        <li class="active">Detalles de: <?= $datos['p_nombre'] ?></li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Datos personales</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th>Primer nombre:</th>
                  <td><?= $datos['p_nombre'] ?></td>
                  <th>Cedula:</th>
                  <td><?= $datos['cedula'] ?></td>
                </tr>
                <tr>
                  <th>Segundo nombre:</th>
                  <td><?= $datos['s_nombre'] ?></td>
                  <th>Direccion:</th>
                  <td><?= $datos['direccion'] ?></td>
                </tr>
                <tr>
                  <th>Primer apellido:</th>
                  <td><?= $datos['p_apellido'] ?></td>
                  <th>Telefono:</th>
                  <td><?= $datos['telefono'] ?></td>
                </tr>
                <tr>
                  <th>Segundo apellido:</th>
                  <td><?= $datos['s_apellido'] ?></td>
                  <th>Correo:</th>
                  <td><?= $datos['correo'] ?></td>
                </tr>
                <tr>
                  <th>Fecha de registro:</th>
                  <td><?= $datos['fecha_reg'] ?></td>
                  <th>Zona:</th>
                  <td><?= $datos['id_zona'] ?></td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
          <!-- /.box -->
        </div>
    </div>
  </section>
 </div>
