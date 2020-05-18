 <section class="grid margin">
        <h2 class="s-12 text-white text-thin text-size-30 text-white text-uppercase margin-top-bottom-20 center text-center"><b>Reportes Materno-Planificación-adolescente</b></h2> 
                
        <!-- Image-->
       
      </section> 

<div class="line">
                  <table>
                  <thead>
                  <tr>
                  <th> Descripcion</th>
                  <th>Fecha de Actualizacion</th>
                  <th>Archivo</th>
                  
                  </tr>
                  </thead>
                   <tbody>
                                                            <?php
                                                            $dir = './uploads/reporte_2019/';
                                                            foreach ($datos as $row) {
                                  
                                                                     ?>
                                                                <tr>
                                                                    <td ><?php echo $row->des_archivo?></td>

                                                                    <td>
                                                                    <center>
                                                                     <?php  // echo $row->fecha_subida
                                                                        $nombre_archivo = $dir.$row->nom_archivo;
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
                                                                        $nombre_archivo = $dir.$row->nom_archivo;
                                                                        if (file_exists($nombre_archivo)) 
                                                                            {
                                                                                ?>
                                                                        <a href="<?php echo base_url().$dir.$row->nom_archivo ?>" title="Descargar"><center><i class="icon-sli-folder-alt text-size-30 text-blue center margin-bottom-15"></i></center></a>

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