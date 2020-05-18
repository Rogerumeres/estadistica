 <div class="row">
                                                                    

                                    <div class="col-sm-12">
                                        <div class="tabbable">
                                            <ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">
                                                <li class="active">
                                                    <a data-toggle="tab" href="#reporte">Morbilidad por Años</a>
                                                </li>

                                              

                                                <li>
                                                    <a data-toggle="tab" href="#otros">Otros</a>
                                                </li>
                                            </ul>

                                            <div class="tab-content">
                                                <div id="reporte" class="tab-pane in active">
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
                                                                        
                                                                        Descripcion
                                                                    </th>

                                                                    <th>
                                                                        
                                                                        Fecha de Actualizacion
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
                                                                    <td ><?php echo $row->descripcion ?></td>

                                                                    <td>
                                                                    <center>
                                                                     <?php  // echo $row->fecha_subida
                                                                        $nombre_archivo = $dir.$row->archivo;
                                                                        if (file_exists($nombre_archivo)) {
                                                                            echo  date("d/m/Y", filectime($nombre_archivo));
                                                                        } else
                                                                         {
                                                                            echo "-";
                                                                        }  
                                                                    ?>
                                                                    </center>
                                                                    </td>

                                                                    <td > <center>
                                                                    <?php
                                                                        $nombre_archivo = $dir.$row->archivo;
                                                                        if (file_exists($nombre_archivo)) 
                                                                            {
                                                                                ?>
                                                                        <a href="<?php echo base_url().$dir.$row->archivo ?>" title="Descargar"><center><i class="ace-icon fa fa-cloud-download bigger-200"></i></center></a>

                                                                        <?php
                                                                        } else
                                                                         {
                                                                            echo "Archivo no existe";
                                                                        }  
                                                                    ?>
                                                                    </center>
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
                                                </div>

                                                <div id="norma" class="tab-pane">
                                                    
                                                </div>

                                                <div id="ottros" class="tab-pane">
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.col -->
                                </div><!-- /.row -->