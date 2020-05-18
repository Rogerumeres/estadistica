                   

            
            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                 

                <th>  DNI HIS     </th>
               
                <th>   DNI Padron  </th>    
                <th> Nombre Niño   </th>   
                <th>Fecha nacimiento</th>
                <th>Edad</th>
                <th>Tipo edad</th>
                <th>EE. Atención</th>
                   <th>Mes</th>                                                               
                <th >Lote Página Registro</th>
             
                <th>Dx Anemia</th>
                 <th>1er Trata</th>
                  <th>2do Trata</th>
                   <th>3er Trata</th>
                    <th>4to Trata</th>
                    <th>5to Trata</th>
                    <th>6to Trata</th>
                     <th>TA Trata</th>
                     <th>1ra Visita</th>
                    <th>2do Visita</th>
                     <th>3ra Visita</th>
                     <th>Error Anemia</th>
                     
                </tr>
                </thead>
                <tbody>

                <?php
                                                            
             foreach ($datos as $row) {
                                  
                         ?>

                <tr>
                  
                 <td bgcolor="#48d1cc">
                      <center>  <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_nino/<?php echo $row->DNI_HIS?>"><?php echo $row->DNI_HIS ?></a></center>
                  </td>
                  
                  <td> 
                    <center> <?php echo $row->DNI_PADRON ?></center>
                  </td>
                  <td style="font-size:11px;"> 
                    <center> <?php echo $row->NOMBRE_NIÑO ?></center>
                  </td>

                  <td>
                       <center> <?php echo $row->FECHA_NAC?></center>
                  </td>
                 
                  <td style="font-size:11px;">
                       <center> <?php echo $row->Edad ?></center>
                  </td>
                  <td>
                       <center> <?php echo $row->Tipo_Edad ?></center>
                   </td>
                    <td >
                       <center> <?php echo $row->NOMBRE_EESS_ATENCION ?></center>
                  </td>
                  <td >
                       <center> <?php echo $row->Mes ?></center>
                  </td>

                  <td bgcolor="#48d1cc">
                       <center> <?php echo $row->Lote_Pag_Reg ?></center>
                  </td>
                 

                   <?php if ($row->Diagnostico_Anemia=='') { ?> 

                                                                    <td>
                                                                        <center> <?php echo $row->Diagnostico_Anemia ?></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td style="background-color:#79d1ff;font-size:11px; ">
                                                                        <center> <b><?php echo $row->Diagnostico_Anemia ?></b></center>
                                                                    </td>
                                                                      <?php }  ?>


                   <?php if ($row->Primera_Tratamiento_Anemia=='') { ?> 

                                                                    <td>
                                                                        <center> <?php echo $row->Primera_Tratamiento_Anemia ?></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td style="background-color:#79d1ff;font-size:11px; ">
                                                                        <center> <b><?php echo $row->Primera_Tratamiento_Anemia ?></b></center>
                                                                    </td>
                                                                      <?php }  ?>

                     <?php if ($row->Segunda_Tratamiento_Anemia=='') { ?> 

                                                                    <td>
                                                                        <center> <?php echo $row->Segunda_Tratamiento_Anemia ?></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td style="background-color:#79d1ff;font-size:11px; ">
                                                                        <center> <b><?php echo $row->Segunda_Tratamiento_Anemia ?></b></center>
                                                                    </td>
                                                                      <?php }  ?>
                                                                      
                     <?php if ($row->Tercera_Tratamiento_Anemia=='') { ?> 

                                                                    <td>
                                                                        <center> <?php echo $row->Tercera_Tratamiento_Anemia ?></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td style="background-color:#79d1ff;font-size:11px; ">
                                                                        <center> <b><?php echo $row->Tercera_Tratamiento_Anemia ?></b></center>
                                                                    </td>
                                                                      <?php }  ?>
                                                                      
                      <?php if ($row->cuarto_Tratamiento_Anemia=='') { ?> 

                                                                    <td>
                                                                        <center> <?php echo $row->cuarto_Tratamiento_Anemia ?></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td style="background-color:#79d1ff;font-size:11px; ">
                                                                        <center> <b><?php echo $row->cuarto_Tratamiento_Anemia ?></b></center>
                                                                    </td>
                                                                      <?php }  ?>   

                      <?php if ($row->Quinto_Tratamiento_Anemia=='') { ?> 

                                                                    <td>
                                                                        <center> <?php echo $row->Quinto_Tratamiento_Anemia ?></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td style="background-color:#79d1ff;font-size:11px; ">
                                                                        <center> <b><?php echo $row->Quinto_Tratamiento_Anemia ?></b></center>
                                                                    </td>
                                                                      <?php }  ?>   
                                                                      
                     <?php if ($row->Sexta_Tratamiento_Anemia=='') { ?> 

                                                                    <td>
                                                                        <center> <?php echo $row->Sexta_Tratamiento_Anemia ?></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td style="background-color:#79d1ff;font-size:11px; ">
                                                                        <center> <b><?php echo $row->Sexta_Tratamiento_Anemia ?></b></center>
                                                                    </td>
                                                                      <?php }  ?>   
                                                                      
                       <?php if ($row->Termino_Tratamiento_Anemia=='') { ?> 

                                                                    <td>
                                                                        <center> <?php echo $row->Termino_Tratamiento_Anemia ?></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td style="background-color:#79d1ff;font-size:11px; ">
                                                                        <center> <b><?php echo $row->Termino_Tratamiento_Anemia ?></b></center>
                                                                    </td>
                                                                      <?php }  ?>   

                      <?php if ($row->Primera_visita_Anemia=='') { ?> 

                                                                    <td>
                                                                        <center> <?php echo $row->Primera_visita_Anemia ?></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td style="background-color:#19e67f;font-size:11px; ">
                                                                        <center> <b><?php echo $row->Primera_visita_Anemia ?></b></center>
                                                                    </td>
                                                                      <?php }  ?>   

                      <?php if ($row->Segunda_visita_Anemia=='') { ?> 

                                                                    <td>
                                                                        <center> <?php echo $row->Segunda_visita_Anemia ?></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td style="background-color:#19e67f;font-size:11px; ">
                                                                        <center> <b><?php echo $row->Segunda_visita_Anemia ?></b></center>
                                                                    </td>
                                                                      <?php }  ?>  
                                                                      
                      <?php if ($row->Tercera_visita_Anemia=='') { ?> 

                                                                    <td>
                                                                        <center> <?php echo $row->Tercera_visita_Anemia ?></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td style="background-color:#19e67f;font-size:11px; ">
                                                                        <center> <b><?php echo $row->Tercera_visita_Anemia ?></b></center>
                                                                    </td>
                                                                      <?php }  ?>                                                                                                  
                                                                      
                     <?php if ($row->Error_Anemia=='') { ?> 

                                                                    <td>
                                                                        <center> <?php echo $row->Error_Anemia ?></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td style="background-color:#ffbca4;font-size:11px; ">
                                                                        <center> <b><?php echo $row->Error_Anemia ?></b></center>
                                                                    </td>
                                                                      <?php }  ?>   

                  
                  
                   
                
                  
               
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



           