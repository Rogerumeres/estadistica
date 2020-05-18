       <?php
$atributos = array( 'id' => 'miformulario','name'=>'form','class'=>'form-horizontal');
//echo form_open(null, $atributos);
echo form_open_multipart('Seguimiento_nt/valoracion_clinica',$atributos);
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
                <th>Edad</th>
                <th>valoracion_clinica</th>
                 <th>IMC</th>
                <th>Presión Sanguinea</th>
                <th>Perimetro Abdominal</th>                                                                      
                 <th >Tamisaje laboratorial</th>
                <th>Consejeria integral</th>
                 <th>Entrega Resultados Laboratorio</th>
               
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
                  <td>
                       <center> <?php echo $row->Edad_Reg?></center>
                  </td>
                 
                <?php if ($row->Valoracion_clinicafr>=2) { ?> 
                                                                  <td style="background-color:#ffbdc1;font-size:14px;">
                                                                        <center> <b><?php echo $row->Valoracion_clinicafr ?></b>

                                                                     
                                                                     </center>
                                                                    </td>

                                                                   
                                                                      <?php } elseif ($row->Valoracion_clinicafr==0) { ?>
                                                                      <td style="font-size:11px; ">
                                                                        
                                                                    </td>
                                                                          
                                                                      <?php } else { ?>
                                                                      <td style="background-color:#48d1cc;font-size:14px; ">
                                                                        <center> <b><?php echo $row->Valoracion_clinicafr ?></b>
                                                                          
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php }  ?> 
               <?php if ($row->imc>=2) { ?> 
                                                                  <td style="background-color:#ffbdc1;font-size:14px;">
                                                                        <center> <b><?php echo $row->imc ?></b>

                                                                     
                                                                     </center>
                                                                    </td>

                                                                   
                                                                      <?php } elseif ($row->imc==0) { ?>
                                                                      <td style="font-size:11px; ">
                                                                        
                                                                    </td>
                                                                          
                                                                      <?php } else { ?>
                                                                      <td style="background-color:#48d1cc;font-size:14px; ">
                                                                        <center> <b><?php echo $row->imc ?></b>
                                                                          
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php }  ?> 
                            
                          <?php 
                        if ($row->Edad_Reg>=18) {
                          if ($row->Presion_sanguinea>=2) { ?> 
                                                                  <td style="background-color:#ffbdc1;font-size:14px;">
                                                                        <center> <b><?php echo $row->Presion_sanguinea ?></b>

                                                                     
                                                                     </center>
                                                                    </td>

                                                                   
                                                                      <?php } elseif ($row->Presion_sanguinea==0) { ?>
                                                                      <td style="font-size:11px; ">
                                                                       
                                                                    </td>
                                                                          
                                                                      <?php } else { ?>
                                                                      <td style="background-color:#48d1cc;font-size:14px; ">
                                                                        <center> <b><?php echo $row->Presion_sanguinea ?></b>
                                                                          
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php } }else { ?> 
                                                           <td style="background-color:#cccccc;font-size:14px;">
                                                                       
                                                                    </td>
                                            
                                                                          <?php }  ?> 



                    <?php if ($row->Perimetro_Abdominal>=2) { ?> 
                                                                  <td style="background-color:#ffbdc1;font-size:14px;">
                                                                        <center> <b><?php echo $row->Perimetro_Abdominal ?></b>

                                                                     
                                                                     </center>
                                                                    </td>

                                                                   
                                                                      <?php } elseif ($row->Perimetro_Abdominal==0) { ?>
                                                                      <td style="font-size:11px; ">
                                                                      
                                                                    </td>
                                                                          
                                                                      <?php } else { ?>
                                                                      <td style="background-color:#48d1cc;font-size:14px; ">
                                                                        <center> <b><?php echo $row->Perimetro_Abdominal ?></b>
                                                                          
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php }  ?> 

                 <?php if ($row->Tamisaje_laboratorial>=2) { ?> 
                                                                  <td style="background-color:#ffbdc1;font-size:14px;">
                                                                        <center> <b><?php echo $row->Tamisaje_laboratorial ?></b>

                                                                     
                                                                     </center>
                                                                    </td>

                                                                   
                                                                      <?php } elseif ($row->Tamisaje_laboratorial==0) { ?>
                                                                      <td style="font-size:11px; ">
                                                                      
                                                                    </td>
                                                                          
                                                                      <?php } else { ?>
                                                                      <td style="background-color:#48d1cc;font-size:14px; ">
                                                                        <center> <b><?php echo $row->Tamisaje_laboratorial ?></b>
                                                                          
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php }  ?> 
                  
                 <?php if ($row->Consejeria_integral>=2) { ?> 
                                                                  <td style="background-color:#ffbdc1;font-size:14px;">
                                                                        <center> <b><?php echo $row->Consejeria_integral ?></b>

                                                                     
                                                                     </center>
                                                                    </td>

                                                                   
                                                                      <?php } elseif ($row->Consejeria_integral==0) { ?>
                                                                      <td style="font-size:11px; ">
                                                                      
                                                                    </td>
                                                                          
                                                                      <?php } else { ?>
                                                                      <td style="background-color:#48d1cc;font-size:14px; ">
                                                                        <center> <b><?php echo $row->Consejeria_integral ?></b>
                                                                          
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php }  ?> 

                     <?php if ($row->Entrega_laboratorio>=2) { ?> 
                                                                  <td style="background-color:#ffbdc1;font-size:14px;">
                                                                        <center> <b><?php echo $row->Entrega_laboratorio ?></b>

                                                                     
                                                                     </center>
                                                                    </td>

                                                                   
                                                                      <?php } elseif ($row->Entrega_laboratorio==0) { ?>
                                                                      <td style="font-size:11px; ">
                                                                      
                                                                    </td>
                                                                          
                                                                      <?php } else { ?>
                                                                      <td style="background-color:#48d1cc;font-size:14px; ">
                                                                        <center> <b><?php echo $row->Entrega_laboratorio ?></b>
                                                                          
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php }  ?> 
                <td>
                  <center>
                        <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_seguimiento_dnt_detalle/<?php echo $row->Codigo_Unico ?>/<?php echo $row->Numero_Documento?>"><i class="fa fa-eye bigger-200"></i></a></center>
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

