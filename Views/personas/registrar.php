<section class="content">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Ingrese los datos de la persona
        <small>verifique que los datos son correctos antes de registrar</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= URL ?>"><i class="fa fa-dashboard"></i> Inicio(lista de personas)</a></li>
        <li class="active">Registrar persona</li>
      </ol>
    </section>

    <section class="content">
    	<!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Datos generales</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="POST" action="<?= URL . "personas/registrar" ?>">
                <!-- text input -->
                <div class="form-group">
                  <label>Primer nombre</label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="nombre1" required="required">
                </div>
                <div class="form-group">
                  <label>Segundo nombre</label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="nombre2" required="required">
                </div>
                <div class="form-group">
                  <label>Primer apellido</label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="apellido1" required="required">
                </div>
                <div class="form-group">
                  <label>Segundo apellido</label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="apellido2" required="required">
                </div>
                <div class="form-group">
                  <label>Cedula</label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="cedula" required="required">
                </div>
                <div class="form-group">
                  <label>Direccion</label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="direccion" required="required">
                </div>
                <div class="form-group">
                  <label>telefono de contacto</label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="telefono" required="required">
                </div>
                <div class="form-group">
                  <label>Correo electronico (opcional)</label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="correo">
                </div>

               
                <!-- select -->
                <div class="form-group">
                  <label>Seleccione Zona(OBLIGATORIO)</label>
                  <select class="form-control" name="zona" required="required">
                    <?php while ($row = mysqli_fetch_array($datos)) { ?>
                  		<option value="<?php echo $row['id'];?>"><?php echo $row['nombre'];?></option>
        	  		<?php } ?>
                  </select>
                </div>

                <div class="box-footer">
                	<button  class="btn btn-default"><a href="<?= URL; ?>">Cancelar</a></button>
                	<button type="submit" class="btn btn-info pull-right">Registrar</button>
              	</div>
   

              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    </section>

</div>