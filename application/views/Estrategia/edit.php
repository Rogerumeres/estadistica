 <?php echo validation_errors(); 

if ( $this->session->flashdata('ControllerMessage') != '' ) 
    {
?>
<div class="alert alert-dismissible alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?php echo $this->session->flashdata('ControllerMessage'); ?>
</div>
<?php 
} 
?>

 <div class="row">
  <div class="col-xs-12">

<?php
$atributos = array( 'id' => 'miformulario','name'=>'form','class'=>'form-horizontal');
//echo form_open(null, $atributos);
echo form_open_multipart('Estrategia/edit/'.$datos->id,$atributos);
?>
    
 
<div class="form-group">
<label for="textarea" class="col-sm-3 control-label no-padding-right">Descripcion:</label>
<div class="col-sm-9">
 <?php 
$dato = array(
              'name'        => 'descripcion',
              'type'        =>'textarea',
              'id'          => 'textarea',
              'rows'        =>'2',
              'class'          => 'col-xs-10 col-sm-5',
              'value'   => $datos->des_archivo,
              'readonly' => true,

            );

echo form_textarea($dato,'');
?>
</div>
</div>


<label for="sel1" class="col-sm-3 control-label no-padding-right">Fecha de Subida:</label>

<div class="row">
    <div class="col-xs-10 col-sm-4">
      <div class="input-group">

  <?php 
$dato = array(
              'name'        => 'fecha',
              'type'        =>'text',
              'id'          => 'id-date-picker-1',
              'data-date-format'          => 'yyyy-mm-dd',
              'class'          => 'form-control date-picker',
              'value'   => $datos->fecha_subida,

              
              
            );

echo form_input($dato,'');
?>
                                  
                                  <span class="input-group-addon">
                                    <i class="fa fa-calendar bigger-110"></i>
                                  </span>
                    </div>
        </div>
    </div>

                         



 <div class="clearfix form-actions">
    <div class="col-md-offset-3 col-md-9">
                      
                   
<input type="submit" value="Actualizar" title="Actualizar" class="btn btn-primary" id="upload"/>
</div>
</div>
</form>

</div>
</div>