<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Informacion_estadistica extends CI_Controller
{
    	public function __construct()
        {
            parent::__construct();
            $this->layout->setLayout('template2');
           $this->load->model("Informacion_esta_model");
            $this->layout->setMenu_activo("Información Estadistica");
         
        }

    public function morbilidad() {
       
       $datos=$this->Informacion_esta_model->listar_info_morbi();
        $this->layout->view('ver_morbilidad',compact('datos'));
       
     
              
    }

    public function mortalidad() {
       
     $data = array('morta_17' => $this->Informacion_esta_model->listar_info_morta_17(),'morta_16' => $this->Informacion_esta_model->listar_info_morta_16(),'morta_15' => $this->Informacion_esta_model->listar_info_morta_15(),'morta_14' => $this->Informacion_esta_model->listar_info_morta_14(),'morta_13' => $this->Informacion_esta_model->listar_info_morta_13());

        $this->layout->view('ver_mortalidad',$data);
        
      
    }
    
    public function atendidos_atenciones() {
       
            $data = array('atcatn_18' => $this->Informacion_esta_model->listar_info_atcatn_18(),'atcatn_17' => $this->Informacion_esta_model->listar_info_atcatn_17(),'atcatn_16' => $this->Informacion_esta_model->listar_info_atcatn_16(),'atcatn_15' => $this->Informacion_esta_model->listar_info_atcatn_15(),'atcatn_14' => $this->Informacion_esta_model->listar_info_atcatn_14(),'atcatn_13' => $this->Informacion_esta_model->listar_info_atcatn_13());
        $this->layout->view('ver_atc_atn',$data);
        
      
    }

    public function poblacion() {
       
    $data = array('pobla_17' => $this->Informacion_esta_model->listar_info_pobla_17(),'pobla_16' => $this->Informacion_esta_model->listar_info_pobla_16(),'pobla_15' => $this->Informacion_esta_model->listar_info_pobla_15(),'pobla_14' => $this->Informacion_esta_model->listar_info_pobla_14(),'pobla_13' => $this->Informacion_esta_model->listar_info_pobla_13());
        $this->layout->view('ver_poblacion',$data);
        
      
    }


}