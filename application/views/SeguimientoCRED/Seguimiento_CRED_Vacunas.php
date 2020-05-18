<div class="col-sm-18 widget-container-col" id="widget-container-col-2">
<?php $atributos = array( 'id' => 'miformulario','name'=>'form','class'=>'form-horizontal');
//echo form_open(null, $atributos);
echo form_open_multipart('SeguimientoCRED/Mostrar_Seguimiento_CRED_Vacunas',$atributos);?>
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
                                <th style="background-color:#045FB4;font-size:16px;color:#FFFFFF "><center><b>Vacunas 0 Dias</b></center></th>
                                <th style="background-color:#045FB4;font-size:16px;color:#FFFFFF "><center><b>Vacunas 2 Meses</b></center></th>
                                <th style="background-color:#045FB4;font-size:16px;color:#FFFFFF "><center><b>Vacunas 4 Meses</b></center></th>
                                <th style="background-color:#045FB4;font-size:16px;color:#FFFFFF "><center><b>Vacunas 6 Meses</b></center></th>
                                <th style="background-color:#045FB4;font-size:16px;color:#FFFFFF "><center><b>Vacunas 7 Meses</b></center></th>
                                <th style="background-color:#045FB4;font-size:16px;color:#FFFFFF "><center><b>Vacunas 1 Año</b></center></th>
                                <th style="background-color:#045FB4;font-size:16px;color:#FFFFFF "><center><b>Vacunas 15 Meses</b></center></th>
                                <th style="background-color:#045FB4;font-size:16px;color:#FFFFFF "><center><b>Vacunas 18 Meses</b></center></th>  
                                <th style="background-color:#045FB4;font-size:16px;color:#FFFFFF "><center><b>Vacunas 2 Años</b></center></th>
                                <th style="background-color:#045FB4;font-size:16px;color:#FFFFFF "><center><b>Vacunas 4 Años</b></center></th>
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
                                <?php if ($row->VacunasCeroDias==2) { ?> 
                                    <td style="background-color:#92ebdf;font-size:14px;">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/7/VacunasCeroDias/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->VacunasCeroDias ?><i class="fa fa-check bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif(($row->VacunasCeroDias>2) &&  ($row->VacunasCeroDias<4)) { ?>
                                    <td style="background-color:#ffa6ac;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/7/VacunasCeroDias/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->VacunasCeroDias ?><i class="fa fa-times bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif(($row->VacunasCeroDias>0) &&  ($row->VacunasCeroDias<2)) { ?>
                                    <td style="background-color:#f8c471 ;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/7/VacunasCeroDias/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->VacunasCeroDias ?><i class="fa fa-lightbulb-o bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->VacunasCeroDias==0) { ?>
                                    <td style="background-color:#FD8383 ;font-size:14px; ">
                                        <center><b><?php echo $row->VacunasCeroDias ?></b></center>
                                    </td>
                                <?php }elseif($row->VacunasCeroDias>3) { ?>
                                    <td style="background-color:#FCFCFC ;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/7/VacunasCeroDias/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->VacunasCeroDias ?><i class="fa fa-spinner fa-2x "></i></a></b></center>
                                    </td>
                                <?php }?>
                                <?php if ($row->VacunasDosMeses==4) { ?> 
                                    <td style="background-color:#92ebdf;font-size:14px;">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/7/VacunasDosMeses/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->VacunasDosMeses ?><i class="fa fa-check bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif(($row->VacunasDosMeses>4) &&  ($row->VacunasDosMeses<6)) { ?>
                                    <td style="background-color:#ffa6ac;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/7/VacunasDosMeses/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->VacunasDosMeses ?><i class="fa fa-times bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif(($row->VacunasDosMeses>0) &&  ($row->VacunasDosMeses<4)) { ?>
                                    <td style="background-color:#f8c471 ;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/7/VacunasDosMeses/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->VacunasDosMeses ?><i class="fa fa-lightbulb-o bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->VacunasDosMeses==0) { ?>
                                    <td style="background-color:#FD8383 ;font-size:14px; ">
                                        <center><b><?php echo $row->VacunasDosMeses ?></b></center>
                                    </td>
                                <?php }elseif($row->VacunasDosMeses>5) { ?>
                                    <td style="background-color:#FCFCFC ;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/7/VacunasDosMeses/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->VacunasDosMeses ?><i class="fa fa-spinner fa-2x "></i></a></b></center>
                                    </td>
                                <?php }?>
                                <?php if ($row->VacunasCuatroMeses==4) { ?> 
                                    <td style="background-color:#92ebdf;font-size:14px;">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/7/VacunasCuatroMeses/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->VacunasCuatroMeses ?><i class="fa fa-check bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif(($row->VacunasCuatroMeses>4) &&  ($row->VacunasCuatroMeses<6)) { ?>
                                    <td style="background-color:#ffa6ac;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/7/VacunasCuatroMeses/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->VacunasCuatroMeses ?><i class="fa fa-times bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif(($row->VacunasCuatroMeses>0) &&  ($row->VacunasCuatroMeses<4)) { ?>
                                    <td style="background-color:#f8c471 ;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/7/VacunasCuatroMeses/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->VacunasCuatroMeses ?><i class="fa fa-lightbulb-o bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->VacunasCuatroMeses==0) { ?>
                                    <td style="background-color:#FD8383 ;font-size:14px; ">
                                        <center><b><?php echo $row->VacunasCuatroMeses ?></b></center>
                                    </td>
                                <?php }elseif($row->VacunasCuatroMeses>5) { ?>
                                    <td style="background-color:#FCFCFC ;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/7/VacunasCuatroMeses/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->VacunasCuatroMeses ?><i class="fa fa-spinner fa-2x "></i></a></b></center>
                                    </td>
                                <?php }?>
                                <?php if ($row->VacunasSeisMeses==3) { ?> 
                                    <td style="background-color:#92ebdf;font-size:14px;">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/7/VacunasSeisMeses/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->VacunasSeisMeses ?><i class="fa fa-check bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif(($row->VacunasSeisMeses>3) &&  ($row->VacunasSeisMeses<5)) { ?>
                                    <td style="background-color:#ffa6ac;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/7/VacunasSeisMeses/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->VacunasSeisMeses ?><i class="fa fa-times bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif(($row->VacunasSeisMeses>0) &&  ($row->VacunasSeisMeses<3)) { ?>
                                    <td style="background-color:#f8c471 ;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/7/VacunasSeisMeses/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->VacunasSeisMeses ?><i class="fa fa-lightbulb-o bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->VacunasSeisMeses==0) { ?>
                                    <td style="background-color:#FD8383 ;font-size:14px; ">
                                        <center><b><?php echo $row->VacunasSeisMeses ?></b></center>
                                    </td>
                                <?php }elseif($row->VacunasSeisMeses>4) { ?>
                                    <td style="background-color:#FCFCFC ;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/7/VacunasSeisMeses/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->VacunasSeisMeses ?><i class="fa fa-spinner fa-2x "></i></a></b></center>
                                    </td>
                                <?php }?>
                                <?php if ($row->VacunasSieteMeses==1) { ?> 
                                    <td style="background-color:#92ebdf;font-size:14px;">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/7/VacunasSieteMeses/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->VacunasSieteMeses ?><i class="fa fa-check bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif(($row->VacunasSieteMeses>1) &&  ($row->VacunasSieteMeses<3)) { ?>
                                    <td style="background-color:#ffa6ac;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/7/VacunasSieteMeses/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->VacunasSieteMeses ?><i class="fa fa-times bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->VacunasSieteMeses==0) { ?>
                                    <td style="background-color:#FD8383 ;font-size:14px; ">
                                        <center><b><?php echo $row->VacunasSieteMeses ?></b></center>
                                    </td>
                                <?php }elseif($row->VacunasSieteMeses>2) { ?>
                                    <td style="background-color:#FCFCFC ;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/7/VacunasSieteMeses/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->VacunasSieteMeses ?><i class="fa fa-spinner fa-2x "></i></a></b></center>
                                    </td>
                                <?php }?>
                                <?php if ($row->VacunasUnAnio==3) { ?> 
                                    <td style="background-color:#92ebdf;font-size:14px;">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/7/VacunasUnAnio/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->VacunasUnAnio ?><i class="fa fa-check bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif(($row->VacunasUnAnio>3) &&  ($row->VacunasUnAnio<5)) { ?>
                                    <td style="background-color:#ffa6ac;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/7/VacunasUnAnio/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->VacunasUnAnio ?><i class="fa fa-times bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif(($row->VacunasUnAnio>0) &&  ($row->VacunasUnAnio<3)) { ?>
                                    <td style="background-color:#f8c471 ;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/7/VacunasUnAnio/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->VacunasUnAnio ?><i class="fa fa-lightbulb-o bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->VacunasUnAnio==0) { ?>
                                    <td style="background-color:#FD8383 ;font-size:14px; ">
                                        <center><b><?php echo $row->VacunasUnAnio ?></b></center>
                                    </td>
                                <?php }elseif($row->VacunasUnAnio>4) { ?>
                                    <td style="background-color:#FCFCFC ;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/7/VacunasUnAnio/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->VacunasUnAnio ?><i class="fa fa-spinner fa-2x "></i></a></b></center>
                                    </td>
                                <?php }?>
                                <?php if ($row->VacunasQuinceMeses==1) { ?> 
                                    <td style="background-color:#92ebdf;font-size:14px;">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/7/VacunasQuinceMeses/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->VacunasQuinceMeses ?><i class="fa fa-check bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif(($row->VacunasQuinceMeses>1) &&  ($row->VacunasQuinceMeses<3)) { ?>
                                    <td style="background-color:#ffa6ac;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/7/VacunasQuinceMeses/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->VacunasQuinceMeses ?><i class="fa fa-times bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->VacunasQuinceMeses==0) { ?>
                                    <td style="background-color:#FD8383 ;font-size:14px; ">
                                        <center><b><?php echo $row->VacunasQuinceMeses ?></b></center>
                                    </td>
                                <?php }elseif($row->VacunasQuinceMeses>2) { ?>
                                    <td style="background-color:#FCFCFC ;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/7/VacunasQuinceMeses/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->VacunasQuinceMeses ?><i class="fa fa-spinner fa-2x "></i></a></b></center>
                                    </td>
                                <?php }?>
                                <?php if ($row->VacunasDieciOchoMeses==3) { ?> 
                                    <td style="background-color:#92ebdf;font-size:14px;">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/7/VacunasDieciOchoMeses/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->VacunasDieciOchoMeses ?><i class="fa fa-check bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif(($row->VacunasDieciOchoMeses>3) &&  ($row->VacunasDieciOchoMeses<5)) { ?>
                                    <td style="background-color:#ffa6ac;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/7/VacunasDieciOchoMeses/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->VacunasDieciOchoMeses ?><i class="fa fa-times bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif(($row->VacunasDieciOchoMeses>0) &&  ($row->VacunasDieciOchoMeses<3)) { ?>
                                    <td style="background-color:#f8c471 ;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/7/VacunasDieciOchoMeses/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->VacunasDieciOchoMeses ?><i class="fa fa-lightbulb-o bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->VacunasDieciOchoMeses==0) { ?>
                                    <td style="background-color:#FD8383 ;font-size:14px; ">
                                        <center><b><?php echo $row->VacunasDieciOchoMeses ?></b></center>
                                    </td>
                                <?php }elseif($row->VacunasDieciOchoMeses>4) { ?>
                                    <td style="background-color:#FCFCFC ;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/7/VacunasDieciOchoMeses/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->VacunasDieciOchoMeses ?><i class="fa fa-spinner fa-2x "></i></a></b></center>
                                    </td>
                                <?php }?>
                                <?php if ($row->VacunasDosAInfluenza==1) { ?> 
                                    <td style="background-color:#92ebdf;font-size:14px;">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/7/VacunasDosAInfluenza/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->VacunasDosAInfluenza ?><i class="fa fa-check bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif(($row->VacunasDosAInfluenza>1) &&  ($row->VacunasDosAInfluenza<3)) { ?>
                                    <td style="background-color:#ffa6ac;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/7/VacunasDosAInfluenza/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->VacunasDosAInfluenza ?><i class="fa fa-times bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->VacunasDosAInfluenza==0) { ?>
                                    <td style="background-color:#FD8383 ;font-size:14px; ">
                                        <center><b><?php echo $row->VacunasDosAInfluenza ?></b></center>
                                    </td>
                                <?php }elseif($row->VacunasDosAInfluenza>2) { ?>
                                    <td style="background-color:#FCFCFC ;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/7/VacunasDosAInfluenza/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->VacunasDosAInfluenza ?><i class="fa fa-spinner fa-2x "></i></a></b></center>
                                    </td>
                                <?php }?>
                                <!--if ($row->Nro_Doc=='Totales') 
                                {
                                    //<td style="background-color:#045FB4;font-size:16px;color:#FFFFFF "><center><b><?php echo $row->VacunasCuatroAnios ?></b></center></td>
                                }else
                                {-->
                                    <?php if ($row->VacunasCuatroAnios==2) { ?> 
                                        <td style="background-color:#92ebdf;font-size:14px;">
                                            <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/7/VacunasCuatroAnios/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->VacunasCuatroAnios ?><i class="fa fa-check bigger-200"></i></a></b></center>
                                        </td>
                                    <?php }elseif(($row->VacunasCuatroAnios>2) &&  ($row->VacunasCuatroAnios<4)) { ?>
                                        <td style="background-color:#ffa6ac;font-size:14px; ">
                                            <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/7/VacunasCuatroAnios/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->VacunasCuatroAnios ?><i class="fa fa-times bigger-200"></i></a></b></center>
                                        </td>
                                    <?php }elseif(($row->VacunasCuatroAnios>0) &&  ($row->VacunasCuatroAnios<2)) { ?>
                                        <td style="background-color:#f8c471 ;font-size:14px; ">
                                            <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/7/VacunasCuatroAnios/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->VacunasCuatroAnios ?><i class="fa fa-lightbulb-o bigger-200"></i></a></b></center>
                                        </td>
                                    <?php }elseif($row->VacunasCuatroAnios==0) { ?>
                                        <td style="background-color:#FD8383 ;font-size:14px; ">
                                            <center><b><?php echo $row->VacunasCuatroAnios ?></b></center>
                                        </td>
                                    <?php }elseif($row->VacunasCuatroAnios>3) { ?>
                                        <td style="background-color:#FCFCFC ;font-size:14px; ">
                                            <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/7/VacunasCuatroAnios/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->VacunasCuatroAnios ?><i class="fa fa-spinner fa-2x "></i></a></b></center>
                                        </td>
                                    <?php }?>
                                <!--}-->
                            </tr>
                        <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.span -->