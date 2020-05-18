                   

    <?php
$atributos = array( 'id' => 'miformulario','name'=>'form','class'=>'form-horizontal');
//echo form_open(null, $atributos);
echo form_open_multipart('Seguimiento/Seguimiento_mental_psicosis',$atributos);
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
                                                                    Positivo EP
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
                                                                    5 I. Med
                                                                    </th>
                                                                    <th>
                                                                    6 I. Med
                                                                    </th>
                                                                    <th>
                                                                    1 I. Familiar
                                                                    </th>
                                                                    <th>                                                             
                                                                    2 I. Familiar
                                                                    </th>
                                                                    <th>                                                             
                                                                    3 I. Familiar
                                                                    </th>
                                                                    <th>
                                                                    1 V. D.
                                                                    </th>                                                                    
                                                                    <th>
                                                                    2 V. D. TA
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
                                                                    

                                                                    <?php if ($row->PosEP==1) { ?> 
                                                                        <td style="background-color:#8fffc9;">
                                                                            <center> <?php echo $row->PosEP ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/4/PosEP/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-check bigger-200"></i></a>
                                                                            </center>
                                                                        </td>
                                                                    
                                                                    <?php } elseif ($row->PosEP>=2) { ?>
                                                                        <td style="background-color:#ff9e81;">
                                                                            <center> <?php echo $row->PosEP ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/4/PosEP/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-times bigger-200"></i></a>  
                                                                            </center>
                                                                        </td>
                                                                    <?php } else{ ?>
                                                                        <td >
                                                                            <center> <?php echo $row->PosEP ?></center>
                                                                        </td>
                                                                    <?php } ?>
                                                                    

                                                                    <?php if ($row->M1Me==1) { ?> 
                                                                        <td style="background-color:#8fffc9;">
                                                                            <center> <?php echo $row->M1Me ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/4/M1Me/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-check bigger-200"></i></a>
                                                                            </center>
                                                                        </td>
                                                                    
                                                                    <?php } elseif ($row->M1Me>=2) { ?>
                                                                        <td style="background-color:#ff9e81;">
                                                                            <center> <?php echo $row->M1Me ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/4/M1Me/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-times bigger-200"></i></a>  
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
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/4/M2Me/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-check bigger-200"></i></a>
                                                                            </center>
                                                                        </td>
                                                                    
                                                                    <?php } elseif ($row->M2Me>=2) { ?>
                                                                        <td style="background-color:#ff9e81;">
                                                                            <center> <?php echo $row->M2Me ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/4/M2Me/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-times bigger-200"></i></a>  
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
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/4/M3Me/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-check bigger-200"></i></a>
                                                                            </center>
                                                                        </td>
                                                                    
                                                                    <?php } elseif ($row->M3Me>=2) { ?>
                                                                        <td style="background-color:#ff9e81;">
                                                                            <center> <?php echo $row->M3Me ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/4/M3Me/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-times bigger-200"></i></a>  
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
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/4/M4Me/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-check bigger-200"></i></a>
                                                                            </center>
                                                                        </td>
                                                                    
                                                                    <?php } elseif ($row->M4Me>=2) { ?>
                                                                        <td style="background-color:#ff9e81;">
                                                                            <center> <?php echo $row->M4Me ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/4/M4Me/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-times bigger-200"></i></a>  
                                                                            </center>
                                                                        </td>
                                                                    <?php } else{ ?>
                                                                        <td >
                                                                            <center> <?php echo $row->M4Me ?></center>
                                                                        </td>
                                                                    <?php } ?>


                                                                    <?php if ($row->M5Me==1) { ?> 
                                                                        <td style="background-color:#8fffc9;">
                                                                            <center> <?php echo $row->M5Me ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/4/M5Me/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-check bigger-200"></i></a>
                                                                            </center>
                                                                        </td>
                                                                    
                                                                    <?php } elseif ($row->M5Me>=2) { ?>
                                                                        <td style="background-color:#ff9e81;">
                                                                            <center> <?php echo $row->M5Me ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/4/M5Me/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-times bigger-200"></i></a>  
                                                                            </center>
                                                                        </td>
                                                                    <?php } else{ ?>
                                                                        <td >
                                                                            <center> <?php echo $row->M5Me ?></center>
                                                                        </td>
                                                                    <?php } ?>


                                                                     <?php if ($row->M6Me==1) { ?> 
                                                                        <td style="background-color:#8fffc9;">
                                                                            <center> <?php echo $row->M6Me ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/4/M6Me/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-check bigger-200"></i></a>
                                                                            </center>
                                                                        </td>
                                                                    
                                                                    <?php } elseif ($row->M6Me>=2) { ?>
                                                                        <td style="background-color:#ff9e81;">
                                                                            <center> <?php echo $row->M6Me ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/4/M6Me/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-times bigger-200"></i></a>  
                                                                            </center>
                                                                        </td>
                                                                    <?php } else{ ?>
                                                                        <td >
                                                                            <center> <?php echo $row->M6Me ?></center>
                                                                        </td>
                                                                    <?php } ?>

                                                                   
                                                                     <?php if ($row->M1IF==1) { ?> 
                                                                        <td style="background-color:#8fffc9;">
                                                                            <center> <?php echo $row->M1IF ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/4/M1IF/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-check bigger-200"></i></a>
                                                                            </center>
                                                                        </td>
                                                                    
                                                                    <?php } elseif ($row->M1IF>=2) { ?>
                                                                        <td style="background-color:#ff9e81;">
                                                                            <center> <?php echo $row->M1IF ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/4/M1IF/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-times bigger-200"></i></a>  
                                                                            </center>
                                                                        </td>
                                                                    <?php } else{ ?>
                                                                        <td >
                                                                            <center> <?php echo $row->M1IF ?></center>
                                                                        </td>
                                                                    <?php } ?>

                                                                   <?php if ($row->M2IF==1) { ?> 
                                                                        <td style="background-color:#8fffc9;">
                                                                            <center> <?php echo $row->M2IF ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/4/M2IF/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-check bigger-200"></i></a>
                                                                            </center>
                                                                        </td>
                                                                    
                                                                    <?php } elseif ($row->M2IF>=2) { ?>
                                                                        <td style="background-color:#ff9e81;">
                                                                            <center> <?php echo $row->M2IF ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/4/M2IF/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-times bigger-200"></i></a>  
                                                                            </center>
                                                                        </td>
                                                                    <?php } else{ ?>
                                                                        <td >
                                                                            <center> <?php echo $row->M2IF ?></center>
                                                                        </td>
                                                                    <?php } ?>

                                                                    <?php if ($row->M3IF==1) { ?> 
                                                                        <td style="background-color:#8fffc9;">
                                                                            <center> <?php echo $row->M3IF ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/4/M3IF/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-check bigger-200"></i></a>
                                                                            </center>
                                                                        </td>
                                                                    
                                                                    <?php } elseif ($row->M3IF>=2) { ?>
                                                                        <td style="background-color:#ff9e81;">
                                                                            <center> <?php echo $row->M3IF ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/4/M3IF/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-times bigger-200"></i></a>  
                                                                            </center>
                                                                        </td>
                                                                    <?php } else{ ?>
                                                                        <td >
                                                                            <center> <?php echo $row->M3IF ?></center>
                                                                        </td>
                                                                    <?php } ?>

                                                                    <?php if ($row->M1VD==1) { ?> 
                                                                        <td style="background-color:#8fffc9;">
                                                                            <center> <?php echo $row->M1VD ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/4/M1VD/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-check bigger-200"></i></a>
                                                                            </center>
                                                                        </td>
                                                                    
                                                                    <?php } elseif ($row->M1VD>=2) { ?>
                                                                        <td style="background-color:#ff9e81;">
                                                                            <center> <?php echo $row->M1VD ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos//M1VD/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-times bigger-200"></i></a>  
                                                                            </center>
                                                                        </td>
                                                                    <?php } else{ ?>
                                                                        <td >
                                                                            <center> <?php echo $row->M1VD ?></center>
                                                                        </td>
                                                                    <?php } ?>

                                                                    <?php if ($row->M2VDTA==1) { ?> 
                                                                        <td style="background-color:#8fffc9;">
                                                                            <center> <?php echo $row->M2VDTA ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/4/M2VDTA/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-check bigger-200"></i></a>
                                                                            </center>
                                                                        </td>
                                                                    
                                                                    <?php } elseif ($row->M2VDTA>=2) { ?>
                                                                        <td style="background-color:#ff9e81;">
                                                                            <center> <?php echo $row->M2VDTA ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/4/M2VDTA/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-times bigger-200"></i></a>  
                                                                            </center>
                                                                        </td>
                                                                    <?php } else{ ?>
                                                                        <td >
                                                                            <center> <?php echo $row->M2VDTA ?></center>
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