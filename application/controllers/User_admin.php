<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User class.
 * 
 * @extends CI_Controller
 */

class User_admin extends CI_Controller {

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
		$this->load->model('User_model_admin');
		$this->layout->setLayout("template1");

		$this->form_validation->set_message('matches',' * %s no coincide con %s');
		$this->form_validation->set_message('cambiook',' * no se puede cambiar Contraseña');
		
		
		
	}
	
	
	public function index() {
		

		
	}
	
	/**
	 * register function.
	 * 
	 * @access public
	 * @return void
	 */
	public function register() {
		$this->layout->setMensaje("Registro de Usuarios");
		
		// create the data object
		$data = new stdClass();
		
		// load form helper and validation library
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		// set validation rules
		$this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_numeric|min_length[4]|is_unique[users.username]', array('is_unique' => 'El Usuario ya Existe. Por favor intente con Otro.'));
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('password_confirm', 'Confirm Password', 'trim|required|min_length[6]|matches[password]');
		
		if ($this->form_validation->run() === false) {
			
			// validation not ok, send validation errors to the view
			
			$this->layout->view('register/register', $data);
			
			
		} else {
			
			// set variables from the form
			$username = $this->input->post('username');
			$email    = $this->input->post('email');
			$password = $this->input->post('password');
			
			if ($this->User_model_admin->create_user($username, $email, $password)) {
				
				// user creation ok
				
				$this->layout->view('register/register_success', $data);
				
			} else {
				
				// user creation failed, this should never happen
				$data->error = 'Tenemos problemas al crear el Usuario. Por favor intentelo otro vez.';
				
				// send error to the view
				
				$this->layout->view('register/register', $data);
				
				
			}
			
		}
		
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
		
		$datos=$this->User_model_admin->listar_usuario();
        $this->layout->view("listar",compact("datos"));
		
	}
	
	public function edit($id=null)
    {
    	$this->layout->setMensaje("Cambio de Clave");
        if(!$id)
        {
            show_404();            
        }
            if($this->input->post()) 
            {
                if ($this->form_validation->run())
                {
                    $data=array
                   (
                        'marca'=>$this->input->post("marca",true),
                        'pantalla'=>$this->input->post("pantalla",true),
                        'ram'=>$this->input->post("ram",true),
                        'procesador'=>$this->input->post("procesador",true),
                        'disco_duro'=>$this->input->post("disco",true),
                        'precio'=>$this->input->post("precio",true)
                   );
                   $guardar=$this->User_model_admin->modificar_producto($data,$id);
                    if($guardar)
                    {
                         $this->session->set_flashdata('ControllerMessage', 'Se ha editado el registro exitosamente.');
                redirect(base_url().'User_admin/edit/'.$id,  301);
                    }else
                    {
                        $this->session->set_flashdata('ControllerMessage', 'Se ha producido un error. Inténtelo nuevamente por favor.');
                                               redirect(base_url().'User_admin/edit/'.$id,  301);
                    }
                }
            }
        $datos=$this->User_model_admin->get_user_id($id);
        if(sizeof($datos)==0)
        {
            show_404();
        }
        $this->layout->view("edit",compact("id","datos"));
    }

        


     public function delete($id=null)
    {
        if(!$id)
        {
            show_404();
        }
        $guardar=$this->User_model_admin->eliminar_usuario($id);
        if($guardar)
        {
            $this->session->set_flashdata("ControllerMessage","El registro se ha eliminado exitosamente");
            redirect(base_url()."User_admin/listar",310);
        }else
        {
            $this->session->set_flashdata("ControllerMessage","Se ha producido un error. Inténtelo nuevamente por favor.");
            redirect(base_url()."User_admin/listar",310);
        }
    }



    public function mostrar_user_activo() {


           $userid=$this->session->userdata('id');
         // redirigimos a la función login
         $this->layout->view('user_activo', $userid);
     }



     public function cambiar_clave()
	{
		
		if (!$this->session->userdata('usuario')){
         // redirigimos a la función login
         redirect('User/ingresar');
             } else {
		$this->layout->setMensaje('Cambiar Clave de '.$this->session->userdata('usuario'));

		$this->form_validation->set_rules('pass','Contra','callback_cambiook');
		$this->form_validation->set_rules('new_pass','Nueva Contraseña','required|matches[new_pass_2]');
		$this->form_validation->set_rules('new_pass_2','Repita Contraseña','required');
		if($this->form_validation->run()==false)
		{
			$this->layout->view('cambiar_clave');
		}else
		{
			$this->layout->view('exito');
		}
	}
	
	}



	public function cambiook()
	{
		$pass=$this->input->post('pass');
		$new_pass=$this->input->post('new_pass');
		return $this->usuariolib->cambiarPWD(sha1($pass),sha1($new_pass));
	}

	public function salir()
	{
		$this->session->sess_destroy();
		  redirect('User/ingresar');
	}

	public function retornar_reportes()
	{
		$this->session->sess_destroy();
		  redirect('/');
	}
}
