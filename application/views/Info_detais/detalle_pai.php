                  

  

                                            <div class="widget-box widget-color-blue" id="widget-box-2">
                                                
  
                                                
                                                
                                                <div class="widget-header">
                                                  
                                                                                             
                                                </div>

                                                <div class="widget-body">
                                                    <div class="widget-main no-padding">
                                                        <table class="table table-striped table-bordered table-hover">
                                                            <thead class="thin-border-bottom">

                                                                <tr>
                                                                      
                                                                     <th>                                                                   
                                                                Fecha
                                                                    </th>
                                                                     <th>                                                             
                                                                    DNI
                                                                    </th>
                                                                   <th>
                                                                   Paciente
                                                                    </th>
                                                                     <th>
                                                                   Fecha nacimiento
                                                                    </th>  
                                                                   
                                                                    <th>
                                                                    Edad
                                                                    </th>
                                                                      <th>                                                             
                                                                Tipo Edad
                                                                    </th>
                                                                   <th>
                                                                   Profesional
                                                                    </th>
                                                                   
                                                                     <th>                                                             
                                                                    Lot_pag_Reg
                                                                    </th>
                                                                   <th>
                                                                    Detalle Registro
                                                                    </th>
                                                                    <th>
                                                                    Descripción
                                                                    </th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>

                                                             <?php
                                                           
                                                            foreach ($datos as $row) {
                                  
                                                                     ?> 
                                                                <tr>
                                                                    
                                                                      
                                                                    
                                                                    <td>
                                                                       <center> <?php echo $row->Fecha_Atencion ?></center>
                                                                    </td>
                                                                    
                                                                     <td>
                                                                       <center> <?php echo $row->Numero_Documento ?></center>
                                                                    </td>
                                                                    <td>
                                                                       <center> <?php echo $row->Nombre_Paciente ?></center>
                                                                    </td>
                                                                      <td>
                                                                       <center> <?php echo $row->Fecha_Nacimiento ?></center>
                                                                    </td>
                                                                    <td>
                                                                       <center> <?php echo $row->Edad_Reg ?></center>
                                                                    </td>
                                                                   <td>
                                                                       <center> <?php echo $row->Tipo_Edad ?></center>
                                                                    </td>
                                                                    <td>
                                                                       <center> <?php echo $row->Personal_Salud ?></center>
                                                                    </td>
                                                                    
                                                                   
                                                                   <td>
                                                                       
                                                                       <center> <?php echo $row->Lote ?> - <?php echo $row->Num_Pag ?> - <?php echo $row->Num_Reg ?></center>
                                                                       
                                                                    </td>
                                                                    
                                                                    <td>
                                                                       
                                                                              <?php echo $row->Tipo_Diagnostico ?> - <?php echo $row->Valor_Lab ?> - <?php echo $row->Codigo_Item ?>


                                                                      
                                                                    </td>
                                                                    
                                                                     <td>
                                                                       
                                                                         <?php echo $row->Descripcion_item ?>
                                                                       
                                                                    </td>
                                                                     
                                                                   
                                                                </tr>

                                                               <?php
                                                           }
                                                           ?>

                                                                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                

                                                <!--
                                          <button type="button" class="btn btn-primary btn-lg btn-block" onClick="history.go(-2);">Retornar</button>