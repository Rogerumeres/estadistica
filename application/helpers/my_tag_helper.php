<?php
if(!function_exists('my_validation_errors')){
	
	function my_validation_errors($errors){
			$salida='';
			if($errors)
			{
				$salida ='<div class"alert alert-alert">';
				$salida = $salida.'<button type="button" class="close" data-dismiss="alert"> <i class="ace-icon fa fa-times"></i></button>';
				$salida = $salida.'<h4>Mensajes Validacion </h4>';
				$salida = $salida.'<small>'.$errors.'</small>';
				$salida = $salida.'</div>';
			}
			return $salida;
	}
}

