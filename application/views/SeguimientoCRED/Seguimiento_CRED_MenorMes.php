<div class="col-sm-10 widget-container-col" id="widget-container-col-2">
<?php $atributos = array( 'id' => 'miformulario','name'=>'form','class'=>'form-horizontal');
//echo form_open(null, $atributos);
echo form_open_multipart('SeguimientoCRED/Mostrar_Seguimiento_CRED_MenorMes',$atributos);?>
    <div class="col-md-6">
        <div class="form-group">
            <select class="form-control select2" name="establec" id="establec">
                <option value = "8910">Seleccione Establecimiento</option>
                <?php foreach ($result1 as $row) 
                {?>
                <option value="<?php echo $row->RENAES ?>"><?php echo $row->Establecimiento ?></option>
                <?php
                }?>
            </select>
        </div>
        <div class="form-group">
            <select class="form-control" name="anio" id="anio">
                <option value="2020" selected>Seleccione Anio</option>
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
                <center> Establecimiento:<?php echo $Establecimiento->Establecimiento?></center>
            </div>
            <div class="widget-body">
                <div class="widget-main no-padding">
                    <table class="table table-striped table-bordered table-hover">
                        <thead class="thin-border-bottom">
                            <tr>
                                <th style="background-color:#045FB4;font-size:16px;color:#FFFFFF "><center><b>DNI</b></center></th>
                                <th style="background-color:#045FB4;font-size:16px;color:#FFFFFF "><center><b>Ficha Fam</b></center></th>
                                <th style="background-color:#045FB4;font-size:16px;color:#FFFFFF "><center><b>Nombre Paciente</b></center></th>
                                <th style="background-color:#045FB4;font-size:16px;color:#FFFFFF "><center><b>1° Control CRED</b></center></th>
                                <th style="background-color:#045FB4;font-size:16px;color:#FFFFFF "><center><b>2° Control CRED</b></center></th>
                                <th style="background-color:#045FB4;font-size:16px;color:#FFFFFF "><center><b>3° Control CRED</b></center></th>
                                <th style="background-color:#045FB4;font-size:16px;color:#FFFFFF "><center><b>4° Control CRED TA</b></center></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            foreach ($result2 as $row) 
                            {
                            ?> 
                            <tr>
                                <td><center> <?php echo $row->Nro_Doc?></center></td>
                                <td><center> <?php echo $row->FichaFam?></center></td>
                                <td><?php echo $row->Paciente ?></td>
                                <?php if ($row->PriControlCREDMes==1) { ?> 
                                    <td style="background-color:#92ebdf;font-size:14px;">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/2/PriControlCREDMes/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->PriControlCREDMes ?><i class="fa fa-check bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->PriControlCREDMes>1) { ?>
                                    <td style="background-color:#ffa6ac;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/2/PriControlCREDMes/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->PriControlCREDMes ?><i class="fa fa-times bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->PriControlCREDMes==0) { ?>
                                    <td style="background-color:#f8c471 ;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/2/PriControlCREDMes/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->PriControlCREDMes ?><i class="fa fa-lightbulb-o bigger-200"></i></a></b></center>
                                    </td>
                                <?php }?>
                                <?php if ($row->SegControlCREDMes==1) { ?> 
                                    <td style="background-color:#92ebdf;font-size:14px;">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/2/SegControlCREDMes/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->SegControlCREDMes?><i class="fa fa-check bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->SegControlCREDMes>1) { ?>
                                    <td style="background-color:#ffa6ac;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/2/SegControlCREDMes/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->SegControlCREDMes?><i class="fa fa-times bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->SegControlCREDMes==0) { ?>
                                    <td style="background-color:#f8c471;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/2/SegControlCREDMes/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->SegControlCREDMes?><i class="fa fa-lightbulb-o bigger-200"></i></a></b></center>
                                    </td>
                                <?php }?>
                                <?php if ($row->TerControlCREDMes==1) { ?> 
                                    <td style="background-color:#92ebdf;font-size:14px;">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/2/TerControlCREDMes/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->TerControlCREDMes?><i class="fa fa-check bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->TerControlCREDMes>1) { ?>
                                    <td style="background-color:#ffa6ac;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/2/TerControlCREDMes/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->TerControlCREDMes?><i class="fa fa-times bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->TerControlCREDMes==0) { ?>
                                    <td style="background-color:#f8c471;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/2/TerControlCREDMes/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->TerControlCREDMes?><i class="fa fa-lightbulb-o bigger-200"></i></a></b></center>
                                    </td>
                                <?php }?>
                                <?php if ($row->CuaControlCREDMes==1) { ?> 
                                    <td style="background-color:#92ebdf;font-size:14px;">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/2/CuaControlCREDMes/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->CuaControlCREDMes?><i class="fa fa-check bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->CuaControlCREDMes>1) { ?>
                                    <td style="background-color:#ffa6ac;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/2/CuaControlCREDMes/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->CuaControlCREDMes?><i class="fa fa-times bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->CuaControlCREDMes==0) { ?>
                                    <td style="background-color:#f8c471;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/2/CuaControlCREDMes/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->CuaControlCREDMes?><i class="fa fa-lightbulb-o bigger-200"></i></a></b></center>
                                    </td>
                                <?php }?>
                            </tr>
                        <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.span -->