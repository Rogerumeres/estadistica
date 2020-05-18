                    
<div class="col-sm-10 widget-container-col" id="widget-container-col-2">
    <?php
$atributos = array( 'id' => 'miformulario','name'=>'form','class'=>'form-horizontal');
//echo form_open(null, $atributos);
echo form_open_multipart('TbcMetaxenicas/Errores_leishmania',$atributos);
?>
    
   <div class="col-md-6">

   	  <div class="form-group">
    <select class="form-control" name="año" id="año">
      <option selected="">Seleccione Año</option>
      <option value="2019">2019</option>
      <option value="2020">2020</option>
      <option value="2021">2021</option>
    
      
    </select>
    </div>
    
  <div class="form-group">
    

    <select class="form-control" name="mes" id="mes">
                        
                 <option value="1">Enero</option>
                  <option value="2">Febrero</option>
                  <option value="3">Marzo</option>
                  <option value="4">Abril</option>
                  <option value="5">Mayo</option>
                  <option value="6">Junio</option>
                  <option value="7">Julio</option>
                  <option value="8">Agosto</option>
                  <option value="9">Setiembre</option>
                  <option value="10">Octubre</option>
                  <option value="11">Noviembre</option>
                  <option value="12">Diciembre</option>
                </select>
                 </div>
                 <input type="submit" value="Mostrar" title="Mostrar" class="btn btn-primary" id="mostrar"/>
 
 
</div>
                                            
 </div><!-- /.span -->