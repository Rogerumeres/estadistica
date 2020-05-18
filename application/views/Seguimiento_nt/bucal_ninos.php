
    <?php
$atributos = array( 'id' => 'miformulario','name'=>'form','class'=>'form-horizontal');
//echo form_open(null, $atributos);
echo form_open_multipart('Seguimiento_nt/Seguimiento_bucal_nino',$atributos);
?>
<div class="box-header">

 <div class="col-md-6">

 
    
  <div class="form-group">
 
   <select class="chosen-select form-control" id="form-field-select-3" data-placeholder="Seleccione Establecimiento" name="establec" > 
        <option value="000002421">Seleccione Establecimiento</option>                    
                        

                  <?php
foreach ($result1 as $row) {
  ?>
      <option value="<?php echo $row->Codigo_Unico ?>"><?php echo $row->Nombre_Establecimiento ?></option>

      <?php
  }
?>
                </select>
   </div>

    <div class="form-group">
    <select class="form-control" name="año" id="año">
     
      <option value="2020">2020</option>
    
    
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
                                                  
                                    <center>  <h1 class="box-title">  Establecimiento:  <?php echo $establecimiento->Nombre_Establecimiento ?>&nbsp;&nbsp;&nbsp;Fecha actualización: <?php echo $fecha_actualizacion ?></h1> </center>

                                                    
                                                </div>

              <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">


                <thead>
                <tr>
                
               
                
              
             
                <th>DNI</th>
                <th>Nombre de Paciente</th>
                <th>Edad</th>                                
                <th>Mes</th>

                <th >Examen odontologico</th>
                <th>Instrucion higiene</th>
                <th>Asesoria nutricional</th>
                 <th>Profilaxis</th>
                <th>Fluor Barniz</th>
                <th>Fluor Gel</th>
               
                <th>Apli. sellantes</th>
                 
                <th>2 examen odont</th>
                <th>2 instrucion</th>
                <th>2 asesoria </th>
                <th>2 profilaxis </th>
                <th>2 Barniz</th>
                <th>2 Fluor Gel</th>
                
                <th>fin sellantes</th>
                <th>alta basica</th>
                
                <th>Detalles</th>

                </tr>
                </thead>
                <tbody>

                <?php
                                                            
             foreach ($result2 as $row) {
                                  
                         ?>

               <tr>
                  
                 
                 

                   
                  <td>
                       <center> <?php echo $row->Numero_Documento?></center>
                  </td>
                 
                  <td style="font-size:11px;">
                       <center> <?php echo $row->Nombre_Paciente ?></center>
                  </td>
                 <td>
                       <center> <?php echo $row->Edad_Reg?> - <?php echo $row->Tipo_Edad ?> </center>
                  </td>
                 
                  <td >
                       <center> <?php echo $row->Mes ?></center>
                  </td>
                 
               <?php if ($row->examen_odontologico_nino==1) { ?> 
                                                                  <td style="background-color:#48d1cc;font-size:14px;">
                                                                        <center> <b><?php echo $row->examen_odontologico_nino ?></b>

                                                                       
                                                                     </center>
                                                                    </td>

                                                                   
                                                                      <?php } elseif ($row->examen_odontologico_nino==0) { ?>
                                                                      <td style="background-color:#f5fffa;font-size:11px; ">
                                                                        <center> 
                                                                          
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php } else { ?>
                                                                      <td style="background-color:#ffbdc1;font-size:14px; ">
                                                                        <center> <b><?php echo $row->examen_odontologico_nino ?></b>
                                                                         
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php }  ?> 
                 
                       
               <?php if ($row->instrucion_nino==1) { ?> 
                                                                  <td style="background-color:#48d1cc;font-size:14px;">
                                                                        <center> <b><?php echo $row->instrucion_nino ?></b>

                                                                       
                                                                     </center>
                                                                    </td>

                                                                   
                                                                      <?php } elseif ($row->instrucion_nino==0) { ?>
                                                                      <td style="background-color:#f5fffa;font-size:11px; ">
                                                                        <center> 
                                                                          
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php } else { ?>
                                                                      <td style="background-color:#ffbdc1;font-size:14px; ">
                                                                        <center> <b><?php echo $row->instrucion_nino ?></b>
                                                                         
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php }  ?> 
                
                    <?php if ($row->asesoria_nino==1) { ?> 
                                                                  <td style="background-color:#48d1cc;font-size:14px;">
                                                                        <center> <b><?php echo $row->asesoria_nino ?></b>

                                                                       
                                                                     </center>
                                                                    </td>

                                                                   
                                                                      <?php } elseif ($row->asesoria_nino==0) { ?>
                                                                      <td style="background-color:#f5fffa;font-size:11px; ">
                                                                        <center> 
                                                                          
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php } else { ?>
                                                                      <td style="background-color:#ffbdc1;font-size:14px; ">
                                                                        <center> <b><?php echo $row->asesoria_nino ?></b>
                                                                         
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php }  ?> 
                   <?php if ($row->profilaxis_nino==1) { ?> 
                                                                  <td style="background-color:#48d1cc;font-size:14px;">
                                                                        <center> <b><?php echo $row->profilaxis_nino ?></b>

                                                                       
                                                                     </center>
                                                                    </td>

                                                                   
                                                                      <?php } elseif ($row->profilaxis_nino==0) { ?>
                                                                      <td style="background-color:#f5fffa;font-size:11px; ">
                                                                        <center> 
                                                                          
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php } else { ?>
                                                                      <td style="background-color:#ffbdc1;font-size:14px; ">
                                                                        <center> <b><?php echo $row->profilaxis_nino ?></b>
                                                                         
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php }  ?> 
                
                 
                  <?php if ($row->barniz_nino==1) { ?> 
                                                                  <td style="background-color:#48d1cc;font-size:14px;">
                                                                        <center> <b><?php echo $row->barniz_nino ?></b>

                                                                       
                                                                     </center>
                                                                    </td>

                                                                   
                                                                      <?php } elseif ($row->barniz_nino==0) { ?>
                                                                      <td style="background-color:#f5fffa;font-size:11px; ">
                                                                        <center> 
                                                                          
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php } else { ?>
                                                                      <td style="background-color:#ffbdc1;font-size:14px; ">
                                                                        <center> <b><?php echo $row->barniz_nino ?></b>
                                                                         
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php }  ?> 

                    <?php if ($row->fluor_gel_nino==1) { ?> 
                                                                  <td style="background-color:#48d1cc;font-size:14px;">
                                                                        <center> <b><?php echo $row->fluor_gel_nino ?></b>

                                                                       
                                                                     </center>
                                                                    </td>

                                                                   
                                                                      <?php } elseif ($row->fluor_gel_nino==0) { ?>
                                                                      <td style="background-color:#f5fffa;font-size:11px; ">
                                                                        <center> 
                                                                          
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php } else { ?>
                                                                      <td style="background-color:#ffbdc1;font-size:14px; ">
                                                                        <center> <b><?php echo $row->fluor_gel_nino ?></b>
                                                                         
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php }  ?>
                   
                
                   

                        <?php if ($row->sellantes_ninio==1) { ?> 
                                                                  <td style="background-color:#48d1cc;font-size:14px;">
                                                                        <center> <b><?php echo $row->sellantes_ninio ?></b>

                                                                       
                                                                     </center>
                                                                    </td>

                                                                   
                                                                      <?php } elseif ($row->sellantes_ninio==0) { ?>
                                                                      <td style="background-color:#f5fffa;font-size:11px; ">
                                                                        <center> 
                                                                          
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php } else { ?>
                                                                      <td style="background-color:#ffbdc1;font-size:14px; ">
                                                                        <center> <b><?php echo $row->sellantes_ninio ?></b>
                                                                         
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php }  ?> 
                  
                <?php if ($row->examen_odontologico_2nino==1) { ?> 
                                                                  <td style="background-color:#48d1cc;font-size:14px;">
                                                                        <center> <b><?php echo $row->examen_odontologico_2nino ?></b>

                                                                       
                                                                     </center>
                                                                    </td>

                                                                   
                                                                      <?php } elseif ($row->examen_odontologico_2nino==0) { ?>
                                                                      <td style="background-color:#fdf5e6;font-size:11px; ">
                                                                        <center> 
                                                                          
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php } else { ?>
                                                                      <td style="background-color:#ffbdc1;font-size:14px; ">
                                                                        <center> <b><?php echo $row->examen_odontologico_2nino ?></b>
                                                                         
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php }  ?> 
                      
                 <?php if ($row->asesoria_2nino==1) { ?> 
                                                                  <td style="background-color:#48d1cc;font-size:14px;">
                                                                        <center> <b><?php echo $row->asesoria_2nino ?></b>

                                                                       
                                                                     </center>
                                                                    </td>

                                                                   
                                                                      <?php } elseif ($row->asesoria_2nino==0) { ?>
                                                                      <td style="background-color:#fdf5e6;font-size:11px; ">
                                                                        <center> 
                                                                          
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php } else { ?>
                                                                      <td style="background-color:#ffbdc1;font-size:14px; ">
                                                                        <center> <b><?php echo $row->asesoria_2nino ?></b>
                                                                         
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                      <?php }  ?> 
                                                                          
                <?php if ($row->instrucion_2nino==1) { ?> 
                                                                  <td style="background-color:#48d1cc;font-size:14px;">
                                                                        <center> <b><?php echo $row->instrucion_2nino ?></b>

                                                                       
                                                                     </center>
                                                                    </td>

                                                                   
                                                                      <?php } elseif ($row->instrucion_2nino==0) { ?>
                                                                      <td style="background-color:#fdf5e6;font-size:11px; ">
                                                                        <center> 
                                                                          
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php } else { ?>
                                                                      <td style="background-color:#ffbdc1;font-size:14px; ">
                                                                        <center> <b><?php echo $row->instrucion_2nino ?></b>
                                                                         
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                      <?php }  ?> 
                 <?php if ($row->profilaxis_2nino==1) { ?> 
                                                                  <td style="background-color:#48d1cc;font-size:14px;">
                                                                        <center> <b><?php echo $row->profilaxis_2nino ?></b>

                                                                       
                                                                     </center>
                                                                    </td>

                                                                   
                                                                      <?php } elseif ($row->profilaxis_2nino==0) { ?>
                                                                      <td style="background-color:#fdf5e6;font-size:11px; ">
                                                                        <center> 
                                                                          
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php } else { ?>
                                                                      <td style="background-color:#ffbdc1;font-size:14px; ">
                                                                        <center> <b><?php echo $row->profilaxis_2nino ?></b>
                                                                         
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                      <?php }  ?>

                  <?php if ($row->barniz_2nino==1) { ?> 
                                                                  <td style="background-color:#48d1cc;font-size:14px;">
                                                                        <center> <b><?php echo $row->barniz_2nino ?></b>

                                                                       
                                                                     </center>
                                                                    </td>

                                                                   
                                                                      <?php } elseif ($row->barniz_2nino==0) { ?>
                                                                      <td style="background-color:#fdf5e6;font-size:11px; ">
                                                                        <center> 
                                                                          
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php } else { ?>
                                                                      <td style="background-color:#ffbdc1;font-size:14px; ">
                                                                        <center> <b><?php echo $row->barniz_2nino ?></b>
                                                                         
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                      <?php }  ?> 

                   <?php if ($row->fluor_gel_2nino==1) { ?> 
                                                                  <td style="background-color:#48d1cc;font-size:14px;">
                                                                        <center> <b><?php echo $row->fluor_gel_2nino ?></b>

                                                                       
                                                                     </center>
                                                                    </td>

                                                                   
                                                                      <?php } elseif ($row->fluor_gel_2nino==0) { ?>
                                                                      <td style="background-color:#fdf5e6;font-size:11px; ">
                                                                        <center> 
                                                                          
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php } else { ?>
                                                                      <td style="background-color:#ffbdc1;font-size:14px; ">
                                                                        <center> <b><?php echo $row->fluor_gel_2nino ?></b>
                                                                         
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                      <?php }  ?> 

                
                 <?php if ($row->sellantes_fin_ninio==1) { ?> 
                                                                  <td style="background-color:#48d1cc;font-size:14px;">
                                                                        <center> <b><?php echo $row->sellantes_fin_ninio ?></b>

                                                                       
                                                                     </center>
                                                                    </td>

                                                                   
                                                                      <?php } elseif ($row->sellantes_fin_ninio==0) { ?>
                                                                      <td style="background-color:#fdf5e6;font-size:11px; ">
                                                                        <center> 
                                                                          
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php } else { ?>
                                                                      <td style="background-color:#ffbdc1;font-size:14px; ">
                                                                        <center> <b><?php echo $row->sellantes_fin_ninio ?></b>
                                                                         
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                      <?php }  ?> 
                 <?php if ($row->alta_nino==1) { ?> 
                                                                  <td style="background-color:#48d1cc;font-size:14px;">
                                                                        <center> <b><?php echo $row->alta_nino ?></b>

                                                                       
                                                                     </center>
                                                                    </td>

                                                                   
                                                                      <?php } elseif ($row->alta_nino==0) { ?>
                                                                      <td style="background-color:#fdf5e6;font-size:11px; ">
                                                                        <center> 
                                                                          
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php } else { ?>
                                                                      <td style="background-color:#ffbdc1;font-size:14px; ">
                                                                        <center> <b><?php echo $row->alta_nino ?></b>
                                                                         
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                      <?php }  ?> 
                
               

                

                  <td>
                    <center>
                                                                    <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_bucal_dni/<?php echo $row->Mes?>/<?php echo $row->Id_Paciente?>"><i class="fa fa-eye bigger-200"></i></a></center>
                </td>
               
                </tr>
                 <?php
                                                           }
                    ?>
                
                </tbody>

               
               
              </table>
            </div>
            <!-- /.box-body -->
</div>
</div>

 