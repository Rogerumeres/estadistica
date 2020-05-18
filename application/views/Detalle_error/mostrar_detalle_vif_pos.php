                  

  

                                            <div class="widget-box widget-color-blue" id="widget-box-2">
                                                
  
                                                
                                                
                                                <div class="widget-header">
                                                  
                                            <center> Establecimiento:<?php echo $establec ?></center>
                                                    
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
                                                                FichaFam
                                                                    </th>
                                                                    <th>                                                             
                                                                    DNI
                                                                    </th>
                                                                   <th>
                                                                   Paciente
                                                                    </th>
                                                                      <th>
                                                                    Detalle Registro
                                                                    </th>
                                                                    <th>                                                             
                                                                    Lot_pag_Reg
                                                                    </th>
                                                                    <th>
                                                                    edad
                                                                    </th>
                                                                   <th>
                                                                   Profesional
                                                                    </th>
                                                                    <th>
                                                                        Digitador
                                                                    </th>
                                                                  
                                                                </tr>
                                                            </thead>

                                                            <tbody>

                                                             <?php
                                                           
                                                            foreach ($datos as $row) {
                                  
                                                                     ?> 
                                                                <tr>
                                                                    
                                                                        
                                                                   
                                                                    <td>
                                                                       <center> <?php echo $row->Fecha ?></center>
                                                                    </td>
                                                                    <td>
                                                                       <center> <?php echo $row->FichaFam ?></center>
                                                                    </td>
                                                                     <td>
                                                                       <center> <?php echo $row->Nro_Doc ?></center>
                                                                    </td>
                                                                    <td>
                                                                       <center> <?php echo $row->Paciente ?></center>
                                                                    </td>
                                                                     <td>
                                                                       
                                                                        <input type="text"  size="10"  disabled value="<?php echo $row->Diag1 ?>  <?php echo $row->Lab1 ?>  <?php echo $row->Cie1 ?>" />
                                                                         
                                                                        <input type="text"  size="10"  disabled value="<?php echo $row->Diag2 ?>  <?php echo $row->Lab2 ?>  <?php echo $row->Cie2 ?>" />
                                                                        <input type="text"  size="10"  disabled value="<?php echo $row->Diag3 ?>  <?php echo $row->Lab3 ?>  <?php echo $row->Cie3 ?>" />
                                                                         <input type="text"  size="10"  disabled value="<?php echo $row->Diag4 ?>  <?php echo $row->Lab4 ?>  <?php echo $row->Cie4 ?>" />
                                                                         <input type="text"  size="10"  disabled value="<?php echo $row->Diag5 ?>  <?php echo $row->Lab5 ?>  <?php echo $row->Cie5 ?>" />
                                                                         <input type="text"  size="10"  disabled value="<?php echo $row->Diag6 ?>  <?php echo $row->Lab6 ?>  <?php echo $row->Cie6 ?>" />
                                                                    </td>
                                                                    <td>
                                                                       <center> <?php echo $row->Lot_pag_Reg ?></center>
                                                                    </td>
                                                                   <td>
                                                                       <center> <?php echo $row->Edad ?></center>
                                                                    </td>
                                                                    <td>
                                                                       <center> <?php echo $row->Profesional ?></center>
                                                                    </td>
                                                                    
                                                                    <td>
                                                                       <center> <?php echo $row->Digitador ?></center>
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