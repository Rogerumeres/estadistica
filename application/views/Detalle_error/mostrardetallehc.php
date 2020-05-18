                  

  

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
                                                                Dia ATC
                                                                    </th>
                                                                    <th>
                                                                    Lote-Pagina-Registro
                                                                    </th>
                                                                   
                                                                    
                                                                    <th>
                                                                    Diagnostico &nbsp;&nbsp;&nbsp;Lab &nbsp;&nbsp;&nbsp;Cie 
                                                                    </th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>

                                                             <?php
                                                           
                                                            foreach ($datos as $row) {
                                  
                                                                     ?> 
                                                                <tr>
                                                                    
                                                                        
                                                                   
                                                                    <td>
                                                                       <center> <?php echo $row->ESTABLECIMIENTO ?></center>
                                                                    </td>
                                                                    <td>
                                                                       <center> <?php echo $row->MES ?></center>
                                                                    </td>
                                                                     <td>
                                                                       <center> <?php echo $row->Nro_Doc ?></center>
                                                                    </td>
                                                                    <td onclick="ilumina(this)">
                                                                       <center> <?php echo $row->NOMBRES_APELLIDOS ?></center>
                                                                    </td>
                                                                  
                                                                    <td>
                                                                       <center> <?php echo $row->DIA ?></center>
                                                                    </td>
                                                                    <td>
                                                                       <center> <?php echo $row->LOTE ?>|<?php echo $row->NUM_PAG ?>|<?php echo $row->NUM_REG ?></center>
                                                                    </td>
                                                                    
                                                                    
                                                                     <td onclick="ilumina(this)">
                                                                       
                                                                       <?php echo $row->id_tipdiag ?> &nbsp;&nbsp;&nbsp; <?php echo $row->valor_lab ?> &nbsp;&nbsp;&nbsp; <?php echo $row->id_ciex?> 
                                                                         
                                                                     
                                                                       
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