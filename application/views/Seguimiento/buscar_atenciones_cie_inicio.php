<div class="col-sm-10 widget-container-col" id="widget-container-col-2">
<?php
    $atributos = array( 'id' => 'miformulario','name'=>'form','class'=>'form-horizontal');
    //echo form_open(null, $atributos);
    echo form_open_multipart('Seguimiento/buscar_atenciones_cie',$atributos);
?>
    <div class="col-md-6">
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
        <div class="form-group">
            <select class="form-control select2" name="establec" id="establec">
                <option value="1">Todos los Establecimientos</option> 
                <?php foreach ($datos as $row) 
                {?>
                    <option value="<?php echo $row->Codigo_Unico ?>"><?php echo $row->Nombre_Establecimiento ?></option>
                <?php
                }?>
            </select>
        </div>
        <div class="form-group">
            <input type="search"  title="dx"  name="dx" id="dx" placeholder="Dx" required size="1" maxlength="1">
            <input type="search"  title="lab"  name="lab" id="lab" placeholder="LAB" size="3" maxlength="3"/>
            <input type="search"  title="cie"  name="cie" id="cie" placeholder="CIE" required size="6" maxlength="8" />
        </div>
            <input type="submit" value="Buscar" title="Buscar" class="btn btn-primary" id="Buscar"/>
    </div>
</div><!-- /.span -->