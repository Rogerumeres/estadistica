<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User class.
 * 
 * @extends CI_Controller
 */
class User extends CI_Controller {

	/**
	 * __construct function.
	 * 
	 * @access public
	 * @return void
	 */
	public function __construct() {
		
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->library('UsuarioLib');
		$this->load->helper(array('url'));
		$this->load->model('User_model');
		$this->layout->setLayout("template3");

		$this->form_validation->set_message('loginok','Usuario/Contraseña Incorrrectos');
		
	}
	
	public function index() {
		
	}
	
	
	/**
	 * logout function.
	 * 
	 * @access public
	 * @return void
	 */
	public function logout() {
		
		// create the data object
		$data = new stdClass();
		
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
			
			// remove session datas
			foreach ($_SESSION as $key => $value) {
				unset($_SESSION[$key]);
			}
			
			// user logout ok
			
			$this->layout->view('logout/logout_success', $data);
			
		} else {
			
			// there user was not logged in, we cannot logged him out,
			// redirect him to site root
			redirect('/');
			
		}
		
	}

	public function listar() {
		$this->layout->setMensaje("Usuarios");
		
		$datos=$this->user_model->listar_usuario();
        $this->layout->view("listar",compact("datos"));
		
	}

	public function ingresar()
	{
		$this->form_validation->set_rules('username','Usuario','required|callback_loginok');
		$this->form_validation->set_rules('password','Contraseña','required');
		if($this->form_validation->run()==false)
		{
			$this->layout->view('login/login');
		}else
		{
			redirect(base_url().'Errores/errores_his',  301);
		}
	}

	public function loginok()
	{
		$login=$this->input->post('username');
		$password=$this->input->post('password');
		return $this->usuariolib->login($login,sha1($password));
	}
}
