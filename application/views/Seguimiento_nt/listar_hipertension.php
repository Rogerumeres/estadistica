       <?php
$atributos = array( 'id' => 'miformulario','name'=>'form','class'=>'form-horizontal');
//echo form_open(null, $atributos);
echo form_open_multipart('Seguimiento_nt/listar_hipertension',$atributos);
?>
<div class="box-header">

 <div class="col-md-6">

 
    
  <div class="form-group">
 
    <select class="chosen-select form-control" id="form-field-select-3" data-placeholder="Seleccione Establecimiento" name="establec" >
        <option value="000008910">Seleccione Establecimiento</option>                    
                        

                  <?php
foreach ($result1 as $row) {
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

<?php
if (empty($result2)){

$fecha_actualizacion='   No existen datos';
  }else{
  foreach ($result2 as $row) {
            
   $fecha_actualizacion=$row->fecha_actualizacion;

    }

  }
       ?>


<div class="col-sm-12 widget-container-col" id="widget-container-col-2">
  
                                            <div class="widget-box widget-color-blue" id="widget-box-2">
                                                
                                                <div class="widget-header">
                                                  
                                             
     <center>  <h3 class="box-title">  Establecimiento:  <?php echo $establecimiento->Nombre_Establecimiento ?>&nbsp;&nbsp;&nbsp;Fecha actualización: <?php echo $fecha_actualizacion ?></h3> </center>


                                                    
                                                </div>

                                                <div class="widget-body">
                                                    <div class="widget-main no-padding">


              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                

             
               
                <th>   Establecimiento   </th>    
                <th>DNI</th>
                <th>Nombre de Paciente</th>
                <th>Dx. Hipertensión</th>
                <th>Tratamientos de Hipertension</th>
                <th> Control de Hipertensión</th>                                                                      
                 
                  <th>  Detalle   </th>
                
               
                </tr>
                </thead>
                <tbody>

                <?php
                                                            
             foreach ($result2 as $row) {
                                  
                         ?>

                <tr>
                 
                  <td> 
                    <center> <?php echo $row->Nombre_Establecimiento ?></center>
                  </td>
                  <td> 
                    <center> <?php echo $row->Numero_Documento ?></center>
                  </td>

                  <td>
                       <center> <?php echo $row->Nombre_Paciente?></center>
                  </td>
                 
                 

                 <?php if ($row->hipertension>=2) { ?> 
                                                                  <td style="background-color:#ffbdc1;font-size:14px;">
                                                                        <center> <b><?php echo $row->hipertension ?></b>
                                                                       <div class="tool-tip">
                                                                        <i class="tool-tip__icon" >?</i>
                                                                        <p class="tool-tip__info">
                                                                           
                                                                          <span class="info__title">Diagnostico Hipertensión Duplicado</span><BR>
                                                                      
                                                                        </p>
                                                                       </div>
                                                                     
                                                                     </center>
                                                                    </td>

                                                                   
                                                                      <?php } elseif ($row->hipertension==0) { ?>
                                                                      <td style="font-size:11px; ">
                                                                        <center> 
                                                                          
                                                                     
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php } else { ?>
                                                                      <td style="background-color:#48d1cc;font-size:14px; ">
                                                                        <center> <b><?php echo $row->hipertension ?></b>
                                                                          
                                                                  
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php }  ?> 

                  <?php if ($row->hipertenso_Tratado>=1) { ?> 
                                                                  <td style="background-color:#48d1cc;font-size:14px;">
                                                                        <center> <b><?php echo $row->hipertenso_Tratado ?></b>

                                                                     
                                                                     </center>
                                                                    </td>

                                                                   
                                                                      <?php } else  { ?>
                                                                      <td style="font-size:11px; ">
                                                                        <center> 
                                                                          
                                                                    
                                                                        </center>
                                                                    </td>
                                                                     
                                                                          
                                                                      <?php }  ?> 

                   <?php if ($row->Hipertenso_Controlado>=3) { ?> 
                                                                  <td style="background-color:#ffbdc1;font-size:14px;">
                                                                        <center> <b><?php echo $row->Hipertenso_Controlado ?></b>

                                                                     
                                                                     </center>
                                                                    </td>

                                                                   
                                                                      <?php } elseif ($row->Hipertenso_Controlado==0) { ?>
                                                                      <td style="font-size:11px; ">
                                                                        <center> 
                                                                          
                                                                    
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php } else { ?>
                                                                      <td style="background-color:#48d1cc;font-size:14px; ">
                                                                        <center> <b><?php echo $row->Hipertenso_Controlado ?></b>
                                                                          
                                                                    
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php }  ?> 




                <td>
                  <center>
                        <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_seguimiento_hipertension_detalle/<?php echo $row->Codigo_Unico ?>/<?php echo $row->Numero_Documento?>"><i class="fa fa-eye bigger-200"></i></a></center>
                      </td>

                                  
               
                </tr>
                 <?php
                                                           }
                    ?>
                
                </tbody>

               
                <tfoot>
                
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>
