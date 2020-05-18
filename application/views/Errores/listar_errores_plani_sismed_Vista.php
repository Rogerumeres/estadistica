   
                    

    <?php
$atributos = array( 'id' => 'miformulario','name'=>'form','class'=>'form-horizontal');
//echo form_open(null, $atributos);
echo form_open_multipart('Errores/listar_errores_plani_sismed_Controlador',$atributos);
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
                                                  

                                                    
                                                </div>

                                                <div class="widget-body">
                                                    <div class="widget-main no-padding">
                                                        <table class="table table-striped table-bordered table-hover">
                                                            <thead class="thin-border-bottom">

                                                                <tr>
                                                                   
                                                                    <th>
                                                                    Microred
                                                                    </th>

                                                                    
                                                                     <th>                                                                   
                                                                Establecimiento
                                                                    </th>
                                                                    <th>                                                                   
                                                                Mes
                                                                    </th>
                                                                    
                                                                     <th >Diu Sismed</th>
                                                                     <th >Diu His</th>
                                                                     <th >Con Diu</th>
                                                                     <th >Oral Comb Sismed</th>
                                                                     <th >Oral Comb His</th>
                                                                     <th >Con Oral Comb</th>
                                                                     <th >Iny Men Sismed</th>
                                                                     <th >Iny Men His</th>
                                                                     <th >Con Iny Men</th>
                                                                     <th >Iny Trim Sismed</th>
                                                                     <th >Iny Trim His</th>
                                                                     <th >Con Iny Trim</th>
                                                                     <th >Impl Sismed</th>
                                                                     <th >Impl His</th>
                                                                     <th >Con Impl</th>
                                                                     <th >Pres Masc Sismed</th>
                                                                     <th >Pres Masc His</th>
                                                                     <th >Con Pres Masc</th>
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
                                                                       <center> <?php echo $row->ESTABLECIMIENTO ?></center>
                                                                    </td>
                                                                    <td>
                                                                       <center> <?php echo $row->mes ?></center>
                                                                    </td>
                                                                   
                                                                    <td>
                                                                       <center> <?php echo $row->diuSismed ?></center>
                                                                    </td>
                                                                    <td>
                                                                       <center> <?php echo $row->DiuHis ?></center>
                                                                    </td>
                                                                       <?php if ($row->ConDiu=='Ok') { ?> 

                                                                    <td>
                                                                        <center> <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_hc/1/<?php echo $row->RENAES?>/<?php echo $row->mes?>"><i class="fa fa-check bigger-200"></i></a></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td style="background-color:#ffbdc1">
                                                                        <center> <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_hc/1/<?php echo $row->RENAES?>/<?php echo $row->mes?>"> <i class="fa fa-times bigger-200"></i> </a></center>
                                                                    </td>
                                                                      <?php }  ?>



                                                                    <td>
                                                                       <center> <?php echo $row->OralCombinadoSismed ?></center>
                                                                    </td>
                                                                    <td>
                                                                       <center> <?php echo $row->OralCombinadoHis ?></center>
                                                                    </td>
                                                                    <?php if ($row->ConOralCombinado=='Ok') { ?> 

                                                                    <td>
                                                                        <center> <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_hc/2/<?php echo $row->RENAES?>/<?php echo $row->mes?>"><i class="fa fa-check bigger-200"></i></a></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td style="background-color:#ffbdc1">
                                                                        <center> <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_hc/2/<?php echo $row->RENAES?>/<?php echo $row->mes?>"> <i class="fa fa-times bigger-200"></i> </a></center>
                                                                    </td>
                                                                      <?php }  ?>

                                                                    
                                                                     <td>
                                                                       <center> <?php echo $row->InyectableMensualSismed ?></center>
                                                                    </td>
                                                                    <td>
                                                                       <center> <?php echo $row->InyectableMensualHis ?></center>
                                                                    </td>
                                                                     <?php if ($row->ConInyectableMensual=='Ok') { ?> 
                                                                    <td>
                                                                        <center> <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_hc/3/<?php echo $row->RENAES?>/<?php echo $row->mes?>"><i class="fa fa-check bigger-200"></i></a></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td style="background-color:#ffbdc1">
                                                                        <center> <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_hc/3/<?php echo $row->RENAES?>/<?php echo $row->mes?>"> <i class="fa fa-times bigger-200"></i> </a></center>
                                                                    </td>
                                                                      <?php }  ?>

                                                                    <td>
                                                                       <center> <?php echo $row->InyectableTrimestralSismed ?></center>
                                                                    </td>
                                                                    <td>
                                                                       <center> <?php echo $row->InyectableTrimestralHis ?></center>
                                                                    </td>
                                                                     <?php if ($row->ConInyectableTrimestral=='Ok') { ?> 
                                                                     <td>
                                                                        <center> <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_hc/4/<?php echo $row->RENAES?>/<?php echo $row->mes?>"><i class="fa fa-check bigger-200"></i></a></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td style="background-color:#ffbdc1">
                                                                        <center> <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_hc/4/<?php echo $row->RENAES?>/<?php echo $row->mes?>"> <i class="fa fa-times bigger-200"></i> </a></center>
                                                                    </td>
                                                                      <?php }  ?>

                                                                    <td>
                                                                       <center> <?php echo $row->ImplanteSismed ?></center>
                                                                    </td>
                                                                    <td>
                                                                       <center> <?php echo $row->ImplanteHis ?></center>
                                                                    </td>
                                                                    <?php if ($row->ConImplante=='Ok') { ?> 
                                                                    <td>
                                                                        <center> <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_hc/5/<?php echo $row->RENAES?>/<?php echo $row->mes?>"><i class="fa fa-check bigger-200"></i></a></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td style="background-color:#ffbdc1">
                                                                        <center> <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_hc/5/<?php echo $row->RENAES?>/<?php echo $row->mes?>"> <i class="fa fa-times bigger-200"></i> </a></center>
                                                                    </td>
                                                                      <?php }  ?>
                                                                      <td>
                                                                       <center> <?php echo $row->PreservativoMasculinoSismed ?></center>
                                                                    </td>
                                                                    <td>
                                                                       <center> <?php echo $row->PreservativoMasculinoHis ?></center>
                                                                    </td>
                                                                     <?php if ($row->ConPreseMasculino=='Ok') { ?> 
                                                                   <td>
                                                                        <center> <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_hc/6/<?php echo $row->RENAES?>/<?php echo $row->mes?>"><i class="fa fa-check bigger-200"></i></a></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td style="background-color:#ffbdc1">
                                                                        <center> <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_hc/6/<?php echo $row->RENAES?>/<?php echo $row->mes?>"> <i class="fa fa-times bigger-200"></i> </a></center>
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