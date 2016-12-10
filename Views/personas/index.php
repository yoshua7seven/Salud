

<section class="content">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
          Lista de personas
          <small>Debe registrar a las personas antes de crear una solicitud</small>
      </h1>
    </section>

    <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Lista de personas</h3>

                <div class="box-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                    <div class="input-group-btn">
                      <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                  <tr>
                    <th>Primer nombre</th>
                    <th>Primer apellido</th>
                    <th>C.I</th>
                    <th>Tlf</th>
                    <th>Zona</th>
                    <th>Accion</th>
                  </tr>
                  <?php while ($row = mysqli_fetch_array($datos)) { ?>
                   <tr class="info">
                      <td><?= $row['p_nombre'] ?></td>
                      <td><?= $row['p_apellido'] ?></td>
                      <td><?= $row['cedula'] ?></td>
                      <td><?= $row['telefono'] ?></td>
                      <td><?= $row['zona_nombre'] ?>|<?= $row['id_zona'] ?></td>
                      <td><a href="<?= URL . "personas" . DS . "detalles" . DS . $row['codigo']; ?>">Detalles</a></td>
                  </tr>
                  <?php } ?>
                            
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
    </div>
</div>

