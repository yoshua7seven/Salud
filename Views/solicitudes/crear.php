<script>
  $(document).ready(function(){
    $( "#cedula" ).autocomplete({
      source: "<?= URL;?>solicitudes/buscarcedula",
      minLength: 2
    });
 
    $("#cedula").focusout(function(){
      $.ajax({
            url:'<?= URL;?>solicitudes/buscardatos',
          type:'POST',
          dataType:'json',
          data:{ cedula:$('#cedula').val()}
      }).done(function(respuesta){
          $("#nombre").val(respuesta.nombre);
          $("#apellido").val(respuesta.apellido);
          $("#cedula").val(respuesta.cedula);
      });
    });
  });
</script>

<section class="content">
<div class="content-wrapper">
<!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Ingrese datos para la nueva solicitud</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="POST" action="<?= URL;?>solicitudes/crear">
                <!-- text input -->
                
                <div class="form-group">
                  <label for="cedula">Cedula del solicitante</label>
                  <input type="text" class="form-control" placeholder="Cedula" name="cedula" id="cedula" value="">
                </div>
                
                <!-- select -->
                <div class="form-group">
                  <label>Tipo de solicitud</label>
                  <select class="form-control" name="tiposolicitud">
                    <?php while ($row = mysqli_fetch_array($datos)) { ?>
                      <option value="<?php echo $row['id'];?>"><?php echo $row['nombre'];?></option>
                    <?php } ?>
                  </select>
                </div>

                <div class="form-group">
                  <label>Estatus de la solicitud</label>
                  <input type="text" class="form-control" placeholder="Estatus" name="estatussolicitud" id="estatussolicitud">
                </div>

                <div class="form-group">
                  <label>Solicitud Remitida a:</label>
                  <input type="text" class="form-control" placeholder="Remitida a" name="remitida" id="remitida">
                </div>

                <!-- checkbox -->
                <div class="form-group">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="copiacedula" id="copiacedula">
                      Entrego Cedula de Identidad? (copia)
                    </label>
                  </div>
                </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="informe" id="informe">
                      Entrego informe Medico?
                    </label>
                  </div>

                  <div class="form-group">
                    <label>Presupuesto:</label>
                    <input type="text" class="form-control" placeholder="Presupuesto" name="presupuesto" id="presupuesto">
                  </div>

                  <!-- textarea -->
                  <div class="form-group">
                    <label>Motivo de la solicitud</label>
                    <textarea class="form-control" rows="3" placeholder="Motivo de la solicitud" name="motivosolicitud"></textarea>
                    <span class="help-block">Aca debe explicar el motivo de la solicitud.</span>
                  </div>

                  <div class="form-group">
                    <label>Descripcion de equipos(ayudatecnica / Materiales Quirurgicos)</label>
                    <textarea class="form-control" rows="3" placeholder="Describa lo pedido" name="desc-equip"></textarea>
                    <span class="help-block">En este campo debe colocar lo que se esta solicitando, por ejemplo: Silla de rueda, Jeringas, Baston blanco.</span>
                  </div>
                  
                  <div class="form-group">
                    <button class="btn btn-danger">Cancel</button>
                    <button type="reset" class="btn btn-default">Reiniciar</button>
                    <button type="submit" class="btn btn-primary" name="crear" >Crear</button>
                  </div>

              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
</div>
