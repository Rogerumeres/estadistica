                   

            
            
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
                                                                                  
                <th >Lote Página Registro</th>
             
                <th>Primera Visita</th>
                 <th>Segunda Visita</th>
                  <th>Tercera Visita</th>
                   <th>Cuarta Visita</th>
                  
                     
                </tr>
                </thead>
                <tbody>

                <?php
                                                            
             foreach ($datos as $row) {
                                  
                         ?>

                <tr>
                  
                  <td bgcolor="#48d1cc">
                      <center> <?php echo $row->DNI_HIS ?></center>
                  </td>
                  
                  <td> 
                    <center> <?php echo $row->DNI_PADRON ?></center>
                  </td>
                  <td> 
                    <center> <?php echo $row->NOMBRE_NIÑO ?></center>
                  </td>

                  <td>
                       <center> <?php echo $row->FECHA_NAC?></center>
                  </td>
                 
                  <td >
                       <center> <?php echo $row->Edad ?></center>
                  </td>
                  <td>
                       <center> <?php echo $row->Tipo_Edad ?></center>
                   </td>
                    <td >
                       <center> <?php echo $row->NOMBRE_EESS_ATENCION ?></center>
                  </td>
                 

                  <td bgcolor="#48d1cc">
                       <center> <?php echo $row->Lote_Pag_Reg ?></center>
                  </td>
                  <td >
                       <center> <?php echo $row->Primera_visita_Anemia  ?></center>
                  </td>
                   <td >
                       <center> <?php echo $row->Segunda_visita_Anemia ?></center>
                  </td>
                   <td >
                       <center> <?php echo $row->Tercera_visita_Anemia ?></center>
                  </td>
                   <td >
                       <center> <?php echo $row->Cuarta_visita_Anemia ?></center>
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



           