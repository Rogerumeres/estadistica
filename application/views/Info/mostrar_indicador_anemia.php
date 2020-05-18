
    <?php
$atributos = array( 'id' => 'miformulario','name'=>'form','class'=>'form-horizontal');
//echo form_open(null, $atributos);
echo form_open_multipart('Info/mostrar_indicador_anemia',$atributos);
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
                                                  
                                       <center>   <H4>Actualizado a 09/03/2020</H4></center>
                                                    
                                                </div>

                                                <div class="widget-body">
                                                    <div class="widget-main no-padding">
                                                        <table class="table table-striped table-bordered table-hover">
                                                             <thead>
                <tr>
              <th>  Año eval    </th>
                <th>  Mes eval    </th>
                <th>  Distrito    </th>
               
   
                 <th>  Establecimiento    </th>
                          
                <th>   DNI Padron  </th>    
                <th> Nombre Niño   </th> 
                <th>Fecha nacimiento</th>
               
                <th>   Fecha Anemia  </th>  
              <th>Atc Anemia</th>
               <th>Inicio Trat.</th>
                <th>1ra Visita.</th>  
                <th>2da Visita.</th>                                                            
                
                 <th> Cumple Indicador</th>
                 <th>Dedominador</th>
                
                   
                   
                     
                </tr>
                </thead>

                                                            <tbody>

                <?php
                                                            
             foreach ($datos as $row) {
                                  
                         ?>

                <tr>
                  <td>
                      <center> <?php echo $row->año_evaluacion ?></a></center>
                  </td>
                  <td>
                      <center> <?php echo $row->mes_evaluacion  ?></a></center>
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
                 
                 
              <?php if ($row->fecha_anemia_r=='') { ?> 

                                                                    <td>
                                                                        <center> <?php echo $row->fecha_anemia_r ?></center>
                                                                    </td>
                                                                      <?php } else { ?>
                                                                <td style="background-color:#48d1cc;font-size:11px; ">
                                                                    <center> <?php echo $row->fecha_anemia_r ?></center>
                                                               </td>
                                                                <?php }  ?>

                   
                   <?php if ($row->fecha_anemia=='') { ?> 

                                                                    <td>
                                                                        <center> <?php echo $row->fecha_anemia ?></center>
                                                                    </td>
                                                                      <?php } else { ?>
                                                                <td style="background-color:#48d1cc;font-size:11px; ">
                                                                    <center> <?php echo $row->fecha_anemia ?></center>
                                                               </td>
                                                                <?php }  ?>

                 

                <?php if ($row->fecha_trata =='') { ?> 

                                                                    <td>
                                                                        <center> <?php echo $row->fecha_trata  ?></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td style="background-color:#48d1cc;font-size:11px; ">
                                                                        <center> <b><?php echo $row->fecha_trata   ?></b></center>
                                                                    </td>
                                                                      <?php }  ?>

                      <?php if ($row->fec_visita01=='') { ?> 

                                                                    <td>
                                                                        <center> <?php echo $row->fec_visita01 ?></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td style="background-color:#48d1cc;font-size:11px;">
                                                                        <center> <b><?php echo $row->fec_visita01 ?></b>

                                                                        <div class="tool-tip">
                                                                        <i class="tool-tip__icon" >?</i>
                                                                        <p class="tool-tip__info">
                                                                          <span class="info__title">Fin 1ra Visita:  <?php echo $row->fecha_fin_1visita ?></span>
                                                                        </p>
                                                                       </div>                                                                        </center>
                                                                    </td>
                                                                      <?php }  ?>  

                                <?php if ($row->fec_visita02=='') { ?> 

                                                                    <td>
                                                                        <center> <?php echo $row->fec_visita02 ?></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td style="background-color:#48d1cc;font-size:11px;">
                                                                        <center> <b><?php echo $row->fec_visita02 ?></b>
                                                                        
                                                                        <div class="tool-tip">
                                                                        <i class="tool-tip__icon" >?</i>
                                                                        <p class="tool-tip__info">
                                                                          <span class="info__title">Inicio 2da Visita:  <?php echo $row->fecha_ini_2visita   ?></span><br>
                                                                          <span class="info__title">Fin 2da Visita:  <?php echo $row->fecha_fin_2visita  ?></span>
                                                                        </p>
                                                                       </div>




                                                                        </center>
                                                                    </td>
                                                                      <?php }  ?>  


                  

                    <?php if ($row->num ==1) { ?> 

                                                                    <td style="background-color:#48d1cc;font-size:11px; ">
                                                                        <center> <?php echo $row->num  ?></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td style="background-color:#ffbdc1;font-size:11px; ">
                                                                        <center> <b><?php echo $row->num   ?></b></center>
                                                                    </td>
                                                                      <?php }  ?>  

                                                                       <?php if ($row->den ==1) { ?> 

                                                                    <td style="background-color:#48d1cc;font-size:11px; ">
                                                                        <center> <?php echo $row->den  ?></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td style="background-color:#ffbdc1;font-size:11px; ">
                                                                        <center> <b><?php echo $row->den   ?></b></center>
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