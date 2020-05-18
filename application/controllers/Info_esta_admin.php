<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Info_esta_admin extends CI_Controller
{
    	public function __construct()
        {
            parent::__construct();
            $this->layout->setLayout('template1');
           $this->load->model("Informacion_esta_model");
           $this->load->helper("file");
         
        }
public function listar_informacion_estadistica() {
        
        
        $this->layout->setMensaje("Listado de Informacion estadistica");
        $datos=$this->Informacion_esta_model->listar_informacion_estadistica();
        $this->layout->view('lista_info_esta',compact('datos'));
        
      
    }

    public function registro_info()
    {
        $this->layout->setMensaje("Insertar Información Estadistica");
        $mensaje=NULL;
        //form validations
        if($this->form_validation->run() != FALSE)
         {
        if (!empty($_FILES['archivo']['name']))
        {
        $respuesta=$this->upload_image('archivo');

    if(!is_array($respuesta))
    {
        $descripcion = $this->input->post('descripcion');
        $unidad_informativa=$this->input->post('unidad_info');
        $anio=$this->input->post('anio');
        $archivo = $respuesta;
        $fecha=null;
                                                        
        $insert = $this->Informacion_esta_model->insertar_info_esta($descripcion, $unidad_informativa, $anio, $archivo, $fecha);
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
    $data = array('mensaje' => $mensaje,'anio'=>$this->Informacion_esta_model->listar_anio(),
        'unidad_info'=>$this->Informacion_esta_model->listar_unidad_informativa());
   
    $this->layout->view('info_insert',$data);
    }
    else
    {
     $anio=$this->Informacion_esta_model->listar_anio();
    $unidad_info=$this->Informacion_esta_model->listar_unidad_informativa();
    $this->layout->view('info_insert',compact('anio','unidad_info'));
    }
    }

    function upload_image($image)
    {
    
    $config['upload_path'] = './uploads/info_esta/';
    $config['allowed_types'] = 'xlsx|xls|pdf|docx|doc|rar|zip|jpeg|jpg|png';
    $config['max_size'] = '51200';
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
        return $data['file_name'];
    }
}

 public function delete($id=null)
    {
        if(!$id)
        {
            show_404();
        }
        
        $archivo=$this->Informacion_esta_model->listar($id);
        $url=base_url();
             unlink("uploads/info_esta/".$archivo->archivo);
        $guardar=$this->Informacion_esta_model->eliminar($id);
        if($guardar)
        {   
            
            
            $this->session->set_flashdata("ControllerMessage","Se ha eliminado el registro exitosamente");
            redirect(base_url()."Info_esta_admin/listar_informacion_estadistica",310);
        }else
        {
            $this->session->set_flashdata("ControllerMessage","Se ha producido un error. Inténtelo nuevamente por favor.");
            redirect(base_url()."Info_esta_admin/listar_informacion_estadistica",310);
        }
    }
   
}