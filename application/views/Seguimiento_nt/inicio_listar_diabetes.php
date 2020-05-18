<div class="col-sm-10 widget-container-col" id="widget-container-col-2">
    <?php
$atributos = array( 'id' => 'miformulario','name'=>'form','class'=>'form-horizontal');
//echo form_open(null, $atributos);
echo form_open_multipart('Seguimiento_nt/listar_diabetes',$atributos);
?>
    
 <div class="box-header">

 <div class="col-md-6">

 
    
  <div class="form-group">
 
      <select class="chosen-select form-control" id="form-field-select-3" data-placeholder="Seleccione Establecimiento" name="establec" >
        <option value="000008910">Seleccione Establecimiento</option>                    
                        

                  <?php
foreach ($datos as $row) {
  ?>
      <option value="<?php echo $row->Codigo_Unico ?>"><?php echo $row->Nombre_Establecimiento ?></option>

      <?php
  }
?>
                </select>
   </div>

                   
         

        <input type="submit" value="Mostrar" title="Mostrar" class="btn btn-primary" id="Mostrar"/>
 
 
</div>
</div>   
                                            
 </div><!-- /.span -->