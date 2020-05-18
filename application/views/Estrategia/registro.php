 <?php if (validation_errors()) : ?>
      <div class="col-xs-12">
        <div class="alert alert-danger" role="alert">
          <?= validation_errors() ?>
        </div>
      </div>
    <?php endif;?>
    
<?php if(isset($mensaje)):?>
<?php if(is_array($mensaje)):?>

<?php foreach ($mensaje as $m):?>
  <div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
 <?php echo $m;?>
 </div>
<?php endforeach;?>
<?php else:?>
  <div class="alert alert-dismissible alert-info">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?php echo $mensaje;?>
</div>
<?php endif;?>
<?php endif;?>



 <div class="row">
  <div class="col-xs-12">

<?php
$atributos = array( 'id' => 'miformulario','name'=>'form','class'=>'form-horizontal');
//echo form_open(null, $atributos);
echo form_open_multipart('Estrategia/registro',$atributos);
?>
    
 
<div class="form-group">
<label for="textarea" class="col-sm-3 control-label no-padding-right">Descripcion:</label>
<div class="col-sm-9">
 <?php 
$datos = array(
              'name'        => 'descripcion',
              'type'        =>'textarea',
              'id'          => 'textarea',
              'rows'        =>'2',
              'class'          => 'col-xs-10 col-sm-5',
              'value'   => set_value("descripcion"),

            );

echo form_textarea($datos,'');
?>
</div>
</div>
<div class="form-group">
 <label for="sel1" class="col-sm-3 control-label no-padding-right">Seleccione Estrategia:</label>
<div class="col-sm-9">
<select name="estrategia" class="col-xs-10 col-sm-5" id="sel1">
    <option value="articulado">Articulado Nutricional</option>
    <option value="materno">Materno Neonatal</option>
    <option value="transmisibles">Transmisibles</option>
    <option value="ntransmisibles">no Transmisibles</option>
    <option value="promsa">PROMSA/Salud Familiar</option>
    <option value="promsa">SIEN</option>
</select>
</div>
</div>
<br>

<label for="sel1" class="col-sm-3 control-label no-padding-right">Fecha de Subida:</label>

<div class="row">
    <div class="col-xs-10 col-sm-4">
      <div class="input-group">

  <?php 
$datos = array(
              'name'        => 'fecha',
              'type'        =>'text',
              'id'          => 'id-date-picker-1',
              'data-date-format'          => 'yyyy-mm-dd',
              'class'          => 'form-control date-picker',

              
              
            );

echo form_input($datos,'');
?>
                                  
                                  <span class="input-group-addon">
                                    <i class="fa fa-calendar bigger-110"></i>
                                  </span>
                    </div>
        </div>
    </div>



                                


<br>
<label for="sel1" class="col-sm-3 control-label no-padding-right">Seleccione Archivo:</label>


   <div class="form-group">
     <div class="col-xs-4">
                                
                             
 <?php 
$datos = array(
              'name'        => 'archivo',
              'type'        =>'file',
              'id'          => 'id-input-file-3',
              
              
            );

echo form_input($datos,'');
?>
 
</div>
</div>

<br>
 <div class="clearfix form-actions">
    <div class="col-md-offset-3 col-md-9">
                      
                   
<input type="submit" value="Guardar" title="Guardar" class="btn btn-primary" id="upload"/>
</div>
</div>
</form>

</div>
</div>


