 <?php
$atributos = array( 'id' => 'miformulario','name'=>'form','class'=>'form-horizontal');
//echo form_open(null, $atributos);
echo form_open_multipart('',$atributos);
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
<div class="col-md-3">
        <table class="table table-striped table-bordered table-hover";>
            <thead>
                <tr>
                <th style="background-color:#045FB4;font-size:20px;color:#FFFFFF "><center><b>Fecha Actualización</b></center></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td style="background-color:#ff0014;font-size:20px;color:#FFFFFF ">
                <center><b><?php echo $FechaActualizacion->FechaActualizacion?></b></center></td>
                </tr>
            </tbody>
        </table>
    </div>
<div class="col-sm-12 widget-container-col" id="widget-container-col-2">
  

                                            <div class="widget-box widget-color-blue" id="widget-box-2">
                                                
  
                                                
                                                
                                                <div class="widget-header">
                                                  
              <CENTER><H3>Para ver Detalle hacer Click en las cantidades</H3></CENTER>
                                                    
                                                </div>

                                                <div class="widget-body">
                                                    <div class="widget-main no-padding">
                                                        <table class="table table-striped table-bordered table-hover">
                                                            <thead class="thin-border-bottom">

                                                                <tr>
                                                                    <th>Microred</th>
                                                                    <th>Establecimiento</th>
                                                                    <th>Mes</th>
                                                                                                                                      
                                                                    <th style="background-color:#07b8ff;color:#fff;">PlanParto</th>
                                                                    <th style="background-color:#07b8ff;color:#fff;">Vif</th>
                                                                    <th style="background-color:#07b8ff;color:#fff;">TotalAtd</th>
                                                                    
                                                                    <th style="background-color:#f7394f;color:#fff;">Hepat</th>
                                                                    <th style="background-color:#f7394f;color:#fff;">TotPartos</th>
                                                                    <th style="background-color:#f7394f;color:#fff;">Ctrl</th>  
                                                                    
                                                                    <th style="background-color:#f7394f;color:#fff;">Bateria2</th> 
                                                                    <th style="background-color:#f7394f;color:#fff;">Eco2</th>
                                                                    <th style="background-color:#f7394f;color:#fff;">Bateria1</th>
                                                                    <th style="background-color:#f7394f;color:#fff;">Sf1</th>
                                                                    <th style="background-color:#f7394f;color:#fff;">Sf6</th>
                                                                    <th style="background-color:#f7394f;color:#fff;">AnemiaLev</th>
                                                                    <th style="background-color:#f7394f;color:#fff;">AnemiaMod</th>
                                                                    <th style="background-color:#f7394f;color:#fff;">AnemiaSev</th>
                                                                    <th style="background-color:#f7394f;color:#fff;">Reenf</th>
                                                                      
                                                                    <th style="background-color:#286ce6;color:#fff;">PuerCtrl</th>
                                                                    <th style="background-color:#286ce6;color:#fff;">PuerAtd</th>
                                                                    
                                                                    
                                                                    
                                                                    
                                                                   
                                                                    
                                                                    
                                                                    
                                                                </tr>
                                                                
                                                            </thead>
                                                            <tbody>

                                                             <?php
                                                           
                                                            foreach ($datos as $row) {
                                  
                                                                     ?> 
                                                                <tr>
                                                                    
                                                                    <td>
                                                                       <center> <?php echo $row->MICRORED ?></center>
                                                                    </td>
                                                                   
                                                                    <td>
                                                                       <center> <?php echo $row->NOMBRE_ESTABLECIMIENTO ?></center>
                                                                    </td>
                                                                    
                                                                    <td>
                                                                       <center> <?php echo $row->MES ?></center>
                                                                    </td> 
                                                                    
                                                                   
                                                                     <?php if ($row->PlanParto != $row->GestanteVif or $row->PlanParto != $row->Total_GestantesAtendidas ) { ?> 
                                                                     <td style="font-size:16px;background-color:#FF0000;">
                                                                     <center> <b><a  class='iframe' title="Ver Detalle" href="<?php echo base_url()?>Detalle_error/mostrar_hc_Materno_Controlador/1/<?php echo $row->CODIGO_UNICO?>/<?php echo $row->MES?>"><?php echo $row->PlanParto ?><?php } 
                                                                     else { ?>
                                                                     
                                                                     <td style="font-size:16px;background-color:#16FA07;">
                                                                     <center> <b><a  class='iframe' title="Ver Detalle" href="<?php echo base_url()?>Detalle_error/mostrar_hc_Materno_Controlador/1/<?php echo $row->CODIGO_UNICO?>/<?php echo $row->MES?>"><?php echo $row->PlanParto?>
                                                                     <?php } ?></a></b></center>
                                                                     </td>                                                      
                                                                    
                                                                    <?php if ($row->GestanteVif != $row->PlanParto  or $row->GestanteVif != $row->Total_GestantesAtendidas ) { ?> 
                                                                     <td style="font-size:16px;background-color:#FF0000;">
                                                                     <center> <b><a  class='iframe' title="Ver Detalle" href="<?php echo base_url()?>Detalle_error/mostrar_hc_Materno_Controlador/2/<?php echo $row->CODIGO_UNICO?>/<?php echo $row->MES?>"><?php echo $row->GestanteVif ?><?php } 
                                                                     else { ?>
                                                                     
                                                                     <td style="font-size:16px;background-color:#16FA07;">
                                                                     <center> <b><a  class='iframe' title="Ver Detalle" href="<?php echo base_url()?>Detalle_error/mostrar_hc_Materno_Controlador/2/<?php echo $row->CODIGO_UNICO?>/<?php echo $row->MES?>"><?php echo $row->GestanteVif?>
                                                                     <?php } ?></a></b></center>
                                                                     </td>           
                                                                     
                                                                     
                                                                     <?php if ($row->Total_GestantesAtendidas != $row->PlanParto  or $row->Total_GestantesAtendidas != $row->GestanteVif ) { ?> 
                                                                     <td style="font-size:16px;background-color:#FF0000;">
                                                                     <center> <b><a  class='iframe' title="Ver Detalle" href="<?php echo base_url()?>Detalle_error/mostrar_hc_Materno_Controlador/3/<?php echo $row->CODIGO_UNICO?>/<?php echo $row->MES?>"><?php echo $row->Total_GestantesAtendidas ?><?php } 
                                                                     else { ?>
                                                                     
                                                                     <td style="font-size:16px;background-color:#16FA07;">
                                                                     <center> <b><a  class='iframe' title="Ver Detalle" href="<?php echo base_url()?>Detalle_error/mostrar_hc_Materno_Controlador/3/<?php echo $row->CODIGO_UNICO?>/<?php echo $row->MES?>"><?php echo $row->Total_GestantesAtendidas?>
                                                                     <?php } ?></a></b></center>
                                                                     </td>    
                                                                    
                                                                   
                                                                    
                                                                                                                                      
                                                                    
                                                                   
                                                                    
                                                                    <td style="font-size:16px;background-color:#ffd6d9;">
                                                                       <center> <b><a class='iframe' title="Ver Detalle" href="<?php echo base_url()?>Detalle_error/mostrar_hc_Materno_Controlador/4/<?php echo $row->CODIGO_UNICO?>/<?php echo $row->MES?>"><?php echo $row->Gestantes_Hepatitis ?></a></b></center>
                                                                    </td>

                                                                    <td style="font-size:16px;background-color:#ffd6d9;">
                                                                       <center> <b><a class='iframe' title="Ver Detalle" href="<?php echo base_url()?>Detalle_error/mostrar_hc_Materno_Controlador/5/<?php echo $row->CODIGO_UNICO?>/<?php echo $row->MES?>"><?php echo $row->Partos ?></a></b></center>
                                                                    </td>
                                                                    
                                                                    <td style="font-size:16px;background-color:#ffd6d9;">
                                                                       <center><b> <a class='iframe' title="Ver Detalle" href="<?php echo base_url()?>Detalle_error/mostrar_hc_Materno_Controlador/6/<?php echo $row->CODIGO_UNICO?>/<?php echo $row->MES?>"><?php echo $row->GestanteControlada ?></a></b></center>
                                                                    </td>
                                                                    
                                                                    
                                                                    
                                                                       <td style="font-size:16px;background-color:#ffd6d9;">
                                                                       <center> <b><a class='iframe' title="Ver Detalle" href="<?php echo base_url()?>Detalle_error/mostrar_hc_Materno_Controlador/7/<?php echo $row->CODIGO_UNICO?>/<?php echo $row->MES?>"><?php echo $row->Gestantes_2Bateria?></a></b></center>
                                                                    </td>

                                                                     <td style="font-size:16px;background-color:#ffd6d9;">
                                                                       <center> <b><a class='iframe' title="Ver Detalle" href="<?php echo base_url()?>Detalle_error/mostrar_hc_Materno_Controlador/8/<?php echo $row->CODIGO_UNICO?>/<?php echo $row->MES?>"><?php echo $row->Gestante_Ecografia2 ?></a></b></center>
                                                                    </td>
                                                                     <td style="font-size:16px;background-color:#ffd6d9;">
                                                                       <center><b> <a class='iframe' title="Ver Detalle" href="<?php echo base_url()?>Detalle_error/mostrar_hc_Materno_Controlador/9/<?php echo $row->CODIGO_UNICO?>/<?php echo $row->MES?>"><?php echo $row->Gestantes_1Bateria?></a></b></center>
                                                                    </td>
                                                                      <td style="font-size:16px;background-color:#ffd6d9;">
                                                                       <center><b> <a class='iframe' title="Ver Detalle" href="<?php echo base_url()?>Detalle_error/mostrar_hc_Materno_Controlador/10/<?php echo $row->CODIGO_UNICO?>/<?php echo $row->MES?>"><?php echo $row->GestanteAtdSF1 ?></a></b></center>
                                                                    </td>
                                                                    
                                                                    
                                                                     <td style="font-size:16px;background-color:#ffd6d9;">
                                                                       <center> <b><a class='iframe' title="Ver Detalle" href="<?php echo base_url()?>Detalle_error/mostrar_hc_Materno_Controlador/11/<?php echo $row->CODIGO_UNICO?>/<?php echo $row->MES?>"><?php echo $row->GestanteProtegidaSF6 ?></a></b></center>
                                                                    </td>
                                                                      
                                                                    <td style="font-size:16px;background-color:#ffd6d9;">
                                                                       <center> <b><a class='iframe' title="Ver Detalle" href="<?php echo base_url()?>Detalle_error/mostrar_hc_Materno_Controlador/12/<?php echo $row->CODIGO_UNICO?>/<?php echo $row->MES?>"><?php echo $row->GestanteAnemiaLeve ?></a></b></center>
                                                                    </td>
                                                                    
                                                                    
                                                                    <td style="font-size:16px;background-color:#ffd6d9;">
                                                                       <center> <b><a class='iframe' title="Ver Detalle" href="<?php echo base_url()?>Detalle_error/mostrar_hc_Materno_Controlador/13/<?php echo $row->CODIGO_UNICO?>/<?php echo $row->MES?>"><?php echo $row->GestanteAnemiaModerado ?></a></b></center>
                                                                    </td>
                                                                    
                                                                    
                                                                     <td style="font-size:16px;background-color:#ffd6d9;">
                                                                       <center><b> <a class='iframe' title="Ver Detalle" href="<?php echo base_url()?>Detalle_error/mostrar_hc_Materno_Controlador/14/<?php echo $row->CODIGO_UNICO?>/<?php echo $row->MES?>"><?php echo $row->GestanteAnemiaSevero ?></a></b></center>
                                                                    </td>
                                                                    
                                                                    
                                                                    <td style="font-size:16px;background-color:#ffd6d9;">
                                                                       <center> <b><a class='iframe' title="Ver Detalle" href="<?php echo base_url()?>Detalle_error/mostrar_hc_Materno_Controlador/15/<?php echo $row->CODIGO_UNICO?>/<?php echo $row->MES?>"><?php echo $row->GestanteReenfocada ?></a></b></center>
                                                                    </td>
                                                                    
                                                                    <td style="font-size:16px;background-color:#c7cbf8;">
                                                                       <center> <b><a class='iframe' title="Ver Detalle" href="<?php echo base_url()?>Detalle_error/mostrar_hc_Materno_Controlador/16/<?php echo $row->CODIGO_UNICO?>/<?php echo $row->MES?>"><?php echo $row->PuerperaControlada ?></a></b></center>
                                                                    </td>
                                                                    
                                                                    
                                                                    <td style="font-size:16px;background-color:#c7cbf8;">
                                                                       <center> <b><a class='iframe' title="Ver Detalle" href="<?php echo base_url()?>Detalle_error/mostrar_hc_Materno_Controlador/16/<?php echo $row->CODIGO_UNICO?>/<?php echo $row->MES?>"><?php echo $row->PuerperaAtendida ?></a></b></center>
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