   
            

    <?php
$atributos = array( 'id' => 'miformulario','name'=>'form','class'=>'form-horizontal');
//echo form_open(null, $atributos);
echo form_open_multipart('Seguimiento/Seguimiento_mental_encuesta_',$atributos);
?>
    
 <div class="col-md-6">

 
    
  <div class="form-group">
 
    <select class="form-control select2" name="establec" id="establec">
        <option value="8910">Seleccione Establecimiento</option>                    
                        

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
                                                  
 <center> Establecimiento:<?php echo $establec ?></center>
                                                    
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
                                                                    Encuesta
                                                                    </th>
                                                                    <th>
                                                                    HHSS Positivos
                                                                    </th>
                                                                    <th>                                                             
                                                                    1 Sesion
                                                                    </th>
                                                                    <th>
                                                                    2 Sesion
                                                                    </th>
                                                                    <th>
                                                                    3 Sesion
                                                                    </th>
                                                                    <th>
                                                                    4 Sesion
                                                                    </th>
                                                                    <th>
                                                                    5 Sesion
                                                                    </th>
                                                                    <th>
                                                                    6 Sesion
                                                                    </th>
                                                                    <th>
                                                                    7 Sesion
                                                                    </th>
                                                                    <th>
                                                                    8 Sesion
                                                                    </th>
                                                                    <th>
                                                                    9 Sesion
                                                                    </th>
                                                                    <th>
                                                                    10 Sesion TA
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
                                                                    
                                                                    <?php if ($row->EncuestaMa==1) { ?> 
                                                                        <td style="background-color:#8fffc9;">
                                                                            <center> <?php echo $row->EncuestaMa ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/6/EncuestaMa/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-check bigger-200"></i></a>
                                                                            </center>
                                                                        </td>
                                                                    
                                                                    <?php } elseif ($row->EncuestaMa>=2) { ?>
                                                                        <td style="background-color:#ff9e81;">
                                                                            <center> <?php echo $row->EncuestaMa ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/6/EncuestaMa/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-times bigger-200"></i></a>  
                                                                            </center>
                                                                        </td>
                                                                    <?php } else{ ?>
                                                                        <td >
                                                                            <center> <?php echo $row->EncuestaMa ?></center>
                                                                        </td>
                                                                    <?php } ?>
                                                                    

                                                                    <?php if ($row->HHSSPositivoMa==1) { ?> 
                                                                        <td style="background-color:#8fffc9;">
                                                                            <center> <?php echo $row->HHSSPositivoMa ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/6/HHSSPositivoMa/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-check bigger-200"></i></a>
                                                                            </center>
                                                                        </td>
                                                                    
                                                                    <?php } elseif ($row->HHSSPositivoMa>=2) { ?>
                                                                        <td style="background-color:#ff9e81;">
                                                                            <center> <?php echo $row->HHSSPositivoMa ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/6/HHSSPositivoMa/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-times bigger-200"></i></a>  
                                                                            </center>
                                                                        </td>
                                                                    <?php } else{ ?>
                                                                        <td >
                                                                            <center> <?php echo $row->HHSSPositivoMa ?></center>
                                                                        </td>
                                                                    <?php } ?>

                                                                    
                                                                    <?php if ($row->Ma1Sesion==1) { ?> 
                                                                        <td style="background-color:#8fffc9;">
                                                                            <center> <?php echo $row->Ma1Sesion ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/6/Ma1Sesion/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-check bigger-200"></i></a>
                                                                            </center>
                                                                        </td>
                                                                    
                                                                    <?php } elseif ($row->Ma1Sesion>=2) { ?>
                                                                        <td style="background-color:#ff9e81;">
                                                                            <center> <?php echo $row->Ma1Sesion ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/6/Ma1Sesion/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-times bigger-200"></i></a>  
                                                                            </center>
                                                                        </td>
                                                                    <?php } else{ ?>
                                                                        <td >
                                                                            <center> <?php echo $row->Ma1Sesion ?></center>
                                                                        </td>
                                                                    <?php } ?>
                                                                   

                                                                    <?php if ($row->Ma2Sesion==1) { ?> 
                                                                        <td style="background-color:#8fffc9;">
                                                                            <center> <?php echo $row->Ma2Sesion ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/6/Ma2Sesion/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-check bigger-200"></i></a>
                                                                            </center>
                                                                        </td>
                                                                    
                                                                    <?php } elseif ($row->Ma2Sesion>=2) { ?>
                                                                        <td style="background-color:#ff9e81;">
                                                                            <center> <?php echo $row->Ma2Sesion ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/6/Ma2Sesion/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-times bigger-200"></i></a>  
                                                                            </center>
                                                                        </td>
                                                                    <?php } else{ ?>
                                                                        <td >
                                                                            <center> <?php echo $row->Ma2Sesion ?></center>
                                                                        </td>
                                                                    <?php } ?>


                                                                    <?php if ($row->Ma3Sesion==1) { ?> 
                                                                        <td style="background-color:#8fffc9;">
                                                                            <center> <?php echo $row->Ma3Sesion ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/6/Ma3Sesion/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-check bigger-200"></i></a>
                                                                            </center>
                                                                        </td>
                                                                    
                                                                    <?php } elseif ($row->Ma3Sesion>=2) { ?>
                                                                        <td style="background-color:#ff9e81;">
                                                                            <center> <?php echo $row->Ma3Sesion ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/6/Ma3Sesion/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-times bigger-200"></i></a>  
                                                                            </center>
                                                                        </td>
                                                                    <?php } else{ ?>
                                                                        <td >
                                                                            <center> <?php echo $row->Ma3Sesion ?></center>
                                                                        </td>
                                                                    <?php } ?>


                                                                    <?php if ($row->Ma4Sesion==1) { ?> 
                                                                        <td style="background-color:#8fffc9;">
                                                                            <center> <?php echo $row->Ma4Sesion ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/6/Ma4Sesion/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-check bigger-200"></i></a>
                                                                            </center>
                                                                        </td>
                                                                    
                                                                    <?php } elseif ($row->Ma4Sesion>=2) { ?>
                                                                        <td style="background-color:#ff9e81;">
                                                                            <center> <?php echo $row->Ma4Sesion ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/6/Ma4Sesion/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-times bigger-200"></i></a>  
                                                                            </center>
                                                                        </td>
                                                                    <?php } else{ ?>
                                                                        <td >
                                                                            <center> <?php echo $row->Ma4Sesion ?></center>
                                                                        </td>
                                                                    <?php } ?>


                                                                    <?php if ($row->Ma5Sesion==1) { ?> 
                                                                        <td style="background-color:#8fffc9;">
                                                                            <center> <?php echo $row->Ma5Sesion ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/6/Ma5Sesion/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-check bigger-200"></i></a>
                                                                            </center>
                                                                        </td>
                                                                    
                                                                    <?php } elseif ($row->Ma5Sesion>=2) { ?>
                                                                        <td style="background-color:#ff9e81;">
                                                                            <center> <?php echo $row->Ma5Sesion ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/6/Ma5Sesion/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-times bigger-200"></i></a>  
                                                                            </center>
                                                                        </td>
                                                                    <?php } else{ ?>
                                                                        <td >
                                                                            <center> <?php echo $row->Ma5Sesion ?></center>
                                                                        </td>
                                                                    <?php } ?>

                                                                   
                                                                     <?php if ($row->Ma6Sesion==1) { ?> 
                                                                        <td style="background-color:#8fffc9;">
                                                                            <center> <?php echo $row->Ma6Sesion ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/3/Ma6Sesion/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-check bigger-200"></i></a>
                                                                            </center>
                                                                        </td>
                                                                    
                                                                    <?php } elseif ($row->Ma6Sesion>=2) { ?>
                                                                        <td style="background-color:#ff9e81;">
                                                                            <center> <?php echo $row->Ma6Sesion ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/6/Ma6Sesion/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-times bigger-200"></i></a>  
                                                                            </center>
                                                                        </td>
                                                                    <?php } else{ ?>
                                                                        <td >
                                                                            <center> <?php echo $row->Ma6Sesion ?></center>
                                                                        </td>
                                                                    <?php } ?>

                                                                    <?php if ($row->Ma7Sesion==1) { ?> 
                                                                        <td style="background-color:#8fffc9;">
                                                                            <center> <?php echo $row->Ma7Sesion ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/6/Ma7Sesion/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-check bigger-200"></i></a>
                                                                            </center>
                                                                        </td>
                                                                    
                                                                    <?php } elseif ($row->Ma7Sesion>=2) { ?>
                                                                        <td style="background-color:#ff9e81;">
                                                                            <center> <?php echo $row->Ma7Sesion ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/6/Ma7Sesion/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-times bigger-200"></i></a>  
                                                                            </center>
                                                                        </td>
                                                                    <?php } else{ ?>
                                                                        <td >
                                                                            <center> <?php echo $row->Ma7Sesion ?></center>
                                                                        </td>
                                                                    <?php } ?>

                                                                    <?php if ($row->Ma8Sesion==1) { ?> 
                                                                        <td style="background-color:#8fffc9;">
                                                                            <center> <?php echo $row->Ma8Sesion ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/6/Ma8Sesion/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-check bigger-200"></i></a>
                                                                            </center>
                                                                        </td>
                                                                    
                                                                    <?php } elseif ($row->Ma8Sesion>=2) { ?>
                                                                        <td style="background-color:#ff9e81;">
                                                                            <center> <?php echo $row->Ma8Sesion ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/6/Ma8Sesion/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-times bigger-200"></i></a>  
                                                                            </center>
                                                                        </td>
                                                                    <?php } else{ ?>
                                                                        <td >
                                                                            <center> <?php echo $row->Ma8Sesion ?></center>
                                                                        </td>
                                                                    <?php } ?>

                                                                    <?php if ($row->Ma9Sesion==1) { ?> 
                                                                        <td style="background-color:#8fffc9;">
                                                                            <center> <?php echo $row->Ma9Sesion ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/6/Ma9Sesion/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-check bigger-200"></i></a>
                                                                            </center>
                                                                        </td>
                                                                    
                                                                    <?php } elseif ($row->Ma9Sesion>=2) { ?>
                                                                        <td style="background-color:#ff9e81;">
                                                                            <center> <?php echo $row->Ma9Sesion ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/6/Ma9Sesion/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-times bigger-200"></i></a>  
                                                                            </center>
                                                                        </td>
                                                                    <?php } else{ ?>
                                                                        <td >
                                                                            <center> <?php echo $row->Ma9Sesion ?></center>
                                                                        </td>
                                                                    <?php } ?>


                                                                    <?php if ($row->Ma10Sesion==1) { ?> 
                                                                        <td style="background-color:#8fffc9;">
                                                                            <center> <?php echo $row->Ma10Sesion ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/6/Ma10Sesion/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-check bigger-200"></i></a>
                                                                            </center>
                                                                        </td>
                                                                    
                                                                    <?php } elseif ($row->Ma10Sesion>=2) { ?>
                                                                        <td style="background-color:#ff9e81;">
                                                                            <center> <?php echo $row->Ma10Sesion ?>
                                                                            <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/6/Ma10Sesion/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-times bigger-200"></i></a>  
                                                                            </center>
                                                                        </td>
                                                                    <?php } else{ ?>
                                                                        <td >
                                                                            <center> <?php echo $row->Ma10Sesion ?></center>
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