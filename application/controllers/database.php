<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Database extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout("template1");
        $this->load->model("Productos_Model");
    }
    public function index()
    
    {
        //$this->load->view('index');
        $datos=$this->Productos_Model->Mostrar_Producto();
        $this->layout->view("index",compact("datos"));
    }


     public function add(){ // Agregar usuarios
    
                $data["titulo"]="";
    
                $this->form_validation->set_rules('nom', 'Nombre', 'required|is_string|trim|xss_clean');
                   $this->form_validation->set_rules('email', 'Email', 'required|valid_email|xss_clean');
                   $this->form_validation->set_rules('pass', 'Contraseña', 'required|trim|xss_clean');
                   $this->form_validation->set_rules('descripcion', 'Descripcion', 'required|max_length[200]|xss_clean');

                if ($this->form_validation->run()===FALSE)
                {
                           
                    $this->layout->view('login',$data);  

                     }else{
                        $nom = $this->input->post('nom');
                    $email = $this->input->post('email');
                    $pass = $this->input->post('pass');
                    $descripcion = $this->input->post('descripcion');
                    $paises = $this->input->post('paises');
                            
                    $insert = $this->Productos_Model->Insertar_usuario($nom, $email, $pass, $descripcion,$paises);
                    $data['titulo'] = 'El usuario se agregó correctamente'; 
                    $this->layout->view('login',$data);
   
                    
                }
            }
            
    public function edit($id=null)
    {
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
                   $guardar=$this->Productos_Model->modificar_producto($data,$id);
                    if($guardar)
                    {
                         $this->session->set_flashdata('ControllerMessage', 'Se ha editado el registro exitosamente.');
                redirect(base_url().'database/edit/'.$id,  301);
                    }else
                    {
                        $this->session->set_flashdata('ControllerMessage', 'Se ha producido un error. Inténtelo nuevamente por favor.');
                                               redirect(base_url().'database/edit/'.$id,  301);
                    }
                }
            }
        $datos=$this->Productos_Model->getProductoId($id);
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
        $guardar=$this->Productos_Model->eliminar($id);
        if($guardar)
        {
            $this->session->set_flashdata("ControllerMessage","Se ha eliminado el registro exitosamente");
            redirect(base_url()."database",310);
        }else
        {
            $this->session->set_flashdata("ControllerMessage","Se ha producido un error. Inténtelo nuevamente por favor.");
            redirect(base_url()."database",310);
        }
    }
       
          
        
    

}
