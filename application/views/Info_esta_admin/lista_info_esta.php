                    
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
                                                                        
                                                                Unidad Informativa
                                                                    </th>

                                                                    <th >Archivo</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                            <?php
                                                             $dir = 'uploads/info_esta/';
                                                            foreach ($datos as $row) {
                                  
                                                                     ?>
                                                                <tr>
                                                                    
                                                                        <td>
                                                                       <center> <?php echo $row->descripcion ?></center>
                                                                    </td>
                                                                    <td>
                                                                       <center> <?php echo $row->fecha_registro ?></center>
                                                                    </td>
                                                                    <td>
                                                                       <center> <?php echo $row->unidad_informativa ?></center>
                                                                    </td>
                                                                    <td ><center>
                                                                   

                                            <a href="#" onclick="eliminar('<?php echo base_url()?>Info_esta_admin/delete/<?php echo $row->id ?>')" title="Eliminar"><center><i class="ace-icon fa fa-trash"></i></center></a>
                                       
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


                        