
			<?php if (validation_errors()) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
				<button class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
					<?= validation_errors() ?>
				</div>
			</div>
		<?php endif; ?>
		<?php if (isset($error)) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= $error ?>
				</div>
			</div>
		<?php endif; ?>

 <div class="row">
  <div class="col-xs-12">

				<?php
$atributos = array( 'id' => 'miformulario','name'=>'form','class'=>'form-horizontal');
//echo form_open(null, $atributos);
echo form_open_multipart('User_admin/register',$atributos);
?>
				<div class="form-group">
					<label for="username" class="col-sm-3 control-label no-padding-right">Nombre de Usuario:</label>
					<div class="col-sm-9">
					<input type="text" class="col-xs-10 col-sm-5" id="username" name="username" placeholder="Ingrese Nombre de Usuario">
					
					</div>
				</div>
				
				<div class="form-group">
					<label for="email" class="col-sm-3 control-label no-padding-right">Email</label>
					<div class="col-sm-9">
					<input type="email" class="col-xs-10 col-sm-5" id="email" name="email" placeholder="Ingrese Email">
					</div>
				</div>
				
				<div class="form-group">
					<label for="password" class="col-sm-3 control-label no-padding-right">Contraseña</label>
					<div class="col-sm-9">
					<input type="password" class="col-xs-10 col-sm-5" id="password" name="password" placeholder="Ingrese Contraseña">
					</div>
				</div>

				<div class="form-group">
					<label for="password_confirm" class="col-sm-3 control-label no-padding-right">Confirma Contraseña</label>
					<div class="col-sm-9">
					<input type="password" class="col-xs-10 col-sm-5" id="password_confirm" name="password_confirm" placeholder="Confirme la Contraseña">
					</div>
				</div>
				<br>
				<div class="clearfix form-actions">
    			<div class="col-md-offset-3 col-md-9">
					<input type="submit" value="Registrar" title="Registrar" class="btn btn-primary"/>
				</div>
				</div>
			</form>
		</div>
	</div>
