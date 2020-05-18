<div class="col-sm-10 widget-container-col" id="widget-container-col-2">
<?php $atributos = array( 'id' => 'miformulario','name'=>'form','class'=>'form-horizontal');
//echo form_open(null, $atributos);
echo form_open_multipart('SeguimientoCRED/Mostrar_Seguimiento_CRED_PoliSeisMeses',$atributos);?>
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
                                <th style="background-color:#045FB4;font-size:16px;color:#FFFFFF "><center><b>1° Suplemento Hierro</b></center></th>
                                <th style="background-color:#045FB4;font-size:16px;color:#FFFFFF "><center><b>2° Suplemento Hierro</b></center></th>
                                <th style="background-color:#045FB4;font-size:16px;color:#FFFFFF "><center><b>TA Suplemento Hierro 6 Meses</b></center></th>
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
                                <?php if ($row->CuatroMesesSupl==1) { ?> 
                                    <td style="background-color:#92ebdf;font-size:14px;">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/4/CuatroMesesSupl/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->CuatroMesesSupl ?><i class="fa fa-check bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->CuatroMesesSupl>1) { ?>
                                    <td style="background-color:#ffa6ac;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/4/CuatroMesesSupl/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->CuatroMesesSupl ?><i class="fa fa-times bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->CuatroMesesSupl==0) { ?>
                                    <td style="background-color:#f8c471 ;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/4/CuatroMesesSupl/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->CuatroMesesSupl ?><i class="fa fa-lightbulb-o bigger-200"></i></a></b></center>
                                    </td>
                                <?php }?>
                                <?php if ($row->CincoMesesSupl==1) { ?> 
                                    <td style="background-color:#92ebdf;font-size:14px;">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/4/CincoMesesSupl/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->CincoMesesSupl?><i class="fa fa-check bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->CincoMesesSupl>1) { ?>
                                    <td style="background-color:#ffa6ac;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/4/CincoMesesSupl/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->CincoMesesSupl?><i class="fa fa-times bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->CincoMesesSupl==0) { ?>
                                    <td style="background-color:#f8c471;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/4/CincoMesesSupl/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->CincoMesesSupl?><i class="fa fa-lightbulb-o bigger-200"></i></a></b></center>
                                    </td>
                                <?php }?>
                                <?php if ($row->SextoTAMesesSupl==1) { ?> 
                                    <td style="background-color:#92ebdf;font-size:14px;">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/4/SextoTAMesesSupl/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->SextoTAMesesSupl?><i class="fa fa-check bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->SextoTAMesesSupl>1) { ?>
                                    <td style="background-color:#ffa6ac;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/4/SextoTAMesesSupl/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->SextoTAMesesSupl?><i class="fa fa-times bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->SextoTAMesesSupl==0) { ?>
                                    <td style="background-color:#f8c471;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/4/SextoTAMesesSupl/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->SextoTAMesesSupl?><i class="fa fa-lightbulb-o bigger-200"></i></a></b></center>
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