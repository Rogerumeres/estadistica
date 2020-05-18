<div class="col-sm-18 widget-container-col" id="widget-container-col-2">
<?php $atributos = array( 'id' => 'miformulario','name'=>'form','class'=>'form-horizontal');
//echo form_open(null, $atributos);
echo form_open_multipart('SeguimientoCRED/Mostrar_Seguimiento_CRED_MenorAnio',$atributos);?>
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
                                <th style="background-color:#045FB4;font-size:16px;color:#FFFFFF "><center><b>4° Control CRED</b></center></th>
                                <th style="background-color:#045FB4;font-size:16px;color:#FFFFFF "><center><b>5° Control CRED</b></center></th>
                                <th style="background-color:#045FB4;font-size:16px;color:#FFFFFF "><center><b>6° Control CRED</b></center></th>
                                <th style="background-color:#045FB4;font-size:16px;color:#FFFFFF "><center><b>7° Control CRED</b></center></th>
                                <th style="background-color:#045FB4;font-size:16px;color:#FFFFFF "><center><b>8° Control CRED</b></center></th>
                                <th style="background-color:#045FB4;font-size:16px;color:#FFFFFF "><center><b>9° Control CRED</b></center></th>
                                <th style="background-color:#045FB4;font-size:16px;color:#FFFFFF "><center><b>10° Control CRED</b></center></th>
                                <th style="background-color:#045FB4;font-size:16px;color:#FFFFFF "><center><b>11° Control CRED TA</b></center></th>
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
                                <?php if ($row->PriControlCRED==1) { ?> 
                                    <td style="background-color:#92ebdf;font-size:14px;">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/3/PriControlCRED/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->PriControlCRED ?><i class="fa fa-check bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->PriControlCRED>1) { ?>
                                    <td style="background-color:#ffa6ac;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/3/PriControlCRED/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->PriControlCRED ?><i class="fa fa-times bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->PriControlCRED==0) { ?>
                                    <td style="background-color:#f8c471 ;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/3/PriControlCRED/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->PriControlCRED ?><i class="fa fa-lightbulb-o bigger-200"></i></a></b></center>
                                    </td>
                                <?php }?>
                                <?php if ($row->SegControlCRED==1) { ?> 
                                    <td style="background-color:#92ebdf;font-size:14px;">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/3/SegControlCRED/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->SegControlCRED?><i class="fa fa-check bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->SegControlCRED>1) { ?>
                                    <td style="background-color:#ffa6ac;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/3/SegControlCRED/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->SegControlCRED?><i class="fa fa-times bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->SegControlCRED==0) { ?>
                                    <td style="background-color:#f8c471;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/3/SegControlCRED/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->SegControlCRED?><i class="fa fa-lightbulb-o bigger-200"></i></a></b></center>
                                    </td>
                                <?php }?>
                                <?php if ($row->TerControlCRED==1) { ?> 
                                    <td style="background-color:#92ebdf;font-size:14px;">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/3/TerControlCRED/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->TerControlCRED?><i class="fa fa-check bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->TerControlCRED>1) { ?>
                                    <td style="background-color:#ffa6ac;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/3/TerControlCRED/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->TerControlCRED?><i class="fa fa-times bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->TerControlCRED==0) { ?>
                                    <td style="background-color:#f8c471;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/3/TerControlCRED/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->TerControlCRED?><i class="fa fa-lightbulb-o bigger-200"></i></a></b></center>
                                    </td>
                                <?php }?>
                                <?php if ($row->CuaControlCRED==1) { ?> 
                                    <td style="background-color:#92ebdf;font-size:14px;">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/3/CuaControlCRED/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->CuaControlCRED?><i class="fa fa-check bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->CuaControlCRED>1) { ?>
                                    <td style="background-color:#ffa6ac;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/3/CuaControlCRED/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->CuaControlCRED?><i class="fa fa-times bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->CuaControlCRED==0) { ?>
                                    <td style="background-color:#f8c471;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/3/CuaControlCRED/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->CuaControlCRED?><i class="fa fa-lightbulb-o bigger-200"></i></a></b></center>
                                    </td>
                                <?php }?>
                                <?php if ($row->QuiControlCRED==1) { ?> 
                                    <td style="background-color:#92ebdf;font-size:14px;">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/3/QuiControlCRED/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->QuiControlCRED?><i class="fa fa-check bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->QuiControlCRED>1) { ?>
                                    <td style="background-color:#ffa6ac;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/3/QuiControlCRED/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->QuiControlCRED?><i class="fa fa-times bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->QuiControlCRED==0) { ?>
                                    <td style="background-color:#f8c471;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/3/QuiControlCRED/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->QuiControlCRED?><i class="fa fa-lightbulb-o bigger-200"></i></a></b></center>
                                    </td>
                                <?php }?>
                                <?php if ($row->SexControlCRED==1) { ?> 
                                    <td style="background-color:#92ebdf;font-size:14px;">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/3/SexControlCRED/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->SexControlCRED?><i class="fa fa-check bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->SexControlCRED>1) { ?>
                                    <td style="background-color:#ffa6ac;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/3/SexControlCRED/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->SexControlCRED?><i class="fa fa-times bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->SexControlCRED==0) { ?>
                                    <td style="background-color:#f8c471;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/3/SexControlCRED/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->SexControlCRED?><i class="fa fa-lightbulb-o bigger-200"></i></a></b></center>
                                    </td>
                                <?php }?>
                                <?php if ($row->SepControlCRED==1) { ?> 
                                    <td style="background-color:#92ebdf;font-size:14px;">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/3/SepControlCRED/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->SepControlCRED?><i class="fa fa-check bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->SepControlCRED>1) { ?>
                                    <td style="background-color:#ffa6ac;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/3/SepControlCRED/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->SepControlCRED?><i class="fa fa-times bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->SepControlCRED==0) { ?>
                                    <td style="background-color:#f8c471;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/3/SepControlCRED/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->SepControlCRED?><i class="fa fa-lightbulb-o bigger-200"></i></a></b></center>
                                    </td>
                                <?php }?>
                                <?php if ($row->OctControlCRED==1) { ?> 
                                    <td style="background-color:#92ebdf;font-size:14px;">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/3/OctControlCRED/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->OctControlCRED?><i class="fa fa-check bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->OctControlCRED>1) { ?>
                                    <td style="background-color:#ffa6ac;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/3/OctControlCRED/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->OctControlCRED?><i class="fa fa-times bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->OctControlCRED==0) { ?>
                                    <td style="background-color:#f8c471;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/3/OctControlCRED/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->OctControlCRED?><i class="fa fa-lightbulb-o bigger-200"></i></a></b></center>
                                    </td>
                                <?php }?>
                                <?php if ($row->NovControlCRED==1) { ?> 
                                    <td style="background-color:#92ebdf;font-size:14px;">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/3/NovControlCRED/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->NovControlCRED?><i class="fa fa-check bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->NovControlCRED>1) { ?>
                                    <td style="background-color:#ffa6ac;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/3/NovControlCRED/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->NovControlCRED?><i class="fa fa-times bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->NovControlCRED==0) { ?>
                                    <td style="background-color:#f8c471;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/3/NovControlCRED/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->NovControlCRED?><i class="fa fa-lightbulb-o bigger-200"></i></a></b></center>
                                    </td>
                                <?php }?>
                                <?php if ($row->DecControlCRED==1) { ?> 
                                    <td style="background-color:#92ebdf;font-size:14px;">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/3/DecControlCRED/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->DecControlCRED?><i class="fa fa-check bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->DecControlCRED>1) { ?>
                                    <td style="background-color:#ffa6ac;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/3/DecControlCRED/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->DecControlCRED?><i class="fa fa-times bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->DecControlCRED==0) { ?>
                                    <td style="background-color:#f8c471;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/3/DecControlCRED/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->DecControlCRED?><i class="fa fa-lightbulb-o bigger-200"></i></a></b></center>
                                    </td>
                                <?php }?>
                                <?php if ($row->OncControlCRED==1) { ?> 
                                    <td style="background-color:#92ebdf;font-size:14px;">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/3/OncControlCRED/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->OncControlCRED?><i class="fa fa-check bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->OncControlCRED>1) { ?>
                                    <td style="background-color:#ffa6ac;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/3/OncControlCRED/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->OncControlCRED?><i class="fa fa-times bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->OncControlCRED==0) { ?>
                                    <td style="background-color:#f8c471;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/3/OncControlCRED/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->OncControlCRED?><i class="fa fa-lightbulb-o bigger-200"></i></a></b></center>
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