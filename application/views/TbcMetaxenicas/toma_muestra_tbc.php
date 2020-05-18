<div class="col-sm-18 widget-container-col" id="widget-container-col-2">
<?php $atributos = array( 'id' => 'miformulario','name'=>'form','class'=>'form-horizontal');
//echo form_open(null, $atributos);
echo form_open_multipart('TbcMetaxenicas/Tbc_toma_muestra',$atributos);?>
    <div class="col-md-6">
        <div class="form-group">
            <select class="form-control select2" name="establec" id="establec">
                <option value="8910">Seleccione Establecimiento</option>                    
                <?php foreach ($result1 as $row) 
                {?>
                    <option value="<?php echo $row->RENAES ?>"><?php echo $row->Establecimiento ?></option>
                <?php
                }?>
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
        <input type="submit" value="Mostrar" title="Mostrar" class="btn btn-primary" id="mostrar"/>
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
                                <th>DNI</th>
                                <th>Ficha Familiar</th>
                                <th>Nombres y Apellidos</th>
                                <th>Primera Muestra</th>
                                <th>Segunda Muestra</th>
                            </tr>
                        </thead>
                            <tbody>
                            <?php foreach ($result2 as $row) 
                            {?> 
                                <tr>
                                    <td><center> <?php echo $row->Nro_Doc ?></center></td>
                                    <td><center> <?php echo $row->FichaFam ?></center></td>
                                    <td><?php echo $row->Paciente ?></td>
                                    <?php if ($row->SR1==1) 
                                    { ?> 
                                        <td style="background-color:#8fffc9;">
                                        <center> <?php echo $row->SR1 ?>
                                        <a target=blank href="<?php echo base_url()?>Detalle_error/mostrar_detalle_tbc/1/SR1/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>">
                                        <i class="fa fa-check bigger-200"></i></a></center></td>
                                    <?php } elseif ($row->SR1>=2) 
                                    { ?>
                                        <td style="background-color:#ff9e81;">
                                        <center> <?php echo $row->SR1 ?>
                                        <a target=blank href="<?php echo base_url()?>Detalle_error/mostrar_detalle_tbc/1/SR1/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>">
                                        <i class="fa fa-times bigger-200"></i></a></center></td>
                                    <?php } else
                                    { ?>
                                        <td><center> <?php echo $row->SR1 ?></center></td>
                                    <?php } ?>
                                    
                                    <?php if ($row->SR2==1) 
                                    { ?> 
                                        <td style="background-color:#8fffc9;">
                                        <center> <?php echo $row->SR2 ?>
                                        <a target=blank href="<?php echo base_url()?>Detalle_error/mostrar_detalle_tbc/1/SR2/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>">
                                        <i class="fa fa-check bigger-200"></i></a></center></td>
                                    <?php } elseif ($row->SR2>=2) 
                                    { ?>
                                        <td style="background-color:#ff9e81;">
                                        <center> <?php echo $row->SR2 ?>
                                        <a target=blank href="<?php echo base_url()?>Detalle_error/mostrar_detalle_tbc/1/SR2/<?php echo $RENAES?>/<?php echo $row->Nro_Doc?>/<?php echo $row->FichaFam?>">
                                        <i class="fa fa-times bigger-200"></i></a></center></td>
                                    <?php } else
                                    { ?>
                                        <td><center><?php echo $row->SR2 ?></center></td>
                                    <?php } ?>
                                </tr>
                            
                            <?php
                            }?>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.span -->