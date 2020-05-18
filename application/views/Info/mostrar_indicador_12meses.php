
    <?php
$atributos = array( 'id' => 'miformulario','name'=>'form','class'=>'form-horizontal');
//echo form_open(null, $atributos);
echo form_open_multipart('Info/mostrar_indicador_12meses',$atributos);
?>
    <div class="col-md-6">

      <div class="form-group">
    <select class="form-control" name="año" id="año">
      <option selected="">Seleccione Año</option>
      <option value="2018">2018</option>
      <option value="2019">2019</option>
      <option value="2020">2020</option>
    
      
    </select>
    </div>
      <div class="form-group">
    <select class="form-control" name="mes" id="mes">
      <option selected="">Seleccione Mes</option>
      <option value="1">Enero</option>
      <option value="2">Febrero</option>
      <option value="3">Marzo</option>
      <option value="4">Abril</option>
      <option value="5">Mayo</option>
      <option value="6">Junio</option>
      <option value="7">Julio</option>
      <option value="8">Agosto</option>
      <option value="9">Setiembre</option>
      <option value="10">Octubre</option>
      <option value="11">Noviembre</option>
      <option value="12">Diciembre</option>
      
    </select>
    </div>
    <input type="submit" value="Mostrar" title="Mostrar" class="btn btn-primary" id="mostrar"/>
  
</div>
<div class="col-sm-12 widget-container-col" id="widget-container-col-2">
  

                                            <div class="widget-box widget-color-blue" id="widget-box-2">
                                                
  
                                                
                                                
                                                <div class="widget-header">
                                                  

                                                    
                                                </div>

                                                <div class="widget-body">
                                                    <div class="widget-main no-padding">
                                                        <table class="table table-striped table-bordered table-hover">
                                                             <thead>
                <tr>
                  <th>  Año evaluación   </th>
                <th>  mes evaluación     </th>
               <th>  Distrito    </th>
               <th>EE. Atención Padron</th> 
               
                <th>   DNI Padron  </th>    
                <th> Nombre Niño   </th> 
                   
                <th>Fecha nacimiento</th>
              <th>Tamisaje Anemia</th>
              <th>Dx. Anemia</th>
              <th>Inicio &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Trata. Anemia</th>
              <th>Segundo &nbsp&nbsp&nbsp Trata. Anemia.</th>
              <th>Tercera &nbsp&nbsp&nbsp Trata. Anemia</th> 
              <th>Cumple Trata. Anemia</th> 
              <th>Inicio &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Suple. Preve.</th>
              <th>Segundo &nbsp&nbsp&nbsp Suple. Preve.</th>  
              <th>Tercera &nbsp&nbsp&nbsp Suple. Preve.</th>  
              <th>Cumple Suple. Preven.</th>                                                           
                            
              <th>Cumple Indicador 389 dias</th> 
              <th>Denominador</th> 
                
                   
                

                     
                </tr>
                </thead>

                                                            <tbody>

                <?php
                                                            
             foreach ($datos as $row) {
                                  
                         ?>

                <tr>
                  <td>
                      <center> <?php echo $row->anio_evaluacion ?></a></center>
                  </td>
                  <td>
                      <center> <?php echo $row->mes_evaluacion ?></a></center>
                  </td>
                   <td>
                      <center> <?php echo $row->distrito ?></a></center>
                  </td>
                  <td>
                      <center> <?php echo $row->eeaa_padron ?></a></center>
                  </td>
                  
                  <td> 
                    <center>  <a target="blank" href="<?php echo base_url()?>Info/buscarn/<?php echo $row->dni ?>"><?php echo $row->dni ?></a>
                      </center>
                  </td>
                  <td style="font-size:11px;"> 
                    <?php echo $row->nombres_niño ?>
                   <td >
                       <center> <?php echo $row->fecha_nac ?></center>
                  </td>
                   
                   <?php if ($row->fecha_tamizaje=='') { ?> 

                                                                    <td>
                                                                        <center> <?php echo $row->fecha_tamizaje ?></center>
                                                                    </td>
                                                                      <?php } else { ?>
                                                                <td style="background-color:#65d4ff;font-size:11px; ">
                                                                    <center> <b><?php echo $row->fecha_tamizaje ?></b></center>
                                                               </td>
                                                                <?php }  ?>

                  
                 

                <?php if ($row->fecha_anemia_r=='') { ?> 

                                                                    <td>
                                                                        <center> <?php echo $row->fecha_anemia_r ?></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td style="background-color:#48d1cc;font-size:11px; ">
                                                                        <center> <b><?php echo $row->fecha_anemia_r ?></b>
                                                                     



                                                                        </center>
                                                                    </td>
                                                                      <?php }  ?>

                   <?php if ($row->fecha_trata01=='') { ?> 

                                                                    <td>
                                                                        <center> <?php echo $row->fecha_trata01 ?></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td style="background-color:#48d1cc;font-size:11px; ">
                                                                        <center> <b><?php echo $row->fecha_trata01 ?></b>

                                                                     <div class="tool-tip"> 
                                                                        <i class="tool-tip__icon" >?</i>
                                                                        <p class="tool-tip__info">
                                                                          <span class="info__title">Fin Tratamiento 7 dias:  <?php echo $row->fecha_fin_trata01 ?></span>
                                                                          
                                                                        </p>
                                                                       </div>



                                                                        </center>
                                                                    </td>
                                                                      <?php }  ?>


                     <?php if ($row->fecha_trata02=='') { ?> 

                                                                    <td>
                                                                        <center> <?php echo $row->fecha_trata02 ?></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td style="background-color:#48d1cc;font-size:11px; ">
                                                                        <center> <b><?php echo $row->fecha_trata02 ?></b>

                                                                      <div class="tool-tip">
                                                                        <i class="tool-tip__icon">?</i>
                                                                        <p class="tool-tip__info">
                                                                          <span class="info__title">Inicio 3ra Tratamiento:  <?php echo $row->fecha_ini_trata02 ?></span><br>
                                                                          <span class="info__title">Fin 3ra Tratamiento:  <?php echo $row->fecha_fin_trata02 ?></span>
                                                                        </p>
                                                                       </div>




                                                                        </center>
                                                                    </td>
                                                                      <?php }  ?>

                 

                                <?php if ($row->fecha_trata03=='') { ?> 

                                                                    <td>
                                                                        <center> <?php echo $row->fecha_trata03 ?></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td style="background-color:#48d1cc;font-size:11px;">
                                                                        <center> <b><?php echo $row->fecha_trata03 ?></b>

                                                                           <div class="tool-tip">
                                                                        <i class="tool-tip__icon">?</i>
                                                                        <p class="tool-tip__info">
                                                                          <span class="info__title">Inicio 3ra Tratamiento:  <?php echo $row->fecha_ini_trata03 ?></span><br>
                                                                          <span class="info__title">Fin 3ra Tratamiento:  <?php echo $row->fecha_fin_trata03 ?></span>
                                                                        </p>
                                                                       </div>

                                                                        </center>
                                                                    </td>
                                                                      <?php }  ?>  

                                    <?php if ($row->trata==1) { ?> 

                                                                    <td style="background-color:#48d1cc;font-size:11px; ">
                                                                        <center> <?php echo $row->trata ?></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td style="background-color:#ffbdc1;font-size:11px; ">
                                                                        <center> <b><?php echo $row->trata ?></b></center>
                                                                    </td>
                                                                      <?php }  ?>                                              
                                                                                          




                                   <?php if ($row->fecha_suple01=='') { ?> 

                                                                    <td>
                                                                        <center> <?php echo $row->fecha_suple01 ?></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td style="background-color:#ff9700;font-size:11px;">
                                                                        <center> <b><?php echo $row->fecha_suple01 ?></b>


                                                                          <div class="tool-tip">
                                                                        <i class="tool-tip__icon">?</i>
                                                                        <p class="tool-tip__info">
                                                                          <span class="info__title">Fin 1ra Suplementación:  <?php echo $row->fecha_fin_suple01 ?></span><br>
                                                                         
                                                                        </p>
                                                                       </div>

                                                                          

                                                                        </center>
                                                                    </td>
                                                                      <?php }  ?> 

                                  <?php if ($row->fecha_suple02=='') { ?> 

                                                                    <td>
                                                                        <center> <?php echo $row->fecha_suple02 ?></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td style="background-color:#ff9700;font-size:11px;">
                                                                        <center> <b><?php echo $row->fecha_suple02 ?></b>


                                                                        <div class="tool-tip">
                                                                        <i class="tool-tip__icon">?</i>
                                                                        <p class="tool-tip__info">
                                                                          <span class="info__title">Inicio 2da Tratamiento:  <?php echo $row->fecha_ini_suple02 ?></span><br>
                                                                          <span class="info__title">Fin 2da Tratamiento:  <?php echo $row->fecha_fin_suple02 ?></span>
                                                                        </p>
                                                                       </div>

                                                                        </center>
                                                                    </td>
                                                                      <?php }  ?>  
                          <?php if ($row->fecha_suple03=='') { ?> 

                                                                    <td>
                                                                        <center> <?php echo $row->fecha_suple03 ?></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td style="background-color:#ff9700;font-size:11px;">
                                                                        <center> <b><?php echo $row->fecha_suple03 ?></b>


                                                                      <div class="tool-tip">
                                                                        <i class="tool-tip__icon">?</i>
                                                                        <p class="tool-tip__info">
                                                                          <span class="info__title">Inicio 3ra Tratamiento:  <?php echo $row->fecha_ini_suple03 ?></span><br>
                                                                          <span class="info__title">Fin 3ra Tratamiento:  <?php echo $row->fecha_fin_suple03 ?></span>
                                                                        </p>
                                                                       </div>


                                                                        </center>
                                                                    </td>
                                                                      <?php }  ?>  

                    <?php if ($row->suple==1) { ?> 

                                                                    <td style="background-color:#ff9700;font-size:11px; ">
                                                                        <center> <?php echo $row->suple ?></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td style="background-color:#ffbdc1;font-size:11px; ">
                                                                        <center> <b><?php echo $row->suple ?></b></center>
                                                                    </td>
                                                                      <?php }  ?>                                              
                                                                                          



                  

                    <?php if ($row->num==1) { ?> 

                                                                    <td style="background-color:#48d1cc;font-size:11px; ">
                                                                        <center> <?php echo $row->num ?></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td style="background-color:#ffbdc1;font-size:11px; ">
                                                                        <center> <b><?php echo $row->num ?></b></center>
                                                                    </td>
                                                                      <?php }  ?>  

                    
                    <?php if ($row->den==1) { ?> 

                                                                    <td style="background-color:#48d1cc;font-size:11px; ">
                                                                        <center> <?php echo $row->den ?></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td style="background-color:#ffbdc1;font-size:11px; ">
                                                                        <center> <b><?php echo $row->den ?></b></center>
                                                                    </td>
                                                                      <?php }  ?>                                              
                                                                                              


                  
                    
                        
                  
                
                  
               
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