<?php
$atributos = array( 'id' => 'miformulario','name'=>'form','class'=>'form-horizontal');
//echo form_open(null, $atributos);
echo form_open_multipart('Errores/listar_gestantes',$atributos);
?>
   <div class="box-header"> 
         <div class="col-md-6">
               <div class="form-group">
                     <select class="form-control select2" name="establec" id="establec">
                               <option value="000008910">Seleccione Establecimiento
                               </option>                    
                           <?php
                                foreach ($ListadoEstablecimientos as $row) {
                           ?>
                                <option value="<?php echo $row->Codigo_Unico ?>"><?php echo $row->Nombre_Establecimiento ?>
                                </option>
                           <?php
                                                                           }
                           ?>
                     </select>
               </div>


                   <input type="submit" value="Mostrar" title="Mostrar" class="btn btn-primary" id="Mostrar"/>
         </div> 
    </div>
