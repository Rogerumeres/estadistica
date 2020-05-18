<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mostrar_programa extends CI_Controller
{
    	public function __construct()
        {
            parent::__construct();
            $this->layout->setLayout('new_template_detalle');
           $this->load->model("Estrategia_model");
           $this->load->helper("file");
           $this->layout->setMenu_activo("Información Estrategias");
        }


public function ver_art() {

        $datos=$this->Estrategia_model->listar_estrategias1();
        $this->layout->view('ver_articulado',compact('datos'));
        
        
    }
    public function ver_mat() {

        $datos=$this->Estrategia_model->listar_estrategias2();
        $this->layout->view('ver_materno',compact('datos'));
        
        
    }

    public function ver_tras() {

        $datos=$this->Estrategia_model->listar_tras();
        $this->layout->view('ver_trasmisibles',compact('datos'));
        
        
    }

    public function ver_no_tras() {

        $datos=$this->Estrategia_model->listar_no_tras();
        $this->layout->view('ver_ntrasmisibles',compact('datos'));
        
        
    }

    public function ver_pro_saludf() {

        $datos=$this->Estrategia_model->listar_pro_salud();
        $this->layout->view('ver_pro_saluf',compact('datos'));
        
        
    }

    public function ver_sien() {

        $datos=$this->Estrategia_model->listar_sien();
        $this->layout->view('ver_sien',compact('datos'));
                
    }
    public function ver_padron() {

        $datos=$this->Estrategia_model->listar_padron();
        $this->layout->view('ver_padron',compact('datos'));
        
    
    }
    public function ver_campana() {

       // $datos=$this->Estrategia_model->listar_padron();
        $this->layout->view('ver_campana');
       
       
    }
     public function ver_manuales() {

       // $datos=$this->Estrategia_model->listar_padron();
        $this->layout->view('ver_manuales');
       
       
    }

}