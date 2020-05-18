                  

  

                                            <div class="widget-box widget-color-blue" id="widget-box-2">
                                                
  
                                                
                                                
                                                <div class="widget-header">
                                                  

                                                    
                                                </div>

                                                <div class="widget-body">
                                                    <div class="widget-main no-padding">
                                                        <table class="table table-striped table-bordered table-hover">
                                                            <thead class="thin-border-bottom">

                                                                <tr>
                                                                   
                                                                    
                                                                                                                                     
                                                                    <th>                                                             
                                                                Fecha Atención
                                                                    </th>
                                                                    <th>                                                             
                                                                DNI
                                                                    </th>
                                                                    <th>
                                                                    Nombres y Apellidos
                                                                    </th>
                                                                     
                                                                   
                                                                    <th>
                                                                    Lote-Pagina-Registro
                                                                    </th>
                                                                   
                                                                    
                                                                    <th>
                                                                    Diagnostico &nbsp;&nbsp;&nbsp;Lab &nbsp;&nbsp;&nbsp;Cie &nbsp;
                                                                    </th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>

                                                             <?php
                                                           
                                                            foreach ($datos as $row) {
                                  
                                                                     ?> 
                                                                <tr>
                                                                    
                                                                        
                                                                   
                                                                 
                                                                    <td>
                                                                       <center> <?php echo $row->FECHA_ATENCION ?></center>
                                                                    </td>
                                                                     <td>
                                                                       <center> <?php echo $row->NUMERO_DOCUMENTO_PACIENTE ?></center>
                                                                    </td>
                                                                    <td onclick="ilumina(this)">
                                                                       <center> <?php echo $row->NOMBRES_PACIENTE ?></center>
                                                                    </td>
                                                                  
                                                                    
                                                                    <td>
                                                                       <center> <?php echo $row->LOTE ?>|<?php echo $row->NUM_PAG ?>|<?php echo $row->NUM_REG ?></center>
                                                                    </td>
                                                                    
                                                                    
                                                                     <td onclick="ilumina(this)">
                                                                       
                                                                       <?php echo $row->TIPO_DIAGNOSTICO ?> &nbsp;&nbsp;&nbsp; <?php echo $row->VALOR_LAB ?> &nbsp;&nbsp;&nbsp; <?php echo $row->CODIGO_ITEM?> &nbsp;&nbsp;&nbsp;
                                                                         
                                                                     
                                                                       
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