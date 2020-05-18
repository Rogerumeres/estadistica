<?php
$atributos = array( 'id' => 'miformulario','name'=>'form','class'=>'form-horizontal');
//echo form_open(null, $atributos);
echo form_open_multipart('Errores/listar_gestantes',$atributos);
?>
<div class="box-header"> 
    <div class="col-md-3">
        <div class="form-group">
            <select class="form-control select2" name="establec" id="establec">
                <option value="000008910">Seleccione            </option>                    
                <?php
                foreach ($ListadoEstablecimientos as $row) {
                ?>
                    <option value="<?php echo $row->Codigo_Unico ?>"><?php echo $row->Nombre_Establecimiento ?>                </option>
                <?php
                }
                ?>
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
</div>
    
<div class="panel panel-default">
    <div class="box-header">
        <center>  <h1 class="box-title" style="color:#078FFA">  Establecimiento:  <?php echo $EstablecimientoSeleccionado->Nombre_Establecimiento ?></h1></center>
    </div>                     
<!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th >Codigo</th> 
                    <th >DNI</th>
                    <th>Nombre de Paciente</th>
                    <th>Plan</th>
                    <th>Vif</th>
                    <th>Atd</th>
                    <th>Hep</th>                                                                      
                    <th>Reen</th>
                    <th>Parto</th>
                    <th>2Bat</th>
                    <th>2Eco</th>
                    <th>1Bat</th>
                    <th>SF1</th>
                    <th>Prot</th>
                    <th>Lev</th>
                    <th>Mod</th>
                    <th>Sev</th>
                    <th>PCont</th>
                    <th>PAtd</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($ListadoGestantes as $row) { ?>
                <tr>
                    <td><center> <?php echo $row->CODIGO_UNICO?></center></td>
                    <td><center> <?php echo $row->NUMERO_DOCUMENTO_PACIENTE?></center></td>
                    <td><?php echo $row->NOMBRES_PACIENTE ?></td>
                    <?php if ($row->PlanParto != "" ) { ?>
                    <td style="font-size:14px;background-color:#07FA6A;"><center> <?php echo $row->PlanParto ?>
                                                <?php } else { ?>
                    <td style="font-size:16px;"><center> <?php echo $row->PlanParto?>
                                                       <?php } ?></a></b></center>
                    <?php if ($row->GestanteVif != "" ) { ?>
                    <td style="font-size:14px;background-color:#07FA6A;"><center> <?php echo $row->GestanteVif ?>
                                                <?php } else { ?>
                    <td style="font-size:16px;"><center> <?php echo $row->GestanteVif?>
                                                       <?php } ?></a></b></center>
                    <?php if ($row->Total_GestantesAtendidas != "" ) { ?>
                    <td style="font-size:14px;background-color:#07FA6A;"><center> <?php echo $row->Total_GestantesAtendidas ?>
                                                <?php } else { ?>
                    <td style="font-size:16px;"><center> <?php echo $row->Total_GestantesAtendidas?>
                                                       <?php } ?></a></b></center>
                    <?php if ($row->Gestantes_Hepatitis != "" ) { ?>
                    <td style="font-size:14px;background-color:#07FA6A;"><center> <?php echo $row->Gestantes_Hepatitis ?>
                                                <?php } else { ?>
                    <td style="font-size:16px;"><center> <?php echo $row->Gestantes_Hepatitis?>
                                                       <?php } ?></a></b></center>
                    <?php if ($row->GestanteReenfocada != "" ) { ?>
                    <td style="font-size:14px;background-color:#07FA6A;"><center> <?php echo $row->GestanteReenfocada ?>
                                                <?php } else { ?>
                    <td style="font-size:16px;"><center> <?php echo $row->GestanteReenfocada?>
                                                       <?php } ?></a></b></center>
                    <?php if ($row->partos != "" ) { ?>
                    <td style="font-size:14px;background-color:#07FA6A;"><center> <?php echo $row->partos ?>
                                                <?php } else { ?>
                    <td style="font-size:16px;"><center> <?php echo $row->partos?>
                                                       <?php } ?></a></b></center>
                    <?php if ($row->Gestantes_2Bateria != "" ) { ?>
                    <td style="font-size:14px;background-color:#07FA6A;"><center> <?php echo $row->Gestantes_2Bateria ?>
                                                <?php } else { ?>
                    <td style="font-size:16px;"><center> <?php echo $row->Gestantes_2Bateria?>
                                                       <?php } ?></a></b></center>
                    <?php if ($row->Gestante_Ecografia2 != "" ) { ?>
                    <td style="font-size:14px;background-color:#07FA6A;"><center> <?php echo $row->Gestante_Ecografia2 ?>
                                                <?php } else { ?>
                    <td style="font-size:16px;"><center> <?php echo $row->Gestante_Ecografia2?>
                                                       <?php } ?></a></b></center>
                    <?php if ($row->Gestantes_1Bateria != "" ) { ?>
                    <td style="font-size:14px;background-color:#07FA6A;"><center> <?php echo $row->Gestantes_1Bateria ?>
                                                <?php } else { ?>
                    <td style="font-size:16px;"><center> <?php echo $row->Gestantes_1Bateria?>
                                                       <?php } ?></a></b></center>
                    <?php if ($row->GestanteAtdSF1 != "" ) { ?>
                    <td style="font-size:14px;background-color:#07FA6A;"><center> <?php echo $row->GestanteAtdSF1 ?>
                                                <?php } else { ?>
                    <td style="font-size:16px;"><center> <?php echo $row->GestanteAtdSF1?>
                                                       <?php } ?></a></b></center>
                    <?php if ($row->GestanteProtegidaSF6 != "" ) { ?>
                    <td style="font-size:14px;background-color:#07FA6A;"><center> <?php echo $row->GestanteProtegidaSF6 ?>
                                                <?php } else { ?>
                    <td style="font-size:16px;"><center> <?php echo $row->GestanteProtegidaSF6?>
                                                       <?php } ?></a></b></center>
                    <?php if ($row->GestanteAnemiaLeve != "" ) { ?>
                    <td style="font-size:14px;background-color:#07FA6A;"><center> <?php echo $row->GestanteAnemiaLeve ?>
                                                <?php } else { ?>
                    <td style="font-size:16px;"><center> <?php echo $row->GestanteAnemiaLeve?>
                                                       <?php } ?></a></b></center>                                                 
                    <?php if ($row->GestanteAnemiaModerado != "" ) { ?>
                    <td style="font-size:14px;background-color:#07FA6A;"><center> <?php echo $row->GestanteAnemiaModerado ?>
                                                <?php } else { ?>
                    <td style="font-size:16px;"><center> <?php echo $row->GestanteAnemiaModerado?>
                                                       <?php } ?></a></b></center>
                    <?php if ($row->GestanteAnemiaSevero != "" ) { ?>
                    <td style="font-size:14px;background-color:#07FA6A;"><center> <?php echo $row->GestanteAnemiaSevero ?>
                                                <?php } else { ?>
                    <td style="font-size:16px;"><center> <?php echo $row->GestanteAnemiaSevero?>
                                                       <?php } ?></a></b></center>
                    <?php if ($row->PuerperaControlada != "" ) { ?>
                    <td style="font-size:14px;background-color:#07FA6A;"><center> <?php echo $row->PuerperaControlada ?>
                                                <?php } else { ?>
                    <td style="font-size:16px;"><center> <?php echo $row->PuerperaControlada?>
                                                       <?php } ?></a></b></center>
                    <?php if ($row->PuerperaAtendida != "" ) { ?>
                    <td style="font-size:14px;background-color:#07FA6A;"><center> <?php echo $row->PuerperaAtendida ?>
                                                <?php } else { ?>
                    <td style="font-size:16px;"><center> <?php echo $row->PuerperaAtendida?>
                                                       <?php } ?></a></b></center>
                                                            
                </tr>
            <?php  } ?>
            </tbody>
            <tfoot>
            </tfoot>
        </table>
    </div>
<!-- /.box-body -->
</div>
