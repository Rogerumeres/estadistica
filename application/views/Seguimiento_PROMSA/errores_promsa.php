<div class="col-sm-10 widget-container-col" id="widget-container-col-2">                   

    <?php
$atributos = array( 'id' => 'miformulario','name'=>'form','class'=>'form-horizontal');
//echo form_open(null, $atributos);
echo form_open_multipart('Seguimiento_PROMSA/Listar_errores_promsa',$atributos);
?>
    
 <div class="col-md-6">

 
      <div class="form-group">
<select class="chosen-select form-control" id="form-field-select-3" data-placeholder="Seleccione MicroRed" name="establec" > 
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
</div>

  

<div class="col-xs-12 col-sm-4">
                    
      <div class="widget-body">
        <div class="widget-main">
          <table class="table table-striped table-bordered table-hover";>
            <thead>
                <tr>
                <th style="font-size:20px;"> <center> <a target="blank" href="<?php echo base_url()?>./uploads/reporte_2020/PROMSA_2020.pdf">Ver manual PROMSA 2020</a>  </center></th>
                </tr>
            </thead>
           
         </table>

                            
        </div>
      </div>
                     
</div><!-- /.span -->




  <?php
if (empty($result2)){

$fecha_actualizacion='   No existen datos';
  }else{
  foreach ($result2 as $row) {
            
   $fecha_actualizacion=$row->fecha_actualizacion;

    }

  }
  ?>

         
 


<div class="row">
                  <div class="col-xs-12">
                    
                    <div class="clearfix">
                      <div class="pull-right tableTools-container"></div>
                    </div>
                    <div class="table-header">
                       <center><h1>Fecha actualización: <?php echo $fecha_actualizacion ?> </h1></center>
                    </div>

                    <!-- div.table-responsive -->

                    <!-- div.dataTables_borderWrap -->
                    <div>
                      <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                        <thead>
                          <tr>
                            <th >
                             Establecimiento
                              
                            </th>
                            <th class="hidden-480">Fecha Atencion</th>
                            <th >DNI- Nombres</th>
                           

                            <th>
                              <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                              Edad
                            </th>
                          
                            <th class="hidden-480">Lote Página Registro</th>
                            <th class="hidden-480">Estrategia</th>
                              <th class="hidden-480">Descripcion Error</th>
                             
                              <th> Detalles</th>
                          </tr>
                        </thead>

                        <tbody>
                             <?php
                                                           
                                                            foreach ($result2 as $row) {
                                  
                                                                     ?> 
                          <tr>
                            <td > <?php echo $row->Nombre_Establecimiento ?>    </td>
                            <td class="hidden-480"> <?php echo $row->Fecha_Atencion ?>  </td>
                            <td >  <?php echo $row->Numero_Documento?> <?php echo $row->Nombre_Paciente ?></td>
                            
                            <td><?php echo $row->Edad_Reg ?> <?php echo $row->Tipo_Edad ?></td>
                            <td class="hidden-480">   <?php echo $row->Lote ?> | <?php echo $row->Num_Pag ?> | <?php echo $row->Num_Reg ?>
                            </td>
                          <td class="hidden-480">
                        <?php echo $row->estrategia ?>
                         </td>
                             <td class="hidden-480">
                        <?php echo $row->descripcion_error ?>
                         </td>
                              <td>
                             
                                <a class='iframe' href="<?php echo base_url()?>Detalle_error/mostrar_errores_promsa_detalle/<?php echo $row->Codigo_Unico ?>/<?php echo $row->Id_Cita?>"><i class="fa fa-eye bigger-200"></i></a>
                           

                              
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
                 


