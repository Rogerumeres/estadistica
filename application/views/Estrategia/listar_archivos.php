                    
<div class="col-sm-10 widget-container-col" id="widget-container-col-2">
                                            <div class="widget-box widget-color-blue" id="widget-box-2">
                                                <div class="widget-header">
                                                    <h5 class="widget-title bigger lighter">
                                                        <i class="ace-icon fa fa-table"></i>
                                                        Archivos
                                                    </h5>

                                                    
                                                </div>

                                                <div class="widget-body">
                                                    <div class="widget-main no-padding">
                                                        <table class="table table-striped table-bordered table-hover">
                                                            <thead class="thin-border-bottom">

                                                                <tr>
                                                                   
                                                                    <th>
                                                                    Descripción
                                                                    </th>

                                                                    <th>
                                                        
                                                                        Fecha de Modificación
                                                                    </th>
                                                                     <th>
                                                                        
                                                                Programa Presupuestal
                                                                    </th>

                                                                    <th >Editar</th>
                                                                     </th>

                                                                    <th >Eliminar</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                            <?php
                                                             $dir = 'uploads/';
                                                            foreach ($datos as $row) {
                                  
                                                                     ?>
                                                                <tr>
                                                                    
                                                                        <td>
                                                                       <center> <?php echo $row->des_archivo ?></center>
                                                                    </td>
                                                                    <td>
                                                                       <center> <?php echo $row->fecha_subida ?></center>
                                                                    </td>
                                                                    <td>
                                                                       <center> <?php echo $row->estrategia ?></center>
                                                                    </td>
                                                                    <td ><center>
                                                                    <a href="<?php echo base_url()?>Estrategia/edit/<?php echo $row->id?>"><i class="fa fa-pencil-square-o bigger-200"></i></a></center>
                                       
                                                                    </td>
                                                                    <td ><center>
                                                                    <a href="#" onclick="eliminar('<?php echo base_url()?>Estrategia/delete/<?php echo $row->id ?>')" title="Eliminar">
                                            <i class="ace-icon fa fa-trash-o bigger-200"></i>
                                            </a> </center>
                                       
                                                                    </td>
                                                                </tr>

                                                               <?php
                                                           }
                                                           ?>

                                                                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.span -->
