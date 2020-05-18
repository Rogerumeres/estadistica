                   

            
            
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
                <th>EE. Atención Padron</th>
                <th>   Mes  </th>                                                                      
                <th >Lote Página Registro</th>
             
                <th>1° Suplementación</th>
                 <th>1° Dosaje</th>
                 <th>2° Suplementación</th>
                  <th>3° Suplementación</th>
                   <th>4° Suplementación</th>
                    <th>5° Suplementación</th>
                   <th>6° Suplementación</th>
                   
                     
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
                  <td> 
                    <center  style="font-size:11px;"> <?php echo $row->NOMBRE_NIÑO ?></center>
                  </td>

                  <td>
                       <center> <?php echo $row->FECHA_NAC?></center>
                  </td>
                 
                  <td style="font-size:11px; ">
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

                <?php if ($row->SUPLE_PREV_6_MESES=='') { ?> 

                                                                    <td>
                                                                        <center> <?php echo $row->SUPLE_PREV_6_MESES ?></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td style="background-color:#ffbdc1;font-size:11px; ">
                                                                        <center> <b><?php echo $row->SUPLE_PREV_6_MESES ?></b></center>
                                                                    </td>
                                                                      <?php }  ?>

                      <?php if ($row->DOSAJE_6_MESES=='') { ?> 

                                                                    <td>
                                                                        <center> <?php echo $row->DOSAJE_6_MESES ?></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td style="background-color:#ffbdc1;font-size:11px;">
                                                                        <center> <b><?php echo $row->DOSAJE_6_MESES ?></b></center>
                                                                    </td>
                                                                      <?php }  ?>                                                   


                  <?php if ($row->SUPLE_PREV_7_MESES=='') { ?> 

                                                                    <td>
                                                                        <center> <?php echo $row->SUPLE_PREV_7_MESES ?></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td style="background-color:#ffbdc1;font-size:11px;">
                                                                        <center><b> <?php echo $row->SUPLE_PREV_7_MESES ?></b></center>
                                                                    </td>
                                                                      <?php }  ?>

                   <?php if ($row->SUPLE_PREV_8_MESES=='') { ?> 

                                                                    <td>
                                                                        <center> <?php echo $row->SUPLE_PREV_8_MESES ?></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td style="background-color:#ffbdc1;font-size:11px;">
                                                                        <center><B> <?php echo $row->SUPLE_PREV_8_MESES ?></B></center>
                                                                    </td>
                                                                      <?php }  ?>
                   <?php if ($row->SUPLE_PREV_9_MESES=='') { ?> 

                                                                    <td>
                                                                        <center> <?php echo $row->SUPLE_PREV_9_MESES ?></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td style="background-color:#ffbdc1;font-size:11px;">
                                                                        <center> <b><?php echo $row->SUPLE_PREV_9_MESES ?></b></center>
                                                                    </td>
                                                                      <?php }  ?>
                   
                
                     <?php if ($row->SUPLE_PREV_10_MESES=='') { ?> 

                                                                    <td>
                                                                        <center> <?php echo $row->SUPLE_PREV_10_MESES ?></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td style="background-color:#ffbdc1;font-size:11px;">
                                                                        <center> <b><?php echo $row->SUPLE_PREV_10_MESES ?></b></center>
                                                                    </td>
                                                                      <?php }  ?> 
                      <?php if ($row->SUPLE_PREV_11_MESES=='') { ?> 

                                                                    <td>
                                                                        <center> <?php echo $row->SUPLE_PREV_11_MESES ?></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td style="background-color:#ffbdc1;font-size:11px;">
                                                                        <center> <b><?php echo $row->SUPLE_PREV_11_MESES ?></b></center>
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



           