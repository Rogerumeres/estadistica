   
                    

    <?php
$atributos = array( 'id' => 'miformulario','name'=>'form','class'=>'form-horizontal');
//echo form_open(null, $atributos);
echo form_open_multipart('Info/buscar',$atributos);
?>
    
  <div class="col-md-6">
  <div class="form-group">
    

   <input type="search"  title="Buscar"  name="buscar" id="buscar" placeholder="Ingresar DNI" />
    </div>
    <input type="submit" value="Mostrar" title="Mostrar" class="btn btn-primary" id="mostrar"/>
  
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
                                                                Establecimiento
                                                                    </th>
                                                                    
                                                                    
                                                                    <th>                                                             
                                                                DNI
                                                                    </th>
                                                                    <th>
                                                                    Nombres y Apellidos
                                                                    </th>
                                                                   <th>
                                                                    Edad
                                                                    </th>
                                                                      <th>
                                                                    Tipo Edad
                                                                    </th>
                                                                     <th>
                                                                    Atiende
                                                                    </th>
                                                                    <th>                                                             
                                                                Año
                                                                    </th>
                                                                    <th>                                                             
                                                                Mes
                                                                    </th>
                                                                     <th>                                                             
                                                                Fecha Atención
                                                                    </th>
                                                                    <th>
                                                                    Lote-Pagina-Registro
                                                                    </th>
                                                                   
                                                                    
                                                                    <th>
                                                                    Detalle Registro
                                                                    </th>
                                                                     <th>
                                                                    Descripción
                                                                    </th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>

                                                             <?php
                                                           
                                                            foreach ($datos as $row) {
                                  
                                                                     ?> 
                                                                <tr>
                                                                    
                                                                        
                                                                   
                                                                    <td>
                                                                       <center> <?php echo $row->Nombre_Establecimiento ?></center>
                                                                    </td>
                                                                   
                                                                     
                                                                     <td>
                                                                       <center> <?php echo $row->Numero_Documento ?></center>
                                                                    </td>
                                                                     <td style="font-size:10px;">
                                                                       <center> <?php echo $row->Nombre_Paciente ?></center>
                                                                    </td>
                                                                    <td style="font-size:11px;">
                                                                       <center> <?php echo $row->Edad_Reg ?></center>
                                                                    </td>

                                                                    <td style="font-size:11px;">
                                                                       <center> <?php echo $row->Tipo_Edad ?></center>
                                                                    </td>
                                                                   <td style="font-size:9px;">
                                                                       <center> <?php echo $row->Personal_Salud?></center>
                                                                    </td>
                                                                    <td style="background-color:#FCD236;font-size:11px;">
                                                                       <center> <?php echo $row->Anio?></center>
                                                                    </td>
                                                                     <td style="background-color:#FCD236; ">
                                                                       <center> <?php echo $row->Mes ?></center>
                                                                    </td>
                                                                    <td style="background-color:#48d1cc;font-size:11px;">
                                                                       <center> <?php echo $row->fecha_Atencion ?></center>
                                                                    </td>
                                                                    <td style="font-size:11px;">
                                                                       <center> <?php echo $row->LOTE ?> | <?php echo $row->NUM_PAG ?> | <?php echo $row->NUM_REG ?></center>
                                                                    </td>

                                                                    
                                                                    <td onclick="ilumina(this)">
                                                                       
                                                                               <input type="text" disabled size="10" value="<?php echo $row->Tipo_Diagnostico ?> - <?php echo $row->Valor_Lab ?> - <?php echo $row->Codigo_Item ?>" />
                                                                       

                                                                      
                                                                       
                                                                    </td>
                                                                      <td style="font-size:9px;" onclick="ilumina(this)">
                                                                       
                                                                              <?php echo $row->Descripcion_Item ?>

                                                                      
                                                                       
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