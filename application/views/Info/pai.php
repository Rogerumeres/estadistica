
    <?php
$atributos = array( 'id' => 'miformulario','name'=>'form','class'=>'form-horizontal');
//echo form_open(null, $atributos);
echo form_open_multipart('Info/mostrar_pai',$atributos);
?>
    <div class="col-md-6">

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
                                                  
                                       <center>   <H4>Actualizado a 29/04/2020</H4> </center>
                                                    
                                                </div>

              <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                                                             <thead>
                <tr>
                  
                 <th>  Mes  </th>
                 <th>  DNI  </th>
                <th>  Nombre Niño    </th>
               
                <th> Vacuna RN  </th>
                <th> Vacuna 2 meses </th>
                <th> Vacuna 4 meses </th>
                <th> Vacuna 6 meses </th>
                <th> 1ra Influenza </th>
                <th> 2da Influenza </th>
                <th> Vacuna 1 año </th>
                <th> Vacuna AMA </th>
                <th> Vacuna 1 año y medio </Th>
                <th> Vacuna 4 años </Th>
               
                 <th> Fecha Nacimiento   </th>   
                <th>  Edad  </th>
                <th> Tipo Edad  </th>
                </tr>
                </thead>

                                                            <tbody>

                <?php
                                                            
             foreach ($datos as $row) {
                                  
                         ?>

                <tr>
                  
                   <td style="font-size:14px;">
                      <center> <?php echo $row->Mes  ?></a></center>
                  </td>
                   <td>
                      <center> <a target="blank" href="<?php echo base_url()?>Info/buscarn/<?php echo $row->Numero_Documento ?>"><?php echo $row->Numero_Documento ?></a></center>
                  </td>
                  <td style="font-size:11px;">
                      <center> <?php echo $row->Nombre_Paciente  ?></a></center>
                  </td>
           
                      <?php if ($row->vacuna_RN==2) { ?> 
                                                                  <td style="background-color:#48d1cc;font-size:14px;">
                                                                        <center> <b><a target="blank" href="<?php echo base_url()?>Info_detais/mostrar_pai_detalle/<?php echo $row->Numero_Documento ?>"><?php echo $row->vacuna_RN ?></a></b>

                                                                        <div class="tool-tip">
                                                                        <i class="tool-tip__icon" >?</i>
                                                                        <p class="tool-tip__info">
                                                                            <span ><b>Vacuna Recien Nacido:</b> </span><br>
                                                                          <span class="info__title">BCG:  <?php echo $row->Vacuna_BCG_RN ?></span><BR>
                                                                          <span class="info__title">HVB:  <?php echo $row->Vacuna_HVB_RN  ?></span>
                                                                        </p>
                                                                       </div>
                                                                     </center>
                                                                    </td>

                                                                   
                                                                      <?php } elseif ($row->vacuna_RN==0) { ?>
                                                                      <td style="font-size:11px; ">
                                                                        <center> 
                                                                          
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php } else { ?>
                                                                      <td style="background-color:#ffbdc1;font-size:14px; ">
                                                                        <center> <b><a target="blank" href="<?php echo base_url()?>Info_detais/mostrar_pai_detalle/<?php echo $row->Numero_Documento ?>"><?php echo $row->vacuna_RN ?></a></b>
                                                                          <div class="tool-tip">
                                                                        <i class="tool-tip__icon" >?</i>
                                                                        <p class="tool-tip__info">
                                                                           <span ><b>Vacuna Recien Nacido:</b> </span><br>
                                                                          <span class="info__title">BCG:  <?php echo $row->Vacuna_BCG_RN ?></span><BR>
                                                                          <span class="info__title">HVB:  <?php echo $row->Vacuna_HVB_RN  ?></span>
                                                                        </p>
                                                                       </div>
                                                                     </center>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php }  ?> 
                       <?php if ($row->Vacuna_2meses==4) { ?> 
                                                                  <td style="background-color:#48d1cc;font-size:14px;">
                                                                        <center> <b><a target="blank" href="<?php echo base_url()?>Info_detais/mostrar_pai_detalle/<?php echo $row->Numero_Documento ?>"><?php echo $row->Vacuna_2meses ?></a></b>

                                                                        <div class="tool-tip">
                                                                        <i class="tool-tip__icon" >?</i>
                                                                        <p class="tool-tip__info">
                                                                           <span ><b>Vacuna 2 meses: </b></span><br>
                                                                          <span class="info__title">1ra dosis Penta:  <?php echo $row->Vacuna_Penta_2Meses ?></span><BR>
                                                                          <span class="info__title">1ra dosis IPV:  <?php echo $row->Vacuna_IPV_2Meses  ?></span><BR>
                                                                          <span class="info__title">1ra dosis Rotavirus:  <?php echo $row->Vacuna_Rotavirus_2Meses ?></span><BR>
                                                                          <span class="info__title">1ra dosis Neumococo:  <?php echo $row->Vacuna_Neumococo_2Meses  ?></span>
                                                                        </p>
                                                                       </div>
                                                                     </center>
                                                                    </td>

                                                                    <?php } elseif ($row->Vacuna_2meses==0) { ?>
                                                                      <td style="font-size:11px; ">
                                                                        <center> 
                                                                           
                                                                        </center>
                                                                    </td>

                                                                      <?php } else { ?>
                                                                      <td style="background-color:#ffbdc1;font-size:14px; ">
                                                                        <center> <b><a target="blank" href="<?php echo base_url()?>Info_detais/mostrar_pai_detalle/<?php echo $row->Numero_Documento ?>"><?php echo $row->Vacuna_2meses ?></a></b>
                                                                           <div class="tool-tip">
                                                                        <i class="tool-tip__icon" >?</i>
                                                                        <p class="tool-tip__info">
                                                                           <span ><b>Vacuna 2 meses:</b> </span><br>
                                                                          <span class="info__title">1ra dosis Penta:  <?php echo $row->Vacuna_Penta_2Meses ?></span><BR>
                                                                          <span class="info__title">1ra dosis IPV:  <?php echo $row->Vacuna_IPV_2Meses  ?></span><BR>
                                                                          <span class="info__title">1ra dosis Rotavirus:  <?php echo $row->Vacuna_Rotavirus_2Meses ?></span><BR>
                                                                          <span class="info__title">1ra dosis Neumococo:  <?php echo $row->Vacuna_Neumococo_2Meses  ?></span>
                                                                        </p>
                                                                       </div>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php }  ?>  
                       <?php if ($row->Vacuna_4meses==4) { ?> 
                                                                  <td style="background-color:#48d1cc;font-size:14px;">
                                                                       <center> <b><a target="blank" href="<?php echo base_url()?>Info_detais/mostrar_pai_detalle/<?php echo $row->Numero_Documento ?>"><?php echo $row->Vacuna_4meses ?></a></b>
                                                                        <div class="tool-tip">
                                                                        <i class="tool-tip__icon" >?</i>
                                                                        <p class="tool-tip__info">
                                                                           <span ><b>Vacuna 4 meses: </b></span><br>
                                                                          <span class="info__title">2da dosis Penta:  <?php echo $row->Vacuna_Penta_4Meses ?></span><BR>
                                                                          <span class="info__title">2da dosis IPV:  <?php echo $row->Vacuna_IPV_4Meses  ?></span><BR>
                                                                          <span class="info__title">2da dosis Rotavirus:  <?php echo $row->Vacuna_Rotavirus_4Meses ?></span><BR>
                                                                          <span class="info__title">2da dosis  Neumococo:  <?php echo $row->Vacuna_Neumococo_4Meses  ?></span>
                                                                        </p>
                                                                       </div>
                                                                     </center>
                                                                    </td>
                                                                       <?php } elseif ($row->Vacuna_4meses==0) { ?>
                                                                      <td style="font-size:11px; ">
                                                                        <center>
                                                                          
                                                                        </center>
                                                                    </td>
                                                                   
                                                                      <?php } else { ?>
                                                                      <td style="background-color:#ffbdc1;font-size:14px; ">
                                                                         <center> <b><a target="blank" href="<?php echo base_url()?>Info_detais/mostrar_pai_detalle/<?php echo $row->Numero_Documento ?>"><?php echo $row->Vacuna_4meses ?></a></b>
                                                                           <div class="tool-tip">
                                                                        <i class="tool-tip__icon" >?</i>
                                                                        <p class="tool-tip__info">
                                                                           <span ><b>Vacuna 4 meses: </b></span><br>
                                                                          <span class="info__title">2da dosis Penta:  <?php echo $row->Vacuna_Penta_4Meses ?></span><BR>
                                                                          <span class="info__title">2da dosis IPV:  <?php echo $row->Vacuna_IPV_4Meses  ?></span><BR>
                                                                          <span class="info__title">2da dosis Rotavirus:  <?php echo $row->Vacuna_Rotavirus_4Meses ?></span><BR>
                                                                          <span class="info__title">2da dosis Neumococo:  <?php echo $row->Vacuna_Neumococo_4Meses  ?></span>
                                                                        </p>
                                                                       </div>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php }  ?>  
                        <?php if ($row->Vacuna_6meses==2) { ?> 
                                                                  <td style="background-color:#48d1cc;font-size:14px;">
                                                                          <center> <b><a target="blank" href="<?php echo base_url()?>Info_detais/mostrar_pai_detalle/<?php echo $row->Numero_Documento ?>"><?php echo $row->Vacuna_6meses ?></a></b>

                                                                        <div class="tool-tip">
                                                                        <i class="tool-tip__icon" >?</i>
                                                                        <p class="tool-tip__info">
                                                                           <span ><b>Vacuna 6 meses:</b> </span><br>
                                                                          <span class="info__title">3ra dosis Penta:  <?php echo $row->Vacuna_Panta_6Meses ?></span><BR>
                                                                          <span class="info__title">3ra dosis APO:  <?php echo $row->Vacuna_APO_6Meses  ?></span>
                                                                          
                                                                        </p>
                                                                       </div>
                                                                     </center>
                                                                    </td>

                                                                    <?php } elseif ($row->Vacuna_6meses==0) { ?>
                                                                      <td style="font-size:11px; ">
                                                                        <center>
                                                                           
                                                                        </center>
                                                                    </td>

                                                                      <?php } else { ?>
                                                                      <td style="background-color:#ffbdc1;font-size:14px; ">
                                                                        <center> <b><a target="blank" href="<?php echo base_url()?>Info_detais/mostrar_pai_detalle/<?php echo $row->Numero_Documento ?>"><?php echo $row->Vacuna_6meses ?></a></b>
                                                                           <div class="tool-tip">
                                                                        <i class="tool-tip__icon" >?</i>
                                                                        <p class="tool-tip__info">
                                                                           <span ><b>Vacuna 6 meses: </b></span><br>
                                                                          <span class="info__title">3ra dosis Penta:  <?php echo $row->Vacuna_Panta_6Meses ?></span><BR>
                                                                          <span class="info__title">3ra dosis APO:  <?php echo $row->Vacuna_APO_6Meses  ?></span>
                                                                         
                                                                       </div>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php }  ?>  

                          <?php if ($row->Vacuna_Influenza_1Dosis==1) { ?> 
                                                                  <td style="background-color:#48d1cc;font-size:14px;">
                                                                        <center> <b><a target="blank" href="<?php echo base_url()?>Info_detais/mostrar_pai_detalle/<?php echo $row->Numero_Documento ?>"><?php echo $row->Vacuna_Influenza_1Dosis ?></a></b>
                                                                        <div class="tool-tip">
                                                                        <i class="tool-tip__icon" >?</i>
                                                                        <p class="tool-tip__info">
                                                                           <span ><b>Vacuna influenza: </b></span><br>
                                                                          <span class="info__title">1ra Dosis Influenza:  <?php echo $row->Vacuna_Influenza_1Dosis ?></span>
                                                                         
                                                                          
                                                                        </p>
                                                                       </div>
                                                                         </center>
                                                                    </td>

                                                                    <?php } elseif  ($row->Vacuna_Influenza_1Dosis==0){ ?>
                                                                      <td style="font-size:11px; ">
                                                                        <center>
                                                                        
                                                                        </center>
                                                                    </td>

                                                                      <?php } else { ?>
                                                                      <td style="background-color:#ffbdc1;font-size:14px; ">
                                                                        <center> <b><a target="blank" href="<?php echo base_url()?>Info_detais/mostrar_pai_detalle/<?php echo $row->Numero_Documento ?>"><?php echo $row->Vacuna_Influenza_1Dosis ?></a></b>
                                                                          <div class="tool-tip">
                                                                        <i class="tool-tip__icon" >?</i>
                                                                        <p class="tool-tip__info">
                                                                            <span ><b>Vacuna influenza:</b> </span><br>
                                                                          <span class="info__title">1ra Dosis Influenza:  <?php echo $row->Vacuna_Influenza_1Dosis ?></span>
                                                                         
                                                                          
                                                                        </p>
                                                                       </div>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php }  ?> 

                           <?php if ($row->Vacuna_Influenza_2Dosis==1) { ?> 
                                                                  <td style="background-color:#48d1cc;font-size:14px;">
                                                                           <center> <b><a target="blank" href="<?php echo base_url()?>Info_detais/mostrar_pai_detalle/<?php echo $row->Numero_Documento ?>"><?php echo $row->Vacuna_Influenza_2Dosis ?></a></b>
                                                                         <div class="tool-tip">
                                                                        <i class="tool-tip__icon" >?</i>
                                                                        <p class="tool-tip__info">
                                                                            <span ><B>Vacuna influenza: </B></span><br>
                                                                          <span class="info__title">2da Dosis Influenza:  <?php echo $row->Vacuna_Influenza_2Dosis ?></span>
                                                                         
                                                                          
                                                                        </p>
                                                                       </div>
                                                                     </center>
                                                                    </td>

                                                                        <?php } elseif ($row->Vacuna_Influenza_2Dosis==0) { ?>
                                                                      <td style="font-size:11px; ">
                                                                        <center>
                                                                        
                                                                        </center>
                                                                    </td>
                                                                   
                                                                      <?php } else { ?>
                                                                      <td style="background-color:#ffbdc1;font-size:14px; ">
                                                                          <center> <b><a target="blank" href="<?php echo base_url()?>Info_detais/mostrar_pai_detalle/<?php echo $row->Numero_Documento ?>"><?php echo $row->Vacuna_Influenza_2Dosis ?></a></b>
                                                                          <div class="tool-tip">
                                                                        <i class="tool-tip__icon" >?</i>
                                                                        <p class="tool-tip__info">
                                                                            <span ><b>Vacuna influenza:</b> </span><br>
                                                                          <span class="info__title">2da Dosis Influenza:  <?php echo $row->Vacuna_Influenza_2Dosis ?></span>
                                                                         
                                                                          
                                                                        </p>
                                                                       </div>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php }  ?>   

                         <?php if ($row->Vacuna_1anio==3) { ?> 
                                                                  <td style="background-color:#48d1cc;font-size:14px;">
                                                                          <center> <b><a target="blank" href="<?php echo base_url()?>Info_detais/mostrar_pai_detalle/<?php echo $row->Numero_Documento ?>"><?php echo $row->Vacuna_1anio ?></a></b>

                                                                        <div class="tool-tip">
                                                                        <i class="tool-tip__icon" >?</i>
                                                                        <p class="tool-tip__info">
                                                                            <span ><b>Vacuna 1 año:</b> </span><br>
                                                                          <span class="info__title">1 SPR:  <?php echo $row->Vacuna_SPR_1Dosis_1anio ?></span><BR>
                                                                          <span class="info__title">3 Neumococo:  <?php echo $row->Vacuna_Neumococo_3Dosis_1anio  ?></span><br>
                                                                           <span class="info__title">Varicela:  <?php echo $row->Vacuna_Varicela_dosisDU_1anio  ?></span>
                                                                          
                                                                        </p>
                                                                       </div>
                                                                     </center>
                                                                    </td>

                                                                    <?php } elseif ($row->Vacuna_1anio==0) { ?>
                                                                      <td style="font-size:11px; ">
                                                                        <center>
                                                                           
                                                                        </center>
                                                                    </td>

                                                                      <?php } else { ?>
                                                                      <td style="background-color:#ffbdc1;font-size:14px; ">
                                                                         <center> <b><a target="blank" href="<?php echo base_url()?>Info_detais/mostrar_pai_detalle/<?php echo $row->Numero_Documento ?>"><?php echo $row->Vacuna_1anio ?></a></b>
                                                                           <div class="tool-tip">
                                                                        <i class="tool-tip__icon" >?</i>
                                                                        <p class="tool-tip__info">
                                                                            <span ><b>Vacuna 1 año: </b></span><br>
                                                                         <span class="info__title">1 dosis SPR:  <?php echo $row->Vacuna_SPR_1Dosis_1anio ?></span><BR>
                                                                          <span class="info__title">3 Neumococo:  <?php echo $row->Vacuna_Neumococo_3Dosis_1anio  ?></span><br>
                                                                           <span class="info__title">Varicela:  <?php echo $row->Vacuna_Varicela_dosisDU_1anio  ?></span>
                                                                         
                                                                       </div>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php }  ?>  

                             <?php if ($row->Vacuna_AMA_dosisDU_1anio==1) { ?> 
                                                                  <td style="background-color:#48d1cc;font-size:14px;">
                                                                        <center> <b><a target="blank" href="<?php echo base_url()?>Info_detais/mostrar_pai_detalle/<?php echo $row->Numero_Documento ?>"><?php echo $row->Vacuna_AMA_dosisDU_1anio ?></a></b>
                                                                           <div class="tool-tip">
                                                                        <i class="tool-tip__icon" >?</i>
                                                                        <p class="tool-tip__info">
                                                                            <span ><b>Vacuna Antiamarilica:</b> </span><br>
                                                                          <span class="info__title">DU AMA:  <?php echo $row->Vacuna_AMA_dosisDU_1anio ?></span>
                                                                         
                                                                          
                                                                        </p>
                                                                       </div>
                                                                         </center>
                                                                    </td>

                                                                      <?php } elseif ($row->Vacuna_AMA_dosisDU_1anio==0) { ?>
                                                                      <td style="font-size:11px; ">
                                                                        <center>
                                                                        
                                                                        </center>
                                                                    </td>

                                                                      <?php } else { ?>
                                                                      <td style="background-color:#ffbdc1;font-size:14px; ">
                                                                       <center> <b><a target="blank" href="<?php echo base_url()?>Info_detais/mostrar_pai_detalle/<?php echo $row->Numero_Documento ?>"><?php echo $row->Vacuna_AMA_dosisDU_1anio ?></a></b>
                                                                        <div class="tool-tip">
                                                                        <i class="tool-tip__icon" >?</i>
                                                                        <p class="tool-tip__info">
                                                                          <span ><B>Vacuna Antiamarilica:</B> </span><br>
                                                                          <span class="info__title">DU AMA:  <?php echo $row->Vacuna_AMA_dosisDU_1anio ?></span>
                                                                         
                                                                          
                                                                        </p>
                                                                       </div>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php }  ?>  

                              <?php if ($row->Vacuna_1anio_6meses==3) { ?> 
                                                                  <td style="background-color:#48d1cc;font-size:14px;">
                                                                          <center> <b><a target="blank" href="<?php echo base_url()?>Info_detais/mostrar_pai_detalle/<?php echo $row->Numero_Documento ?>"><?php echo $row->Vacuna_1anio_6meses ?></a></b>
                                                                        <div class="tool-tip">
                                                                        <i class="tool-tip__icon" >?</i>
                                                                        <p class="tool-tip__info">
                                                                          <span ><b>Vacuna 1 año 6 meses: </b></span><br>
                                                                          <span class="info__title">1 Ref. DPT:  <?php echo $row->Vacuna_DPT_1Dosis_18meses ?></span><BR>
                                                                          <span class="info__title">1 Ref. APO:  <?php echo $row->Vacuna_APO_1Dosis_18meses  ?></span><br>
                                                                           <span class="info__title">2 dosis SPR:  <?php echo $row->Vacuna_SPR_2Dosis_18meses  ?></span>
                                                                          
                                                                        </p>
                                                                       </div>
                                                                     </center>
                                                                    </td>

                                                                    <?php } elseif  ($row->Vacuna_1anio_6meses==0) { ?>
                                                                      <td style="font-size:11px; ">
                                                                        <center>
                                                                           
                                                                        </center>
                                                                    </td>

                                                                      <?php } else { ?>
                                                                      <td style="background-color:#ffbdc1;font-size:14px; ">
                                                                         <center> <b><a target="blank" href="<?php echo base_url()?>Info_detais/mostrar_pai_detalle/<?php echo $row->Numero_Documento ?>"><?php echo $row->Vacuna_1anio_6meses ?></a></b>
                                                                           <div class="tool-tip">
                                                                        <i class="tool-tip__icon" >?</i>
                                                                        <p class="tool-tip__info">
                                                                            <span ><b>Vacuna 1 año 6 meses:</b> </span><br>
                                                                          <span class="info__title">1 Ref. DPT:  <?php echo $row->Vacuna_DPT_1Dosis_18meses ?></span><BR>
                                                                          <span class="info__title">1 Ref. APO:  <?php echo $row->Vacuna_APO_1Dosis_18meses  ?></span><br>
                                                                           <span class="info__title">2 dosis SPR:  <?php echo $row->Vacuna_SPR_2Dosis_18meses  ?></span>
                                                                         
                                                                       </div>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php }  ?>

                           <?php if ($row->Vacuna_4anios==2) { ?> 
                                                                  <td style="background-color:#48d1cc;font-size:14px;">
                                                                         <center> <b><a target="blank" href="<?php echo base_url()?>Info_detais/mostrar_pai_detalle/<?php echo $row->Numero_Documento ?>"><?php echo $row->Vacuna_4anios ?></a></b>

                                                                        <div class="tool-tip">
                                                                        <i class="tool-tip__icon" >?</i>
                                                                        <p class="tool-tip__info">
                                                                            <span><b>Vacuna 4 años: </b></span><br>
                                                                          <span class="info__title">2 Ref. DPT:  <?php echo $row->Vacuna_DPT_2Dosis_4anios ?></span><BR>
                                                                          <span class="info__title">2 Ref. APO:  <?php echo $row->Vacuna_APO_2Dosis_4anios  ?></span>
                                                                           
                                                                          
                                                                        </p>
                                                                       </div>
                                                                     </center>
                                                                    </td>
                  
                                                                      <?php } elseif ($row->Vacuna_4anios==0) { ?>
                                                                      <td style="font-size:11px; ">
                                                                        <center>
                                                                           
                                                                        </center>
                                                                    </td>

                                                                      <?php } else { ?>
                                                                      <td style="background-color:#ffbdc1;font-size:14px; ">
                                                                        <center> <b><a target="blank" href="<?php echo base_url()?>Info_detais/mostrar_pai_detalle/<?php echo $row->Numero_Documento ?>"><?php echo $row->Vacuna_4anios ?></a></b>
                                                                           <div class="tool-tip">
                                                                        <i class="tool-tip__icon" >?</i>
                                                                        <p class="tool-tip__info">
                                                                          <span><b>Vacuna 4 años: </b></span><br>
                                                                           <span class="info__title">2 Ref. DPT:  <?php echo $row->Vacuna_DPT_2Dosis_4anios ?></span><BR>
                                                                          <span class="info__title">2 Ref. APO:  <?php echo $row->Vacuna_APO_2Dosis_4anios  ?></span>
                                                                          
                                                                         
                                                                       </div>
                                                                        </center>
                                                                    </td>
                                                                          
                                                                      <?php }  ?>


                     
                   <td>
                      <center> <?php echo $row->Fecha_Nacimiento ?></a></center>
                  </td>
                  <td>
                      <center> <?php echo $row->Edad_Reg ?></a></center>
                  </td>
                  <td>
                      <center> <?php echo $row->Tipo_Edad ?></a></center>
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
                                      