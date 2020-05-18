<div class="col-sm-10 widget-container-col" id="widget-container-col-2">
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
                <?php foreach ($datos as $row) 
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
</div><!-- /.span -->