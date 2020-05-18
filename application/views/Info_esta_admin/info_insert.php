<?php if (validation_errors()) : ?>
      <div class="col-xs-12">
        <div class="alert alert-danger" role="alert">
          <?= validation_errors() ?>
        </div>
      </div>
    <?php endif;?>

<?php if(isset($mensaje)):?>
<?php if(is_array($mensaje)):?>
<div class="col-xs-12">
<div class="alert alert-danger" role="alert">

<?php foreach ($mensaje as $m):?>
 <?php echo $m;?>
<?php endforeach;?>
<?php else:?>
<?php echo $mensaje;?>
</div>
</div>
<?php endif;?>
<?php endif;?>




 <div class="row">
  <div class="col-xs-12">

<?php
$atributos = array( 'id' => 'form_info','name'=>'form','class'=>'form-horizontal');
//echo form_open(null, $atributos);
echo form_open_multipart('Info_esta_admin/registro_info',$atributos);
?>
    
 <div class="form-group">
<label for="descripcion" class="col-sm-3 control-label no-padding-right">Descripcion:</label>
<div class="col-sm-9">
 <?php 
$datos = array(
              'name'        => 'descripcion',
              'type'        =>'text',
              'id'          => 'descripcion',
              'rows'        =>'2',
              'class'          => 'col-xs-10 col-sm-5',
              'value'   => set_value("descripcion"),

            );

echo form_textarea($datos,'');
?>

</div>
</div>


<div class="form-group">
 <label for="sel1" class="col-sm-3 control-label no-padding-right">Unidad_informativa:</label>
<div class="col-sm-9">
<select name="unidad_info" class="col-xs-10 col-sm-5" id="sel1">
<?php
foreach ($unidad_info as $dato) {
  
?>
    <option value="<?php echo $dato->unidad_informativa ?>"><?php echo $dato->unidad_informativa ?></option>
    <?php
}
?>  
    </select>
</div>
</div>


<div class="form-group">
 <label for="sel1" class="col-sm-3 control-label no-padding-right">Año de publicación:</label>
<div class="col-sm-9">
<select name="anio" class="col-xs-10 col-sm-5" id="sel1">
<?php
foreach ($anio as $dato) {
  
?>
    <option value="<?php echo $dato->anio ?>"><?php echo $dato->anio ?></option>
    <?php
}
?>  
    </select>
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
              'id'          => 'id-input-file-2',
              
              
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
