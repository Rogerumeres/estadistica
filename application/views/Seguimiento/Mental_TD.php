                   

    <?php
$atributos = array( 'id' => 'miformulario','name'=>'form','class'=>'form-horizontal');
//echo form_open(null, $atributos);
echo form_open_multipart('Seguimiento/Seguimiento_mental_tdepres',$atributos);
?>
    
 <div class="col-md-6">

 
    
  <div class="form-group">
 
    <select class="form-control select2" name="establec" id="establec">
        <option value="SANTA ANA">Seleccione Establecimiento</option>                    
                        

                  <?php
foreach ($result1 as $row) {
    ?>
      <option value="<?php echo $row->Codigo_Unico ?>"><?php echo $row->Nombre_Establecimiento ?></option>

      <?php
  }
?>
                </select>
   </div>

    <div class="form-group">
    <select class="form-control" name="año" id="año">
      <option value="2020" selected>Seleccione Año</option>
      <option value="2019">2019</option>
      <option value="2020">2020</option>
      <option value="2021">2021</option>
    
      </select>
    </div>
       <input type="submit" value="Mostrar" title="Mostrar" class="btn btn-primary" id="Mostrar"/>
 

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
                                                                    DNI
                                                                    </th>
                                                                    <th>                                                             
                                                                    Ficha Familiar
                                                                    </th>
                                                                    <th>
                                                                    Nombres y Apellidos
                                                                    </th>
                                                                    <th>
                                                                    Positivo TD
                                                                    </th>
                                                                    <th>
                                                                    1 I. Med
                                                                    </th>
                                                                    <th>                                                             
                                                                    2 I. Med
                                                                    </th>
                                                                    <th>
                                                                    3 I. Med
                                                                    </th>
                                                                    <th>
                                                                    4 I. Med
                                                                    </th>
                                                                    <th>                                                             
                                                                    1 I. Psic
                                                                    </th>
                                                                    <th>                                                             
                                                                    2 I. Psic
                                                                    </th>
                                                                    <th>
                                                                    3 I. Psic TA
                                                                    </th>
                                                                    <th>
                                                                    I. Familiar
                                                                    </th>
                                                                    <th>
                                                                    V. D.
                                                                    </th>                                                                   
                                                                </tr>
                                                            </thead>

                                                            <tbody>

                                                             <?php
                                                           
                                                            foreach ($result2 as $row) {
                                  
                                                                     ?> 
                                                                <tr>
                                                                                                                                                                                                        
                                                                    <td>
                                                                       <center> <?php echo $row->Nro_Doc ?></center>
                                                                    </td>
                                                                   
                                                                     <td>
                                                                       <center> <?php echo $row->FichaFam ?></center>
                                                                    </td>
                                                                     <td>
                                                                        <?php echo $row->Paciente ?>
                                                                    </td>
                                                                    <?php if ($row->PosTD==1) { ?> 
                                                                        <td style="background-color:#8fffc9;">
                                                                            <center> <?php echo $row->PosTD ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/2/PosTD/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-check bigger-200"></i></a>
                                                                            </center>
                                                                        </td>
                                                                    
                                                                    <?php } elseif ($row->PosTD>=2) { ?>
                                                                        <td style="background-color:#ff9e81;">
                                                                            <center> <?php echo $row->PosTD ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/2/PosTD/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-times bigger-200"></i></a>  
                                                                            </center>
                                                                        </td>
                                                                    <?php } else{ ?>
                                                                        <td >
                                                                            <center> <?php echo $row->PosTD ?></center>
                                                                        </td>
                                                                    <?php } ?>



                                                                    <?php if ($row->M1Me==1) { ?> 
                                                                        <td style="background-color:#8fffc9;">
                                                                            <center> <?php echo $row->M1Me ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/2/M1Me/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-check bigger-200"></i></a>
                                                                            </center>
                                                                        </td>
                                                                    
                                                                    <?php } elseif ($row->M1Me>=2) { ?>
                                                                        <td style="background-color:#ff9e81;">
                                                                            <center> <?php echo $row->M1Me ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/2/M1Me/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-times bigger-200"></i></a>  
                                                                            </center>
                                                                        </td>
                                                                    <?php } else{ ?>
                                                                        <td >
                                                                            <center> <?php echo $row->M1Me ?></center>
                                                                        </td>
                                                                    <?php } ?>

                                                                    
                                                                    <?php if ($row->M2Me==1) { ?> 
                                                                        <td style="background-color:#8fffc9;">
                                                                            <center> <?php echo $row->M2Me ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/2/M2Me/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-check bigger-200"></i></a>
                                                                            </center>
                                                                        </td>
                                                                    
                                                                    <?php } elseif ($row->M2Me>=2) { ?>
                                                                        <td style="background-color:#ff9e81;">
                                                                            <center> <?php echo $row->M2Me ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/2/M2Me/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-times bigger-200"></i></a>  
                                                                            </center>
                                                                        </td>
                                                                    <?php } else{ ?>
                                                                        <td >
                                                                            <center> <?php echo $row->M2Me ?></center>
                                                                        </td>
                                                                    <?php } ?>
                                                                   

                                                                      <?php if ($row->M3Me==1) { ?> 
                                                                        <td style="background-color:#8fffc9;">
                                                                            <center> <?php echo $row->M3Me ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/2/M3Me/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-check bigger-200"></i></a>
                                                                            </center>
                                                                        </td>
                                                                    
                                                                    <?php } elseif ($row->M3Me>=2) { ?>
                                                                        <td style="background-color:#ff9e81;">
                                                                            <center> <?php echo $row->M3Me ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/2/M3Me/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-times bigger-200"></i></a>  
                                                                            </center>
                                                                        </td>
                                                                    <?php } else{ ?>
                                                                        <td >
                                                                            <center> <?php echo $row->M3Me ?></center>
                                                                        </td>
                                                                    <?php } ?>


                                                                    <?php if ($row->M4Me==1) { ?> 
                                                                        <td style="background-color:#8fffc9;">
                                                                            <center> <?php echo $row->M4Me ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/2/M4Me/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-check bigger-200"></i></a>
                                                                            </center>
                                                                        </td>
                                                                    
                                                                    <?php } elseif ($row->M4Me>=2) { ?>
                                                                        <td style="background-color:#ff9e81;">
                                                                            <center> <?php echo $row->M4Me ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/2/M4Me/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-times bigger-200"></i></a>  
                                                                            </center>
                                                                        </td>
                                                                    <?php } else{ ?>
                                                                        <td >
                                                                            <center> <?php echo $row->M4Me ?></center>
                                                                        </td>
                                                                    <?php } ?>


                                                                    <?php if ($row->M1Ps==1) { ?> 
                                                                        <td style="background-color:#8fffc9;">
                                                                            <center> <?php echo $row->M1Ps ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/2/M1Ps/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-check bigger-200"></i></a>
                                                                            </center>
                                                                        </td>
                                                                    
                                                                    <?php } elseif ($row->M1Ps>=2) { ?>
                                                                        <td style="background-color:#ff9e81;">
                                                                            <center> <?php echo $row->M1Ps ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/2/M1Ps/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-times bigger-200"></i></a>  
                                                                            </center>
                                                                        </td>
                                                                    <?php } else{ ?>
                                                                        <td >
                                                                            <center> <?php echo $row->M1Ps ?></center>
                                                                        </td>
                                                                    <?php } ?>


                                                                    <?php if ($row->M2Ps==1) { ?> 
                                                                        <td style="background-color:#8fffc9;">
                                                                            <center> <?php echo $row->M2Ps ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/2/M2Ps/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-check bigger-200"></i></a>
                                                                            </center>
                                                                        </td>
                                                                    
                                                                    <?php } elseif ($row->M2Ps>=2) { ?>
                                                                        <td style="background-color:#ff9e81;">
                                                                            <center> <?php echo $row->M2Ps ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/2/M2Ps/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-times bigger-200"></i></a>  
                                                                            </center>
                                                                        </td>
                                                                    <?php } else{ ?>
                                                                        <td >
                                                                            <center> <?php echo $row->M2Ps ?></center>
                                                                        </td>
                                                                    <?php } ?>

                                                                   
                                                                    <?php if ($row->M3PsTA==1) { ?> 
                                                                        <td style="background-color:#8fffc9;">
                                                                            <center> <?php echo $row->M3PsTA ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/2/M3PsTA/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-check bigger-200"></i></a>
                                                                            </center>
                                                                        </td>
                                                                    
                                                                    <?php } elseif ($row->M3PsTA>=2) { ?>
                                                                        <td style="background-color:#ff9e81;">
                                                                            <center> <?php echo $row->M3PsTA ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/2/M3PsTA/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-times bigger-200"></i></a>  
                                                                            </center>
                                                                        </td>
                                                                    <?php } else{ ?>
                                                                        <td >
                                                                            <center> <?php echo $row->M3PsTA ?></center>
                                                                        </td>
                                                                    <?php } ?>

                                                                    <?php if ($row->IF==1) { ?> 
                                                                        <td style="background-color:#8fffc9;">
                                                                            <center> <?php echo $row->IF ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/2/IF/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-check bigger-200"></i></a>
                                                                            </center>
                                                                        </td>
                                                                    
                                                                    <?php } elseif ($row->IF>=2) { ?>
                                                                        <td style="background-color:#ff9e81;">
                                                                            <center> <?php echo $row->IF ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/2/IF/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-times bigger-200"></i></a>  
                                                                            </center>
                                                                        </td>
                                                                    <?php } else{ ?>
                                                                        <td >
                                                                            <center> <?php echo $row->IF ?></center>
                                                                        </td>
                                                                    <?php } ?>

                                                                    <?php if ($row->VD==1) { ?> 
                                                                        <td style="background-color:#8fffc9;">
                                                                            <center> <?php echo $row->VD ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/2/VD/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-check bigger-200"></i></a>
                                                                            </center>
                                                                        </td>
                                                                    
                                                                    <?php } elseif ($row->VD>=2) { ?>
                                                                        <td style="background-color:#ff9e81;">
                                                                            <center> <?php echo $row->VD ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/2/VD/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-times bigger-200"></i></a>  
                                                                            </center>
                                                                        </td>
                                                                    <?php } else{ ?>
                                                                        <td >
                                                                            <center> <?php echo $row->VD ?></center>
                                                                        </td>
                                                                    <?php } ?>

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