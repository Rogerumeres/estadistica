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
echo form_open_multipart('Estrategia/registro_comprimido',$atributos);
?>
    
 

<br>
<label for="sel1" class="col-sm-3 control-label no-padding-right">Seleccione Archivo:</label>


   <div class="form-group">
     <div class="col-xs-4">
                                
                             
 <?php 
$datos = array(
              'name'        => 'archivo',
              'type'        =>'file',
              'id'          => 'id-input-file-2',
              
              
            );

echo form_input($datos,'');
?>
 
</div>
</div>

<br>
 <div class="clearfix form-actions">
    <div class="col-md-offset-3 col-md-9">
                      
                   
<input type="submit" value="Subir" title="Guardar" class="btn btn-primary" id="upload"/>
</div>
</div>
</form>

</div>
</div>