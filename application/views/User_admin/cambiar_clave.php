<?php if (validation_errors()) : ?>
      <div class="col-md-12">
        <div class="alert alert-danger" role="alert">
        <button class="close" data-dismiss="alert">
                    <i class="ace-icon fa fa-times"></i>
                  </button>
          <?= validation_errors() ?>
        </div>
      </div>
    <?php endif; ?>
<div class="row">
  <div class="col-xs-12">
<?php

$atributos = array( 'id' => 'miformulario','name'=>'form','class'=>'form-horizontal');
//echo form_open(null, $atributos);
echo form_open('User_admin/cambiar_clave',$atributos);
?>


<div class="form-group">
<label for="ram" class="col-sm-3 control-label no-padding-right">Contraseña Actual:</label>
<div class="col-sm-9">
 <?php 
$dato = array(
              'name'        => 'pass',
              'id'          => 'pass',
              'maxlength'   => '50',
              'class'   => 'col-xs-10 col-sm-5',
                            

            );

echo form_password($dato,'');
?>
</div>
</div>
<div class="form-group">
<label for="ram" class="col-sm-3 control-label no-padding-right">Nueva Contraseña:</label>
<div class="col-sm-9">
 <?php 
$dato = array(
              'name'        => 'new_pass',
              'id'          => 'new_pass',
              'maxlength'   => '50',
              'class'   => 'col-xs-10 col-sm-5',
              

            );

echo form_password($dato,'');
?>
</div>
</div>
<div class="form-group">
<label for="ram" class="col-sm-3 control-label no-padding-right">Repita Contraseña:</label>
<div class="col-sm-9">
 <?php 
$dato = array(
              'name'        => 'new_pass_2',
              'id'          => 'new_pass_2',
              'maxlength'   => '50',
              'class'   => 'col-xs-10 col-sm-5',
              

            );

echo form_password($dato,'');
?>
</div>
</div>
<div class="clearfix form-actions">
    <div class="col-md-offset-3 col-md-9">
<input type="submit" value="Actualizar" title="Editar" class="btn btn-primary"/>
 <input type="reset" value="Cancelar"  class="btn btn-primary" onClick="window.open('<?php echo base_url()?>User_admin/listar','_self','');"/>
 </div>
 </div>
</form>
