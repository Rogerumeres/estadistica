<div class="col-sm-18 widget-container-col" id="widget-container-col-2">
<?php $atributos = array( 'id' => 'miformulario','name'=>'form','class'=>'form-horizontal');
//echo form_open(null, $atributos);
echo form_open_multipart('TbcMetaxenicas/Tbc_errores',$atributos);
?>
    <div class="col-md-6">
        <div class="form-group">
            <select class="form-control" name="año" id="año">
                <option selected="2020">Seleccione Año</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
            </select>
        </div>
        <div class="form-group">
        <select class="form-control" name="mes" id="mes">
            <option value="1">Enero</option>
            <option value="2">Febrero</option>
            <option value="3">Marzo</option>
            <option value="4">Abril</option>
            <option value="5">Mayo</option>
            <option value="6">Junio</option>
            <option value="7">Julio</option>
            <option value="8">Agosto</option>
            <option value="9">Septiembre</option>
            <option value="10">Octubre</option>
            <option value="11">Noviembre</option>
            <option value="12">Diciembre</option>
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
            <div 
                class="widget-header">
            </div>
            <div class="widget-body">
                <div class="widget-main no-padding">
                    <table class="table table-striped table-bordered table-hover">
                        <thead class="thin-border-bottom">
                            <tr>
                                <th>Fecha</th>
                                <th>MicroRed</th>
                                <th>Establecimiento</th>
                                <th>Edad</th>
                                <th>Ficha Familiar</th>
                                <th>DNI</th>
                                <th>Paciente</th>
                                <th>Profesional</th>
                                <th>Lot Pag Reg</th>
                                <th>Detalle Registro</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($result2 as $row) 
                        {?> 
                            <tr>
                                <td><?php echo $row->Fecha ?></td>
                                <td><?php echo $row->MicroRed ?></td>
                                <td><?php echo $row->Establecimiento ?></td>
                                <td><?php echo $row->Edad?></td>
                                <td><?php echo $row->FichaFam?></td>
                                <td><?php echo $row->Nro_Doc?></td>
                                <td><?php echo $row->Paciente?></td>
                                <td><?php echo $row->Profesional?></td>
                                <td><?php echo $row->Lote?></td>
                                <td><?php echo $row->Cie1?> <?php echo $row->Cie2?> <?php echo $row->Cie3?> <?php echo $row->Cie4?> <?php echo $row->Cie5?> <?php echo $row->Cie6?></td>
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