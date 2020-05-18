                  

  

                                            <div class="widget-box widget-color-blue" id="widget-box-2">
                                                
  
                                                
                                                
                                                <div class="widget-header">
                                                  

                                                    
                                                </div>

                                                <div class="widget-body">
                                                    <div class="widget-main no-padding">
                                                        <table class="table table-striped table-bordered table-hover">
                                                            <thead class="thin-border-bottom">

                                                                <tr>
                                                                   
                                                                    
                                                                  
                                                                     <th>                                                                   
                                                                Establecimiento
                                                                    </th>
                                                                    <th>                                                             
                                                                Mes
                                                                    </th>
                                                                    <th>                                                             
                                                                DNI
                                                                    </th>
                                                                    <th>
                                                                    Nombres y Apellidos
                                                                    </th>
                                                                     <th>                                                             
                                                                Edad
                                                                    </th>
                                                                    <th>                                                             
                                                                Dia ATC
                                                                    </th>
                                                                   
                                                                   
                                                                     <th>
                                                                    Atiende
                                                                    </th>
                                                                     <th>
                                                                    Lote-Pagina-Registro
                                                                    </th>
                                                                    <th>
                                                                    Detalle Registro
                                                                    </th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>

                                                             <?php
                                                           
                                                            foreach ($datos as $row) {
                                  
                                                                     ?> 
                                                                <tr>
                                                                    
                                                                        
                                                                   
                                                                    <td>
                                                                       <center> <?php echo $row->establecimiento ?></center>
                                                                    </td>
                                                                    <td  bgcolor="#48d1cc">
                                                                       <center> <?php echo $row->MES ?></center>
                                                                    </td>
                                                                     <td>
                                                                       <center> <?php echo $row->Nro_Doc ?></center>
                                                                    </td>
                                                                    <td>
                                                                       <center> <?php echo $row->paciente ?></center>
                                                                    </td>
                                                                    <td>
                                                                       <center> <?php echo $row->Edad ?></center>
                                                                    </td>
                                                                    <td>
                                                                       <center> <?php echo $row->Dia ?></center>
                                                                    </td>
                                                                     <td>
                                                                       <center> <?php echo $row->atiende ?></center>
                                                                    </td>
                                                                    <td>
                                                                       <center> <?php echo $row->lote ?>|<?php echo $row->num_pag ?>|<?php echo $row->num_reg ?></center>
                                                                    </td>
                                                                    
                                                                    
                                                                    <td>
                                                                       <center> <?php echo $row->id_tipdiag1 ?> - <?php echo $row->valor_lab1 ?> - <?php echo $row->id_ciex1 ?> | <?php echo $row->id_tipdiag2 ?> - <?php echo $row->valor_lab2 ?> - <?php echo $row->id_ciex2 ?> | <?php echo $row->id_tipdiag3 ?> - <?php echo $row->valor_lab3 ?> -<?php echo $row->id_ciex3 ?> | <?php echo $row->id_tipdiag4 ?> - <?php echo $row->valor_lab4 ?> -<?php echo $row->id_ciex4 ?> | <?php echo $row->id_tipdiag5 ?> - <?php echo $row->valor_lab5 ?> -<?php echo $row->id_ciex5 ?> | <?php echo $row->id_tipdiag6 ?> - <?php echo $row->valor_lab6 ?> -<?php echo $row->id_ciex6 ?></center>
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