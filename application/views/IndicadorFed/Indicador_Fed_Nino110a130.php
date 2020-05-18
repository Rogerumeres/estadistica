
    <?php
$atributos = array( 'id' => 'miformulario','name'=>'form','class'=>'form-horizontal');
//echo form_open(null, $atributos);
echo form_open_multipart('IndicadorFed/Mostrar_indicador_fed_nino110a130',$atributos);
?>
     <div class="col-md-4">

      <div class="form-group">
 
    <select class="form-control select2" name="establec" id="establec">
        <option value="00">Todos los Establecimientos</option>                    
                        

                  <?php
foreach ($result1 as $row) {
  ?>
      <option value="<?php echo $row->Codigo_Unico ?>"><?php echo $row->Nombre_Establecimiento ?></option>

      <?php
  }
?>
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
                  <option value="9">Setiembre</option>
                  <option value="10">Octubre</option>
                  <option value="11">Noviembre</option>
                  <option value="12">Diciembre</option>
                </select>
                 </div>
                 <input type="submit" value="Mostrar" title="Mostrar" class="btn btn-primary" id="mostrar"/>
 
 
</div>

<?php
foreach ($result2 as $row) 
{
    if ($row->MicroRed=='Totales') 
    {
        $meta=$row->Cumple_Edad;
        $avance=$row->CompromisosSIII03FED;
        $porcentaje=$row->Avance_Porcentual;
    }else
    {
        $meta=0;
    }
}
?>

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




<div class="col-md-3">
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
        <th style="background-color:#045FB4;font-size:16px;color:#FFFFFF "><center><b>Meta</b></center></th>
        <th style="background-color:#045FB4;font-size:16px;color:#FFFFFF "><center><b>Avance</b></center></th>
        <th style="background-color:#045FB4;font-size:16px;color:#FFFFFF "><center><b>%</b></center></th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td style="background-color:#afc9f6;font-size:16px; ">
        <center><b><?php echo $meta ?></b></center></td>
        <td style="background-color:#afc9f6;font-size:16px; ">
        <center><b><?php echo $avance ?></b></center></td>
        <?php if (substr($porcentaje, 0, 4)<'50') { ?> 
        <td style="background-color:#FF0000;font-size:16px;">
        <center><b><?php echo $porcentaje ?></b></center>
        </td>
        <?php } elseif (substr($porcentaje, 0, 4)>'49' and substr($porcentaje, 0, 4)<'80') { ?> 
        <td style="background-color:#FF8000;font-size:16px;">
        <center><b><?php echo $porcentaje ?></b></center>
        </td>
        <?php }  elseif (substr($porcentaje, 0, 4)>'79') { ?>
        <td style="background-color:#04B431;font-size:16px;">
        <center><b><?php echo $porcentaje ?></b></center>
        </td>
        <?php }  ?>
        </tr>
    </tbody>
</table>
</div>



<div class="col-sm-12 widget-container-col" id="widget-container-col-2">
<div class="widget-box widget-color-blue" id="widget-box-2">
<div class="widget-header">
<center>  <h3>  Establecimiento:  <?php echo $establecimiento->Nombre_Establecimiento?></h3></center>
</div>
<div class="widget-body">
<div class="widget-main no-padding">
<table class="table table-striped table-bordered table-hover">
<thead>
    <tr>
    <th style="background-color:#045FB4;font-size:16px;color:#FFFFFF "><center><b>MicroRed</b></center></th>
    <th style="background-color:#045FB4;font-size:16px;color:#FFFFFF "><center><b>Establecimiento</b></center></th>
    <th style="background-color:#045FB4;font-size:16px;color:#FFFFFF "><center><b>DNI</b></center></th>
    <th style="background-color:#045FB4;font-size:16px;color:#FFFFFF "><center><b>Nombre Paciente</b></center></th>
    <th style="background-color:#045FB4;font-size:16px;color:#FFFFFF "><center><b>Niño 110 a 130 dias)</b></center></th>
    <th style="background-color:#045FB4;font-size:16px;color:#FFFFFF "><center><b>Supl. Hierro</b></center></th>
    <th style="background-color:#045FB4;font-size:16px;color:#FFFFFF "><center><b>Observación</b></center></th>    
    </tr>
</thead>

<tbody>
<?php
foreach ($result2 as $row) {
?>
<tr>
    <td>
    <center> <?php echo $row->MicroRed ?></center>
    </td>
    <td>
    <?php echo $row->Establecimiento  ?>
    </td>
    <td>
    <center> <?php echo $row->Nro_Doc ?></center>
    </td>
    <td>
    <?php echo $row->Paciente  ?>
    </td>
    <?php if ($row->Cumple_Edad==0) { ?> 
    <td style="background-color:#ffa6ac;font-size:16px; ">
    <center> <b><?php echo $row->Cumple_Edad ?></b></center>
    </td>
    <?php } elseif($row->Cumple_Edad==1) { ?>
    <td style="background-color:#92ebdf;font-size:16px; ">
    <center> <b><?php echo $row->Cumple_Edad ?></b></center>
    </td>
    <?php }  elseif($row->Cumple_Edad>1){ ?>
    <td style="background-color:#afc9f6;font-size:16px; ">
    <center> <b><?php echo $row->Cumple_Edad ?></b></center>
    </td>
    
    <?php }  ?>
    <?php if ($row->Polimaltosado1==0) { ?> 
    <td style="background-color:#ffa6ac;font-size:16px; ">
    <center> <b><?php echo $row->Polimaltosado1 ?></b></center>
    </td>
    <?php } elseif($row->Polimaltosado1==1) { ?>
    <td style="background-color:#92ebdf;font-size:16px; ">
    <center> <b><?php echo $row->Polimaltosado1 ?></b></center>
    </td>
    <?php } elseif($row->Polimaltosado1>1) { ?>
    <td style="background-color:#afc9f6;font-size:16px; ">
    <center><b> <?php echo $row->Polimaltosado1 ?></b></center>
    </td>
    <?php }  ?>

    <?php if ($row->CompromisosSIII03FED=='No Cumple') { ?> 
    <td style="background-color:#ffa6ac;font-size:14px; ">
    <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/mostrar_detalle_indicador_fed/11/CompromisosSIII03FED/<?php echo $establec?>/<?php echo $row->Nro_Doc?>"><?php echo $row->CompromisosSIII03FED ?><i class="fa fa-times bigger-200"></i></a></b></center>
    </td>
    <?php } elseif($row->CompromisosSIII03FED=='Cumple') { ?>
    <td style="background-color:#92ebdf;font-size:14px;">
    <center><b><a class='iframe'  href="<?php echo base_url()?>Detalle_error/mostrar_detalle_indicador_fed/11/CompromisosSIII03FED/<?php echo $establec?>/<?php echo $row->Nro_Doc?>"><?php echo $row->CompromisosSIII03FED ?><i class="fa fa-check bigger-200"></i></a></b></center>
    </center>
    </td>
    <?php } elseif($row->CompromisosSIII03FED>0){ ?> 
    <td style="background-color:#afc9f6;font-size:14px; ">
    <center><b> <?php echo $row->CompromisosSIII03FED ?></b></center>
    </td>
    <?php }  ?> 

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