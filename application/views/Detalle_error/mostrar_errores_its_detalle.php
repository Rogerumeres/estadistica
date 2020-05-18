<div class="row">
                  <div class="col-xs-12">
                   <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                      <thead>
                          <tr>
                                                                     

                                                                        <th class="hidden-480">                                                                   
                                                                Establecimiento
                                                                    </th >                                                             
                                                                  
                                                                     <th class="hidden-480">                                                                   
                                                                Fecha Atención
                                                                    </th>
                                                                     <th class="hidden-480">                                                             
                                                                    DNI
                                                                    </th>
                                                                   <th >
                                                                   Paciente
                                                                    </th>
                                                                      
                                                                   
                                                                    <th class="hidden-480">
                                                                    Edad
                                                                    </th>
                                                                      <th class="hidden-480">                                                             
                                                                Tipo Edad
                                                                    </th>
                                                                   <th class="hidden-480">
                                                                   Profesional
                                                                    </th>
                                                                    <th class="hidden-480">
                                                                        Digitador
                                                                    </th>
                                                                     <th class="hidden-480">                                                             
                                                                    Lot_pag_Reg
                                                                    </th>
                                                                   <th>
                                                                    Detalle_Registro
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
                                                                                                                                           
                                                                    <td class="hidden-480">
                                                                       <?php echo $row->Nombre_Establecimiento ?>
                                                                    </td>
                                                                    <td class="hidden-480">
                                                                        <?php echo $row->Fecha_Atencion ?>
                                                                    </td>
                                                                    
                                                                    <td class="hidden-480">
                                                                        <?php echo $row->Numero_Documento ?>
                                                                    </td>
                                                                    <td >
                                                                        <?php echo $row->Nombre_Paciente ?>
                                                                    </td>
                                                                     
                                                                    <td class="hidden-480">
                                                                        <?php echo $row->Edad_Reg ?>
                                                                    </td>
                                                                    <td class="hidden-480">
                                                                       <?php echo $row->Tipo_Edad ?>
                                                                    </td>
                                                                    <td class="hidden-480">
                                                                      <?php echo $row->Personal_Salud ?>
                                                                    </td>
                                                                    
                                                                    <td class="hidden-480">
                                                                       <?php echo $row->Registrador ?>
                                                                    </td>
                                                                    <td class="hidden-480">
                                                                       
                                                                       <?php echo $row->Lote ?> - <?php echo $row->Num_Pag ?> - <?php echo $row->Num_Reg ?>
                                                                       
                                                                    </td>
                                                                    
                                                                    <td>
                                                                       
                                                                              <?php echo $row->Tipo_Diagnostico ?> - <?php echo $row->Valor_Lab ?> - <?php echo $row->Codigo_Item ?>



                                                                      
                                                                    </td>
                                                                    
                                                                    <td>
                                                                       
                                                                         <?php echo $row->Descripcion_Item ?>
                                                                       
                                                                    </td>
                                                                     
                                                                   
                                                                </tr>
                                                                  
                                                              
                                                              <?php
                                                                  
                                                              
                                                            
                                                           }
                                                           ?>

                        
                      </tbody>
                    </table>
                  </div><!-- /.span -->
                </div><!-- /.row -->