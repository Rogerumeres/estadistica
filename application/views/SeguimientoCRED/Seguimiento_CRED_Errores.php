<div class="col-sm-18 widget-container-col" id="widget-container-col-2">
<?php $atributos = array( 'id' => 'miformulario','name'=>'form','class'=>'form-horizontal');
//echo form_open(null, $atributos);
echo form_open_multipart('SeguimientoCRED/Mostrar_Seguimiento_CRED_Errores',$atributos);?>
    <div class="col-md-5">
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
                                <th style="background-color:#045FB4;font-size:16px;color:#FFFFFF "><center><b>Z001 en Blanco</b></center></th>
                                <th style="background-color:#045FB4;font-size:16px;color:#FFFFFF "><center><b>Z298 en Blanco</b></center></th>
                                <th style="background-color:#045FB4;font-size:16px;color:#FFFFFF "><center><b>A09X en Menores 5a</b></center></th>
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
                                <?php if ($row->ControlCREDenBlanco==0) { ?> 
                                    <td style="background-color:#92ebdf;font-size:14px;">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/1/ControlCREDenBlanco/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->ControlCREDenBlanco ?><i class="fa fa-check bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->ControlCREDenBlanco>0) { ?>
                                    <td style="background-color:#ffa6ac;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/1/ControlCREDenBlanco/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->ControlCREDenBlanco ?><i class="fa fa-times bigger-200"></i></a></b></center>
                                    </td>
                                <?php }?>
                                <?php if ($row->SupleEnBlanco==0) { ?> 
                                    <td style="background-color:#92ebdf;font-size:14px;">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/1/SupleEnBlanco/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->SupleEnBlanco?><i class="fa fa-check bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->SupleEnBlanco>0) { ?>
                                    <td style="background-color:#ffa6ac;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/1/SupleEnBlanco/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->SupleEnBlanco?><i class="fa fa-times bigger-200"></i></a></b></center>
                                    </td>
                                <?php }?>
                                <?php if ($row->EDAPersistente==0) { ?> 
                                    <td style="background-color:#92ebdf;font-size:14px;">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/1/EDAPersistente/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->EDAPersistente?><i class="fa fa-check bigger-200"></i></a></b></center>
                                    </td>
                                <?php }elseif($row->EDAPersistente>0) { ?>
                                    <td style="background-color:#ffa6ac;font-size:14px; ">
                                        <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/Mostrar_detalle_Seguimiento_CRED/1/EDAPersistente/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>"><?php echo $row->EDAPersistente?><i class="fa fa-times bigger-200"></i></a></b></center>
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