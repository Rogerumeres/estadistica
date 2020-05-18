<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Subir_archivos extends CI_Controller
{
    	public function __construct()
        {
            parent::__construct();
            $this->layout->setLayout('template2');
           $this->load->model("Subir_model");
        }

/*
public function index() {


           if (!$this->session->userdata('user_id')){
         // redirigimos a la función login
         redirect('/');
             } else {

                
       // en caso contrario cargamos la vista principal
            $data = new stdClass();
            //ambiente con post
            if ( $this->input->post())
 		         {
 		         
                $this->form_validation->set_error_delimiters('<p class="text-danger">','</>');

                if ($this->form_validation->run()===FALSE)
                {
                           
                    $this->layout->view('index',$data);  

                }else{
                    $error=NULL;
   
                        $this->load->library('upload');

                        if (!empty($_FILES['archivo']['name']))
                        {
                            $config['upload_path'] = './uploads/archivos/';
                            $config['allowed_types'] = 'jpg|jpeg';
                            $config['max_size'] = '51200'; 
                            $config["overwrite"]=false;
                            $config['encrypt_name'] = false;    

                            $this->upload->initialize($config);

                            if ($this->upload->do_upload('archivo'))
                            {
                                
                                $ima = $this->upload->data();
                                $file_name = $ima['file_name'];



                                $titulo = $this->input->post('titulo');
                                $descripcion = $this->input->post('descripcion');
                                $nom_archivo = $ima['file_name'];
                                $programa = $this->input->post('programa');
                                                
                                $insert = $this->Subir_model->Insertar_archivo($titulo, $descripcion, $nom_archivo, $programa);
                                $data["titulo"]="El archivo se subio correctamente";
                                $this->layout->view('index',compact('titulo'));   
                                }
                                else
                                {
                                     $error = array('error' => $this->upload->display_errors());
                                     $this->session->set_flashdata('ControllerMessage', $error["error"]);

                                }
                             }
                        }

                    }
        $this->layout->view('index');
    } 
 }

 */


 public function listar() {
        $this->layout->setMensaje("Listar Arhivos");
        
        $datos=$this->Subir_model->listar_archivos();
        $this->layout->view("listar",compact("datos"));
        
    }




public function mostrar(){ // Agregar usuarios
    
                 $this->layout->view('mostrar');
               
    }



public function registro()
{

$mensaje=NULL;
//form validations
if($this->form_validation->run() != FALSE)
{
   if (!empty($_FILES['archivo']['name']))
    {
    $respuesta=$this->upload_image('archivo');

    if(!is_array($respuesta))
    {
        $titulo = $this->input->post('titulo');
        $descripcion = $this->input->post('descripcion');
        $nom_archivo = $respuesta;
        $programa = $this->input->post('programa');
                                                
        $insert = $this->Subir_model->Insertar_archivo($titulo, $descripcion, $nom_archivo, $programa);
        $mensaje="registro correcto";
        }
        else
        {
        $mensaje = $respuesta;
        }
    }
    else
    {
        $mensaje='Seleccione un Archivo';
    }
    $data = array('mensaje' => $mensaje);
    $this->layout->view('index',$data);
}
else
{
    $this->layout->view('index');
}
}

function upload_image($image)
{
    
    $config['upload_path'] = './uploads/archivos/';
    $config['allowed_types'] = 'jpg|jpeg';
    $config['max_size'] = '51200';
    $config['max_width'] = '1024';
    $config['max_height'] = '1024';
    $config['remove_spaces'] = 'TRUE';
    $config["overwrite"]=false;
    $config['encrypt_name'] = false; 

    $this->load->library('upload');
    $this->upload->initialize($config);
    if (!$this->upload->do_upload($image))
    {
        $error = array('error' => $this->upload->display_errors());
        return $error;
    }
    else
    {
        $data = $this->upload->data();
        $this->create_thumb($data['file_name']);

        return $data['file_name'];
    }
}

function create_thumb($imagen)
{
    $config['image_library'] = 'gd2';
    $config['source_image'] = './uploads/archivos/'.$imagen;
    $config['new_image'] = './uploads/archivos/thumbs/';
    $config['thumb_marker'] = '';
    $config['create_thumb'] = TRUE;
    $config['maintain_ratio'] = TRUE;
    $config['width'] = 150;
    $config['height'] = 150;
    
    $this->load->library('image_lib',$config);
    $this->image_lib->resize();
}




}