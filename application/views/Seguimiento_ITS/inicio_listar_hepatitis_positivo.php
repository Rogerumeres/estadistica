<div class="col-sm-10 widget-container-col" id="widget-container-col-2">
    <?php
$atributos = array( 'id' => 'miformulario','name'=>'form','class'=>'form-horizontal');
//echo form_open(null, $atributos);
echo form_open_multipart('Seguimiento_ITS/Listar_hepatitis_positivo',$atributos);
?>
    
  <div class="col-md-6">

 
    
  <div class="form-group">
 
  <select class="chosen-select form-control" id="form-field-select-3" data-placeholder="Seleccione Microred" name="establec" >
        <option value="00">Seleccione Microred</option>                    
                        

                  <?php
foreach ($datos as $row) {
	?>
      <option value="<?php echo $row->Codigo_MicroRed ?>"><?php echo $row->MicroRed ?></option>

      <?php
  }
?>
                </select>
   </div>

   
                 
         

        <input type="submit" value="Mostrar" title="Mostrar" class="btn btn-primary" id="Mostrar"/>
 
 
</div>
                                            
 </div><!-- /.span -->