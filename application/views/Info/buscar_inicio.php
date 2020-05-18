   
                    
<div class="col-sm-10 widget-container-col" id="widget-container-col-2">
    <?php
$atributos = array( 'id' => 'miformulario','name'=>'form','class'=>'form-horizontal');
//echo form_open(null, $atributos);
echo form_open_multipart('Info/buscar',$atributos);
?>
    
  <div class="col-md-6">
  <div class="form-group">
    

   <input type="search"  title="Buscar"  name="buscar" id="buscar" placeholder="Ingresar DNI"/>
    </div>
      <input type="submit" value="Mostrar" title="Mostrar" class="btn btn-primary" id="mostrar"/>
 
 
</div>
                                            
 </div><!-- /.span -->