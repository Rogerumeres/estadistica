<section>
<div class="container">
  <div class="row">

    <?php if (validation_errors()) : ?>
      <div class="col-md-6">
        <div class="alert alert-danger" role="alert">
          <?= validation_errors() ?>
        </div>
      </div>
    <?php endif;?>
    
<?php if(isset($mensaje)):?>
<?php if(is_array($mensaje)):?>
<div class="col-md-6">
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
</div>
</div>
</section>
<section>
<div class="container">
<div class="row">
<?php
$atributos = array( 'id' => 'miformulario','name'=>'form','class'=>'form');
//echo form_open(null, $atributos);
?>


<div class="col-md-6" id="contenido" >
<?php
echo form_open_multipart('subir_archivos/registro',$atributos);
?>

<div class="form-group">
<label for="nom" class="col-lg-2 control-label">Titulo:</label>
 <?php 
 $js = 'onClick="alguna_funcion()"';
$datos = array(
              'name'        => 'titulo',
              'id'          => 'titulo',
              'class'   => 'form-control',
              'maxlength'   => '100',
               );

echo form_input($datos,'');
?>
</div>
<label for="textarea" class="col-lg-2 control-label">Descripcion:</label>
 <?php 
$datos = array(
              'name'        => 'descripcion',
              'type'        =>'textarea',
              'id'          => 'descripcion',
              'rows'        =>'5',
              'class'          => 'form-control',

            );

echo form_textarea($datos,'');
?>
<br>

 <?php 
$datos = array(
              'name'        => 'archivo',
              'type'        =>'file',
              'id'          => 'file',
              
              
            );

echo form_input($datos,'');
?>
<br>
 <label for="sel1" class="col-lg-2 control-label">Estrategia:</label>

<select name="programa" class="form-control" id="sel1">
    <option value="articulado">Articulado Nutricional</option>
    <option value="materno">Materno Neonatal</option>
    <option value="metaxenicas">Metaxenicas Y Zoonosis</option>
    <option value="notrasmisibles">No Trasmisibles</option>
</select>
<hr />
<input type="submit" value="Enviar" name"submit_reg" title="Enviar" class="btn btn-primary"/>
</form>
</div>
</div><!-- .row -->
</div><!-- .container -->
</section>


  
  