   
            

    <?php
$atributos = array( 'id' => 'miformulario','name'=>'form','class'=>'form-horizontal');
//echo form_open(null, $atributos);
echo form_open_multipart('Seguimiento/Seguimiento_mental_ffuertes',$atributos);
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
                                                                    Positivo VIF
                                                                    </th>
                                                                     <th>
                                                                    Consulta
                                                                    </th>
                                                                                                                                   
                                                                     <th>                                                             
                                                                    1Ps
                                                                    </th>
                                                                    <th>
                                                                    2Ps
                                                                    </th>
                                                                                                                                       
                                                                    <th>
                                                                    3Ps
                                                                    </th>
                                                                     <th>                                                             
                                                                    4Ps
                                                                    </th>
                                                                    <th>
                                                                    5PsTA
                                                                    </th>
                                                                                                                                   
                                                                    <th>
                                                                    VD
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
                                                                    

                                                                    <?php if ($row->PosVIF==1) { ?> 

                                                                    
                                                                        <td style="background-color:#8fffc9;">
                                                                    <center> <?php echo $row->PosVIF ?>
                                                                        
                                                                <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/PosVIF/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-check bigger-200"></i></a>
                                                                    
                                                                    </center>
                                                                        </td>
                                                                    
                                                                      <?php } elseif ($row->PosVIF>=2) { ?>
                                                                        <td style="background-color:#90ecff;">
                                                                    <center> <?php echo $row->PosVIF ?>
                                                                      <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/PosVIF/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-check bigger-200"></i></a>  

                                                                    </center>
                                                                         </td>
                                                                        <?php } else{ ?>
                                                                     <td >
                                                                    <center> <?php echo $row->PosVIF ?></center>
                                                                         </td>
                                                                        <?php } ?>
                                                                    
                                                                    <?php if ($row->Consulta==1) { ?> 

                                                                    
                                                                        <td style="background-color:#8fffc9;">
                                                                    <center> <?php echo $row->Consulta ?>
                                                                        <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-check bigger-200"></i></a>

                                                                    </center>
                                                                        </td>
                                                                    
                                                                      <?php } elseif ($row->Consulta>=2) { ?>
                                                                        <td style="background-color:#90ecff;">
                                                                    <center> <?php echo $row->Consulta ?>
                                                                        <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_detalle_vif_pos/<?php echo $establec?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><i class="fa fa-check bigger-200"></i></a>

                                                                    </center>
                                                                         </td>
                                                                        <?php } else{ ?>
                                                                     <td >
                                                                    <center> <?php echo $row->Consulta ?></center>
                                                                         </td>
                                                                        <?php } ?>
                                                                    
                                                                    <?php if ($row->M1Ps==1) { ?> 
                                                                     <td style="background-color:#8fffc9;">
                                                                    <center> <?php echo $row->M1Ps ?></center>
                                                                        </td>
                                                                     <?php } elseif ($row->M1Ps>=2) { ?>
                                                                        <td style="background-color:#90ecff;">
                                                                    <center> <?php echo $row->M1Ps ?></center>
                                                                         </td>
                                                                        <?php } else{ ?>
                                                                     <td >
                                                                    <center> <?php echo $row->M1Ps ?></center>
                                                                         </td>
                                                                        <?php } ?>
                                                                   
                                                                      <?php if ($row->M2Ps==1) { ?> 
                                                                     <td style="background-color:#8fffc9;">
                                                                    <center> <?php echo $row->M2Ps ?></center>
                                                                        </td>
                                                                     <?php } elseif ($row->M2Ps>=2) { ?>
                                                                        <td style="background-color:#90ecff;">
                                                                    <center> <?php echo $row->M2Ps ?></center>
                                                                         </td>
                                                                        <?php } else{ ?>
                                                                     <td >
                                                                    <center> <?php echo $row->M2Ps ?></center>
                                                                         </td>
                                                                        <?php } ?>

                                                                     <?php if ($row->M3Ps==1) { ?> 
                                                                     <td style="background-color:#8fffc9;">
                                                                    <center> <?php echo $row->M3Ps ?></center>
                                                                        </td>
                                                                     <?php } elseif ($row->M3Ps>=2) { ?>
                                                                        <td style="background-color:#90ecff;">
                                                                    <center> <?php echo $row->M3Ps ?></center>
                                                                         </td>
                                                                        <?php } else{ ?>
                                                                     <td >
                                                                    <center> <?php echo $row->M3Ps ?></center>
                                                                         </td>
                                                                        <?php } ?>

                                                                    <?php if ($row->M4Ps==1) { ?> 
                                                                     <td style="background-color:#8fffc9;">
                                                                    <center> <?php echo $row->M4Ps ?></center>
                                                                        </td>
                                                                     <?php } elseif ($row->M4Ps>=2) { ?>
                                                                        <td style="background-color:#90ecff;">
                                                                    <center> <?php echo $row->M4Ps ?></center>
                                                                         </td>
                                                                        <?php } else{ ?>
                                                                     <td >
                                                                    <center> <?php echo $row->M4Ps ?></center>
                                                                         </td>
                                                                        <?php } ?>

                                                                     <?php if ($row->M5PsTA==1) { ?> 
                                                                     <td style="background-color:#8fffc9;">
                                                                    <center> <?php echo $row->M5PsTA ?></center>
                                                                        </td>
                                                                     <?php } elseif ($row->M5PsTA>=2) { ?>
                                                                        <td style="background-color:#90ecff;">
                                                                    <center> <?php echo $row->M5PsTA ?></center>
                                                                         </td>
                                                                        <?php } else{ ?>
                                                                     <td >
                                                                    <center> <?php echo $row->M5PsTA ?></center>
                                                                         </td>
                                                                        <?php } ?>
                                                                   
                                                                     <?php if ($row->VD==1) { ?> 
                                                                     <td style="background-color:#8fffc9;">
                                                                    <center> <?php echo $row->VD ?></center>
                                                                        </td>
                                                                     <?php } elseif ($row->VD>=2) { ?>
                                                                        <td style="background-color:#90ecff;">
                                                                    <center> <?php echo $row->VD ?></center>
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