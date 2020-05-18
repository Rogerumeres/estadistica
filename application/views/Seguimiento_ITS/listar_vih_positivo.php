
                   

    <?php
$atributos = array( 'id' => 'miformulario','name'=>'form','class'=>'form-horizontal');
//echo form_open(null, $atributos);
echo form_open_multipart('Seguimiento_ITS/Listar_vih_positivo',$atributos);
?>
    
 <div class="col-md-6">

 
    
  <div class="form-group">
 
    <select class="form-control select2" name="establec" id="establec">
        <option value="00">Seleccione MicroRed</option>                    
                        

                  <?php
foreach ($result1 as $row) {
    ?>
      <option value="<?php echo $row->Codigo_MicroRed ?>"><?php echo $row->MicroRed ?></option>

      <?php
  }
?>
                </select>
   </div>

    
       <input type="submit" value="Mostrar" title="Mostrar" class="btn btn-primary" id="Mostrar"/>
 

 </div>

<?php
if (empty($result2)){

$fecha_actualizacion='   No existen datos';
  }else{
  foreach ($result2 as $row) {
            
   $fecha_actualizacion=$row->fecha_actualizacion;

    }

  }
       ?>
      
<div class="col-sm-12 widget-container-col" id="widget-container-col-2">
  

                                            <div class="widget-box widget-color-blue" id="widget-box-2">
                                                
  
                                                
                                                
                                                <div class="widget-header">
                                               <center><h1>Fecha actualización: <?php echo $fecha_actualizacion ?> </h1></center>
                                                </div>

                                                <div class="widget-body">
                                                    <div class="widget-main no-padding">
                                                        <table class="table table-striped table-bordered table-hover">
                                                            <thead class="thin-border-bottom">

                                                                <tr>
                 

                <th>  Fecha Atención      </th>
               
                <th>   Establecimiento   </th>    
               
                <th>DNI</th>
                <th>Nombre de Paciente</th>
                <th>Edad</th>
                <th>Tipo edad</th>
                                                                              
                <th >Lote Página Registro</th>
             
               
                <th>Tamisaje reactivo VIH Población general</th>
                 <th>Tamisaje Reactivo VIH Gestante</th>
                  <th>Dx. Sida</th>
                 
                 
                   <th>Ver Detalle</th>
                </tr>
                                                            </thead>

                                                            <tbody>

                                                             <?php
                                                           
                                                            foreach ($result2 as $row) {
                                  
                                                                     ?> 
                                                               <tr>
                  
                  <td >
                      <center> <?php echo $row->Fecha_Atencion ?></center>
                  </td>
                  
                  <td> 
                    <center> <?php echo $row->Nombre_Establecimiento ?></center>
                  </td>
                
                  <td>
                       <center> <?php echo $row->Numero_Documento?></center>
                  </td>
                 
                  <td >
                       <center> <?php echo $row->Nombre_Paciente ?></center>
                  </td>
                  <td>
                       <center> <?php echo $row->Edad_Reg ?></center>
                   </td>
                    <td >
                       <center> <?php echo $row->Tipo_Edad ?></center>
                  </td>
                  

                  <td>
                       <center> <?php echo $row->Lote ?> | <?php echo $row->Num_Pag ?> | <?php echo $row->Num_Reg ?></center>
                  </td>
                                                   
                   <?php if ($row->Tamisaje_Positivo_VIH_PoblacionGeneral==1) { ?> 

                                                                    <td style="background-color:#ffc93b;font-size:12px; ">
                                                                        <center> <?php echo $row->Tamisaje_Positivo_VIH_PoblacionGeneral ?></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td>
                                                                        <center> <b><?php echo '' ?></b></center>
                                                                    </td>
                                                                      <?php }  ?>  


                  <?php if ($row->Tamisaje_Positivo_VIH_Gestante==1) { ?> 

                                                                    <td style="background-color:#ffc93b;font-size:11px; ">
                                                                        <center> <?php echo $row->Tamisaje_Positivo_VIH_Gestante ?></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td>
                                                                        <center> <b><?php echo '' ?></b></center>
                                                                    </td>
                                                                      <?php }  ?>  

                  <?php if ($row->Dx_SIDA==1) { ?> 

                                                                    <td style="background-color:#ffc93b;font-size:12px; ">
                                                                        <center> <?php echo $row->Dx_SIDA ?></center>
                                                                    </td>
                                                                      <?php } else { ?>

                                                                          <td>
                                                                        <center> <b><?php echo '' ?></b></center>
                                                                    </td>
                                                                      <?php }  ?>  


                 

               
            
             
                <td><center>
                        <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_errores_its_detalle/<?php echo $row->Codigo_Unico ?>/<?php echo $row->Id_Cita?>"><i class="fa fa-eye bigger-200"></i></a></center>
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