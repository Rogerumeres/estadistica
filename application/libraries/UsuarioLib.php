<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsuarioLib{
	/**
	 * @var object Instancia CodeIgniter
	 */
	private $CI;

	function __construct(){
		$this->CI =& get_instance();
		$this->CI->load->model('User_model_admin');
		$this->CI->load->model('User_model');
	}

	public function login($user,$pass)
	{
		$query = $this->CI->User_model->get_login($user, $pass);
		if($query->num_rows() > 0)
		{
			$usuario=$query->row();
			$datosSession = array(	'id' => $usuario->id,
									'usuario' => $usuario->username,
								  'password' => $usuario->password,
								  'email' => $usuario->email);							
			$this->CI->session->set_userdata($datosSession);
			return TRUE;
			}else
			{
				$this->CI->session->sess_destroy();
			return FALSE;
			}
	}

	public function cambiarPWD($act,$new)
	{
		if($this->CI->session->userdata('id')==null)
		{
			return FALSE;
		}
		$id=$this->CI->session->userdata('id');
		$usuario=$this->CI->User_model_admin->find($id);
		if($usuario->password==$act)
		{
			$data=array('id'=>$id,
						'password'=>$new);
			$this->CI->User_model_admin->update($data);
		}else
		{
			return FALSE;
		}
	}
}