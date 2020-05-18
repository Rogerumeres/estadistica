<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Estrategia extends CI_Controller
{
    	public function __construct()
        {
            parent::__construct();
            $this->layout->setLayout('template1');
           $this->load->model("Estrategia_model");
           $this->load->helper("file");
        }

public function listar_archivos() {
        
         $this->layout->setMensaje("Listado de Reportes");
        $datos=$this->Estrategia_model->listar_estrategias();
        $this->layout->view('listar_archivos',compact('datos'));
        
      
    }
    
public function registro()
{
$this->layout->setMensaje("Subir Reportes");
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
        $estrategia=$this->input->post('estrategia');
        $fecha=$this->input->post('fecha');
        $nom_archivo = $respuesta;
        
                                                
        $insert = $this->Estrategia_model->Insertar_estrategia($descripcion, $estrategia, $nom_archivo,$fecha);
        $mensaje="El registro se guardo exitosamente";
        }
        else
        {
        $mensaje = $respuesta;
        }
    }
    else
    {
        $mensaje='Seleccione un Archivo...';
    }
    $data = array('mensaje' => $mensaje);
    $this->layout->view('registro',$data);
}
else
{
    $this->layout->view('registro');
}
}

function upload_image($image)
{
    $config['upload_path'] = './uploads/reporte_2019/';
    $config['allowed_types'] = 'xlsx|xls|xlsm|pdf|docx|doc|rar|zip|jpeg|jpg|png';
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
        
        $archivo=$this->Estrategia_model->listar($id);
        $url=base_url();
             $dir = './uploads/reporte_2019/';
         $nombre_archivo = $dir.$archivo->nom_archivo;
         if (file_exists($nombre_archivo)) {


             unlink("uploads/reporte_2019/".$archivo->nom_archivo);
        $guardar=$this->Estrategia_model->eliminar($id);
        if($guardar)
        {   
            
            
            $this->session->set_flashdata("ControllerMessage","Se ha eliminado el registro exitosamente");
            redirect(base_url()."Estrategia/listar_archivos",310);
        }else
        {
            $this->session->set_flashdata("ControllerMessage","Se ha producido un error. Inténtelo nuevamente por favor.");
            redirect(base_url()."Estrategia/listar_archivos",310);
        }


        } else
             {
                 $guardar=$this->Estrategia_model->eliminar($id);

               $this->session->set_flashdata("ControllerMessage","No existe Archivo...");
            redirect(base_url()."Estrategia/listar_archivos",310);
            }

    }

 public function registro_comprimido()
 {
    $this->layout->setMensaje("Subir Archivo Comprimido");

            $respuesta=$this->upload_comprimido('archivo');

            if(!is_array($respuesta))
            {
                $mensaje="El registro se guardo exitosamente";
                }
                else
                {
                $mensaje = $respuesta;
             } 
    
                        
     $data = array('mensaje' => $mensaje);
    $this->layout->view('registro_comprimido',$data);

   
}

function upload_comprimido($comprimido)
{
    $config['upload_path'] = './uploads/reporte_2019/';
    $config['allowed_types'] = 'zip|xlsx|xls';
    $config['max_size']    = '';
    $config['remove_spaces'] = TRUE;
    $config["overwrite"]=TRUE;
    $config['encrypt_name'] = false; 

    $this->load->library('upload');
    $this->upload->initialize($config);
    if (!$this->upload->do_upload($comprimido))
    {
        $error = array('error' => $this->upload->display_errors());
        return $error;
    }
    else
    {
        $data = array('upload_data' => $this->upload->data());
        $zip = new ZipArchive;
        $file = $data['upload_data']['full_path'];
        chmod($file,0777);
        if ($zip->open($file) === TRUE)
         {
            $zip->extractTo('./uploads/reporte_2019/');
            $zip->close();
             $data = $this->upload->data();
             unlink("uploads/reporte_2019/".$data['file_name']);
                                  
         }else{
             $error = array('error' => 'error al descomprimir el archivo');
           return $error;
        }
           
    }
}
 /***********************************/
 // editar las fechas de los archivos/
 /***********************************/

 public function edit($id=null)
    {
        $this->layout->setMensaje("Actualizar fecha de Reporte");
        if(!$id)
        {
            show_404();            
        }
            if($this->input->post()) 
            {
                
                    $data=array
                   (
                        'fecha_subida'=>$this->input->post("fecha",true),
                        
                   );
                   $guardar=$this->Estrategia_model->modificar_estrategia($data,$id);
                    if($guardar)
                    {
                         $this->session->set_flashdata('ControllerMessage', 'Se ha Actualizado el registro exitosamente.');
                            redirect(base_url().'Estrategia/edit/'.$id,  301);
                    }else
                    {
                        $this->session->set_flashdata('ControllerMessage', 'Se ha producido un error. Inténtelo nuevamente por favor.');
                            redirect(base_url().'Estrategia/edit/'.$id,  301);
                    }
                
            }
        $datos=$this->Estrategia_model->mostrar_estrategia_id($id);
        if(sizeof($datos)==0)
        {
            show_404();
        }
        $this->layout->view("edit",compact("id","datos"));
    }

/***************************************/
 // modelo para subir archivos en bloque
/**************************************
 function file_upload()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'zip';
        $config['max_size']    = '';
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload())
        {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('upload_form_view', $error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            $zip = new ZipArchive;
            $file = $data['upload_data']['full_path'];
            chmod($file,0777);
            if ($zip->open($file) === TRUE) {
                    $zip->extractTo('./uploads/');
                    $zip->close();
                    echo 'ok';
            } else {
                    echo 'failed';
            }
            $this->load->view('upload_success_view', $data);
        }
    }
*/
   
   public function modificar_fecha() {
        
        $this->layout->setMensaje("Actualizar fecha Reportes");
        
              
            if($this->input->post()) 
            {
                
                    $data=array
                   (
                        'fecha_subida'=>$this->input->post("fecha",true),
                        
                   );
                   $datos=$this->Estrategia_model->modificar_fecha($data);
                    if($datos)
                    {
                         $this->session->set_flashdata('ControllerMessage', 'Se ha Actualizado correctamente.');
                redirect(base_url().'Estrategia/modificar_fecha',  301);
                    }else
                    {
                        $this->session->set_flashdata('ControllerMessage', 'Se ha producido un error. Inténtelo nuevamente por favor.');
                                               redirect(base_url().'Estrategia/modificar_fecha',  301);
                    }
                
            }
        
       $this->layout->view('modificar_fecha',compact('datos'));
      
    }
   
}