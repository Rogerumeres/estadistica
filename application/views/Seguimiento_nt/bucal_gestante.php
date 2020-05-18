
    <?php
$atributos = array( 'id' => 'miformulario','name'=>'form','class'=>'form-horizontal');
//echo form_open(null, $atributos);
echo form_open_multipart('Seguimiento_nt/Seguimiento_bucal_gestante',$atributos);
?>
<div class="box-header">

 <div class="col-md-6">

 
    
  <div class="form-group">
 
    <select class="form-control select2" name="establec" id="establec">
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
                                                  
                                    <center>  <h3 class="box-title">  Establecimiento:  <?php echo $establecimiento->Nombre_Establecimiento ?>&nbsp;&nbsp;&nbsp;Fecha actualización: <?php echo $fecha_actualizacion ?></h3> </center>

                                                    
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
                 
               <?php if ($row->examen_g==1) { ?> 
                                                                  <td style="background-color:#48d1cc;font-size:14px;">
                                                                        <center> <b><?php echo $row->examen_g ?></b>

                                                                       
                                                                     </center>
                                                                    </td>

                                                                   
                                                                      <?php } elseif ($row->examen_g==0) { ?>
                                                                      <td style="background-color:#f5fffa;font-size:11px; ">
                                                                        <center> 
                                                                          
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php } else { ?>
                                                                      <td style="background-color:#ffbdc1;font-size:14px; ">
                                                                        <center> <b><?php echo $row->examen_g ?></b>
                                                                         
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php }  ?> 
                 
                       
               <?php if ($row->instrucion_g==1) { ?> 
                                                                  <td style="background-color:#48d1cc;font-size:14px;">
                                                                        <center> <b><?php echo $row->instrucion_g ?></b>

                                                                       
                                                                     </center>
                                                                    </td>

                                                                   
                                                                      <?php } elseif ($row->instrucion_g==0) { ?>
                                                                      <td style="background-color:#f5fffa;font-size:11px; ">
                                                                        <center> 
                                                                          
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php } else { ?>
                                                                      <td style="background-color:#ffbdc1;font-size:14px; ">
                                                                        <center> <b><?php echo $row->instrucion_g ?></b>
                                                                         
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php }  ?> 
                
                    <?php if ($row->asesoria_g==1) { ?> 
                                                                  <td style="background-color:#48d1cc;font-size:14px;">
                                                                        <center> <b><?php echo $row->asesoria_g ?></b>

                                                                       
                                                                     </center>
                                                                    </td>

                                                                   
                                                                      <?php } elseif ($row->asesoria_g==0) { ?>
                                                                      <td style="background-color:#f5fffa;font-size:11px; ">
                                                                        <center> 
                                                                          
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php } else { ?>
                                                                      <td style="background-color:#ffbdc1;font-size:14px; ">
                                                                        <center> <b><?php echo $row->asesoria_g ?></b>
                                                                         
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php }  ?> 
                   <?php if ($row->profilaxis_g==1) { ?> 
                                                                  <td style="background-color:#48d1cc;font-size:14px;">
                                                                        <center> <b><?php echo $row->profilaxis_g ?></b>

                                                                       
                                                                     </center>
                                                                    </td>

                                                                   
                                                                      <?php } elseif ($row->profilaxis_g==0) { ?>
                                                                      <td style="background-color:#f5fffa;font-size:11px; ">
                                                                        <center> 
                                                                          
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php } else { ?>
                                                                      <td style="background-color:#ffbdc1;font-size:14px; ">
                                                                        <center> <b><?php echo $row->profilaxis_g ?></b>
                                                                         
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php }  ?> 
                
                 
                  <?php if ($row->barniz_g==1) { ?> 
                                                                  <td style="background-color:#48d1cc;font-size:14px;">
                                                                        <center> <b><?php echo $row->barniz_g ?></b>

                                                                       
                                                                     </center>
                                                                    </td>

                                                                   
                                                                      <?php } elseif ($row->barniz_g==0) { ?>
                                                                      <td style="background-color:#f5fffa;font-size:11px; ">
                                                                        <center> 
                                                                          
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php } else { ?>
                                                                      <td style="background-color:#ffbdc1;font-size:14px; ">
                                                                        <center> <b><?php echo $row->barniz_g ?></b>
                                                                         
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php }  ?> 

                    <?php if ($row->fluor_g==1) { ?> 
                                                                  <td style="background-color:#48d1cc;font-size:14px;">
                                                                        <center> <b><?php echo $row->fluor_g ?></b>

                                                                       
                                                                     </center>
                                                                    </td>

                                                                   
                                                                      <?php } elseif ($row->fluor_g==0) { ?>
                                                                      <td style="background-color:#f5fffa;font-size:11px; ">
                                                                        <center> 
                                                                          
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php } else { ?>
                                                                      <td style="background-color:#ffbdc1;font-size:14px; ">
                                                                        <center> <b><?php echo $row->fluor_g ?></b>
                                                                         
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php }  ?>
                   
                
                   

                        <?php if ($row->sellantes_gestante_inicio==1) { ?> 
                                                                  <td style="background-color:#48d1cc;font-size:14px;">
                                                                        <center> <b><?php echo $row->sellantes_gestante_inicio ?></b>

                                                                       
                                                                     </center>
                                                                    </td>

                                                                   
                                                                      <?php } elseif ($row->sellantes_gestante_inicio==0) { ?>
                                                                      <td style="background-color:#f5fffa;font-size:11px; ">
                                                                        <center> 
                                                                          
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php } else { ?>
                                                                      <td style="background-color:#ffbdc1;font-size:14px; ">
                                                                        <center> <b><?php echo $row->sellantes_gestante_inicio ?></b>
                                                                         
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php }  ?> 
                  
                <?php if ($row->examen_2g==1) { ?> 
                                                                  <td style="background-color:#48d1cc;font-size:14px;">
                                                                        <center> <b><?php echo $row->examen_2g ?></b>

                                                                       
                                                                     </center>
                                                                    </td>

                                                                   
                                                                      <?php } elseif ($row->examen_2g==0) { ?>
                                                                      <td style="background-color:#fdf5e6;font-size:11px; ">
                                                                        <center> 
                                                                          
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php } else { ?>
                                                                      <td style="background-color:#ffbdc1;font-size:14px; ">
                                                                        <center> <b><?php echo $row->examen_2g ?></b>
                                                                         
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php }  ?> 
                      
                 <?php if ($row->asesoria_2g==1) { ?> 
                                                                  <td style="background-color:#48d1cc;font-size:14px;">
                                                                        <center> <b><?php echo $row->asesoria_2g ?></b>

                                                                       
                                                                     </center>
                                                                    </td>

                                                                   
                                                                      <?php } elseif ($row->asesoria_2g==0) { ?>
                                                                      <td style="background-color:#fdf5e6;font-size:11px; ">
                                                                        <center> 
                                                                          
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php } else { ?>
                                                                      <td style="background-color:#ffbdc1;font-size:14px; ">
                                                                        <center> <b><?php echo $row->asesoria_2g ?></b>
                                                                         
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                      <?php }  ?> 
                                                                          
                <?php if ($row->instrucion_2g==1) { ?> 
                                                                  <td style="background-color:#48d1cc;font-size:14px;">
                                                                        <center> <b><?php echo $row->instrucion_2g ?></b>

                                                                       
                                                                     </center>
                                                                    </td>

                                                                   
                                                                      <?php } elseif ($row->instrucion_2g==0) { ?>
                                                                      <td style="background-color:#fdf5e6;font-size:11px; ">
                                                                        <center> 
                                                                          
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php } else { ?>
                                                                      <td style="background-color:#ffbdc1;font-size:14px; ">
                                                                        <center> <b><?php echo $row->instrucion_2g ?></b>
                                                                         
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                      <?php }  ?> 
                 <?php if ($row->profilaxis_2g==1) { ?> 
                                                                  <td style="background-color:#48d1cc;font-size:14px;">
                                                                        <center> <b><?php echo $row->profilaxis_2g ?></b>

                                                                       
                                                                     </center>
                                                                    </td>

                                                                   
                                                                      <?php } elseif ($row->profilaxis_2g==0) { ?>
                                                                      <td style="background-color:#fdf5e6;font-size:11px; ">
                                                                        <center> 
                                                                          
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php } else { ?>
                                                                      <td style="background-color:#ffbdc1;font-size:14px; ">
                                                                        <center> <b><?php echo $row->profilaxis_2g ?></b>
                                                                         
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                      <?php }  ?>

                  <?php if ($row->barniz_2g==1) { ?> 
                                                                  <td style="background-color:#48d1cc;font-size:14px;">
                                                                        <center> <b><?php echo $row->barniz_2g ?></b>

                                                                       
                                                                     </center>
                                                                    </td>

                                                                   
                                                                      <?php } elseif ($row->barniz_2g==0) { ?>
                                                                      <td style="background-color:#fdf5e6;font-size:11px; ">
                                                                        <center> 
                                                                          
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php } else { ?>
                                                                      <td style="background-color:#ffbdc1;font-size:14px; ">
                                                                        <center> <b><?php echo $row->barniz_2g ?></b>
                                                                         
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                      <?php }  ?> 

                   <?php if ($row->fluor_2g==1) { ?> 
                                                                  <td style="background-color:#48d1cc;font-size:14px;">
                                                                        <center> <b><?php echo $row->fluor_2g ?></b>

                                                                       
                                                                     </center>
                                                                    </td>

                                                                   
                                                                      <?php } elseif ($row->fluor_2g==0) { ?>
                                                                      <td style="background-color:#fdf5e6;font-size:11px; ">
                                                                        <center> 
                                                                          
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php } else { ?>
                                                                      <td style="background-color:#ffbdc1;font-size:14px; ">
                                                                        <center> <b><?php echo $row->fluor_2g ?></b>
                                                                         
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                      <?php }  ?> 

                
                 <?php if ($row->sellantes_fin_gestante==1) { ?> 
                                                                  <td style="background-color:#48d1cc;font-size:14px;">
                                                                        <center> <b><?php echo $row->sellantes_fin_gestante ?></b>

                                                                       
                                                                     </center>
                                                                    </td>

                                                                   
                                                                      <?php } elseif ($row->sellantes_fin_gestante==0) { ?>
                                                                      <td style="background-color:#fdf5e6;font-size:11px; ">
                                                                        <center> 
                                                                          
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php } else { ?>
                                                                      <td style="background-color:#ffbdc1;font-size:14px; ">
                                                                        <center> <b><?php echo $row->sellantes_fin_gestante ?></b>
                                                                         
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                      <?php }  ?> 
                 <?php if ($row->altabasica_g==1) { ?> 
                                                                  <td style="background-color:#48d1cc;font-size:14px;">
                                                                        <center> <b><?php echo $row->altabasica_g ?></b>

                                                                       
                                                                     </center>
                                                                    </td>

                                                                   
                                                                      <?php } elseif ($row->altabasica_g==0) { ?>
                                                                      <td style="background-color:#fdf5e6;font-size:11px; ">
                                                                        <center> 
                                                                          
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php } else { ?>
                                                                      <td style="background-color:#ffbdc1;font-size:14px; ">
                                                                        <center> <b><?php echo $row->altabasica_g ?></b>
                                                                         
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

 