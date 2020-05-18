<div class="col-sm-12 widget-container-col" id="widget-container-col-2">
    <?php
    $atributos = array( 'id' => 'miformulario','name'=>'form','class'=>'form-horizontal');
    //echo form_open(null, $atributos);
    echo form_open_multipart('Seguimiento/buscar_atenciones',$atributos);
    ?>
    <div class="col-md-6">
        <div class="form-group">
            <select class="form-control" name="documento" id="documento">
                <option value="1">DNI</option>
                <option value="2">HCL</option>
                <option value="3">Apellidos y Nombres</option>
            </select>
        </div>
        <div class="form-group">
            <select class="form-control select2" name="establec" id="establec">
                <option value="1">Todos los Establecimientos</option>                    
                <?php foreach ($result1 as $row) 
                {
                    ?>
                    <option value="<?php echo $row->Codigo_Unico ?>"><?php echo $row->Nombre_Establecimiento ?></option>
                    <?php
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <input type="search"  title="dato"  name="dato" id="dato" placeholder="Ingresar DNI" required />
        </div>
        <input type="submit" value="Buscar" title="Buscar" class="btn btn-primary" id="Buscar"/>
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
            <div class="widget-header"></div>
            <div class="widget-body">
                <div class="widget-main no-padding">
                    <table class="table table-striped table-bordered table-hover">
                        <thead class="thin-border-bottom">
                            <tr>
                                <th style="background-color:#045FB4;font-size:14px;color:#FFFFFF "><center><b>Establecimiento</b></center></th>
                                <th style="background-color:#045FB4;font-size:14px;color:#FFFFFF "><center><b>Fecha A.</b></center></th>
                                <th style="background-color:#045FB4;font-size:14px;color:#FFFFFF "><center><b>FichaFam</b></center></th>
                                <th style="background-color:#045FB4;font-size:14px;color:#FFFFFF "><center><b>DNI</b></center></th>
                                <th style="background-color:#045FB4;font-size:14px;color:#FFFFFF "><center><b>Nombres y Apellidos</b></center></th>
                                <th style="background-color:#045FB4;font-size:14px;color:#FFFFFF "><center><b>Fecha N.</b></center></th>
                                <th style="background-color:#045FB4;font-size:14px;color:#FFFFFF "><center><b>Dat/Pac</b></center></th>
                                <th style="background-color:#045FB4;font-size:14px;color:#FFFFFF "><center><b>Cie_1</b></center></th>
                                <th style="background-color:#045FB4;font-size:14px;color:#FFFFFF "><center><b>Cie_2</b></center></th>
                                <th style="background-color:#045FB4;font-size:14px;color:#FFFFFF "><center><b>Cie_3</b></center></th>
                                <th style="background-color:#045FB4;font-size:14px;color:#FFFFFF "><center><b>Cie_4</b></center></th>
                                <th style="background-color:#045FB4;font-size:14px;color:#FFFFFF "><center><b>Cie_5</b></center></th>
                                <th style="background-color:#045FB4;font-size:14px;color:#FFFFFF "><center><b>Cie_6</b></center></th>
                                <th style="background-color:#045FB4;font-size:14px;color:#FFFFFF "><center><b>Lot Pag Reg</b></center></th>
                                <th style="background-color:#045FB4;font-size:14px;color:#FFFFFF "><center><b>Profesional Atención</b></center></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            foreach ($result2 as $row) 
                            {?> 
                            <tr>
                                <td style="background-color:#75DBE8;font-size:12px; "; onclick="ilumina(this)"; ondblclick="iluminaDoubleClick(this)"><?php echo $row->Establecimiento ?></td>                                                                        
                                <td style="background-color:#75DBE8;font-size:12px; "; onclick="ilumina(this)"; ondblclick="iluminaDoubleClick(this)"><?php echo $row->FechaAtencion ?></td>
                                <td style="background-color:#75DBE8;font-size:12px; "; onclick="ilumina(this)"; ondblclick="iluminaDoubleClick(this)"><?php echo $row->HC ?></td>
                                <td style="background-color:#75DBE8;font-size:12px; "><?php echo $row->Nro_Doc ?></td>
                                <td style="background-color:#75DBE8;font-size:12px; "><?php echo $row->Paciente ?>
                                <td style="background-color:#75DBE8;font-size:12px; "><?php echo $row->F_Nacimiento ?></td>
                                <td style="background-color:#75DBE8;font-size:12px; "; onclick="ilumina(this)"; ondblclick="iluminaDoubleClick(this)"><center> <?php echo $row->Edad ?></center></td>
                                <td style="background-color:#75DBE8;font-size:12px; "; onclick="ilumina(this)"; ondblclick="iluminaDoubleClick(this)"><center><?php echo $row->Cie1 ?> </center></td>
                                <td style="background-color:#75DBE8;font-size:12px; "; onclick="ilumina(this)"; ondblclick="iluminaDoubleClick(this)"><center><?php echo $row->Cie2 ?> </center></td>
                                <td style="background-color:#75DBE8;font-size:12px; "; onclick="ilumina(this)"; ondblclick="iluminaDoubleClick(this)"><center><?php echo $row->Cie3 ?> </center></td>
                                <td style="background-color:#75DBE8;font-size:12px; "; onclick="ilumina(this)"; ondblclick="iluminaDoubleClick(this)"><center><?php echo $row->Cie4 ?> </center></td>
                                <td style="background-color:#75DBE8;font-size:12px; "; onclick="ilumina(this)"; ondblclick="iluminaDoubleClick(this)"><center><?php echo $row->Cie5 ?> </center></td>
                                <td style="background-color:#75DBE8;font-size:12px; "; onclick="ilumina(this)"; ondblclick="iluminaDoubleClick(this)"><center><?php echo $row->Cie6 ?></center></td>
                                <td style="background-color:#75DBE8;font-size:12px; "; onclick="ilumina(this)"; ondblclick="iluminaDoubleClick(this)"><?php echo $row->Lote ?></td>
                                <td style="background-color:#75DBE8;font-size:12px; "; onclick="ilumina(this)"; ondblclick="iluminaDoubleClick(this)"><?php echo $row->Profesional ?></td>
                            </tr>
                        <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.span -->