<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SeguimientoCRED extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        $this->load->library('UsuarioLib');
        $this->load->helper(array('url'));       
        $this->layout->setLayout('template4');
        $this->load->model("IndicadorFed_model");
        $this->load->helper("file");
        if (!$this->session->userdata('id'))
        {
            redirect('User/ingresar');
        }
    }
    public function errores_his() 
    {
        //$this->access_library->check_logged_in(); 
        $this->layout->setMensaje(" ");
        $this->layout->view('menu_errores');
    }
    /*------------ITS--------*/
    
    public function Mostrar_Seguimiento_CRED_Errores() 
    {
        $this->layout->setMensaje("Indicador Fed");
        $this->layout->setMenu_activo("0");            
        if($this->input->post()) 
        {
            //$mes= $this->input->post('mes');
            //$establec= $this->input->post('establec');
            //$result1=$this->IndicadorFed_model->listar_establec(); 
            //$establecimiento=$this->IndicadorFed_model->Buscar_establec($establec);        
            //$result2=$this->IndicadorFed_model->indicador_fed_materno($mes,$establec);
            //$this->layout->view('indicador_fed_materno',compact('result1','result2','establecimiento','establec'));
            $mes= $this->input->post('mes');
            $establec= $this->input->post('establec');
            $result1=$this->SeguimientoCRED_Model->listar_establec(); 
            $establecimiento=$this->SeguimientoCRED_Model->Buscar_establec($establec);        
            $result2=$this->SeguimientoCRED_Model->Seguimiento_CRED_Errores($mes,$establec);
            $this->layout->view('SeguimientoCRED_Errores',compact('result1','result2','establecimiento','establec'));
        }
        else
        {
            //$this->layout->setMensaje("Mostrar Indicador Fed");
            //$datos=$this->IndicadorFed_model->listar_establec();
            //$this->layout->view('inicio_indicador_fed_materno',compact('datos'));
            $this->layout->setMensaje("Mostrar Indicador Fed");
            $datos=$this->SeguimientoCRED_Model->listar_establec();
            $this->layout->view('Inicio_SeguimientoCRED_Errores',compact('datos'));
        }
    }
    public function Mostrar_Seguimiento_CRED_MenorMes() 
    {
        $this->layout->setMensaje("Indicador Fed");
        $this->layout->setMenu_activo("0");            
        if($this->input->post()) 
        {   
            $mes= $this->input->post('mes');
            $establec= $this->input->post('establec');
            $result1=$this->SeguimientoCRED_Model->listar_establec(); 
            $establecimiento=$this->SeguimientoCRED_Model->Buscar_establec($establec);        
            $result2=$this->SeguimientoCRED_Model->Seguimiento_CRED_MenorMes($mes,$establec);
            $this->layout->view('Seguimiento_CRED_MenorMes',compact('result1','result2','establecimiento','establec'));
        }
        else
        {
            $this->layout->setMensaje("Mostrar Indicador Fed");
            $datos=$this->SeguimientoCRED_Model->listar_establec();
            $this->layout->view('Inicio_Seguimiento_CRED_MenorMes',compact('datos'));
        }
    }
    public function Mostrar_Seguimiento_CRED_MenorAnio() 
    {
        $this->layout->setMensaje("Indicador Fed");
        $this->layout->setMenu_activo("0");            
        if($this->input->post()) 
        {   
            $mes= $this->input->post('mes');
            $establec= $this->input->post('establec');
            $result1=$this->SeguimientoCRED_Model->listar_establec(); 
            $establecimiento=$this->SeguimientoCRED_Model->Buscar_establec($establec);        
            $result2=$this->SeguimientoCRED_Model->Seguimiento_CRED_MenorAnio($mes,$establec);
            $this->layout->view('Seguimiento_CRED_MenorAnio',compact('result1','result2','establecimiento','establec'));
        }
        else
        {
            $this->layout->setMensaje("Mostrar Indicador Fed");
            $datos=$this->SeguimientoCRED_Model->listar_establec();
            $this->layout->view('Inicio_Seguimiento_CRED_MenorAnio',compact('datos'));
        }
    }
    public function Mostrar_Seguimiento_CRED_PoliSeisMeses() 
    {
        $this->layout->setMensaje("Indicador Fed");
        $this->layout->setMenu_activo("0");            
        if($this->input->post()) 
        {   
            $mes= $this->input->post('mes');
            $establec= $this->input->post('establec');
            $result1=$this->SeguimientoCRED_Model->listar_establec(); 
            $establecimiento=$this->SeguimientoCRED_Model->Buscar_establec($establec);        
            $result2=$this->SeguimientoCRED_Model->Seguimiento_CRED_PoliSeisMeses($mes,$establec);
            $this->layout->view('Seguimiento_CRED_PoliSeisMeses',compact('result1','result2','establecimiento','establec'));
        }
        else
        {
            $this->layout->setMensaje("Mostrar Indicador Fed");
            $datos=$this->SeguimientoCRED_Model->listar_establec();
            $this->layout->view('Inicio_Seguimiento_CRED_PoliSeisMeses',compact('datos'));
        }
    }
    public function Mostrar_Seguimiento_CRED_SuplePrev() 
    {
        $this->layout->setMensaje("Indicador Fed");
        $this->layout->setMenu_activo("0");            
        if($this->input->post()) 
        {   
            $mes= $this->input->post('mes');
            $establec= $this->input->post('establec');
            $result1=$this->SeguimientoCRED_Model->listar_establec(); 
            $establecimiento=$this->SeguimientoCRED_Model->Buscar_establec($establec);        
            $result2=$this->SeguimientoCRED_Model->Seguimiento_CRED_SuplePrev($mes,$establec);
            $this->layout->view('Seguimiento_CRED_SuplePrev',compact('result1','result2','establecimiento','establec'));
        }
        else
        {
            $this->layout->setMensaje("Mostrar Indicador Fed");
            $datos=$this->SeguimientoCRED_Model->listar_establec();
            $this->layout->view('Inicio_Seguimiento_CRED_SuplePrev',compact('datos'));
        }
    }
    public function Mostrar_Seguimiento_CRED_SupleTera() 
    {
        $this->layout->setMensaje("Indicador Fed");
        $this->layout->setMenu_activo("0");            
        if($this->input->post()) 
        {   
            $mes= $this->input->post('mes');
            $establec= $this->input->post('establec');
            $result1=$this->SeguimientoCRED_Model->listar_establec(); 
            $establecimiento=$this->SeguimientoCRED_Model->Buscar_establec($establec);        
            $result2=$this->SeguimientoCRED_Model->Seguimiento_CRED_SupleTera($mes,$establec);
            $this->layout->view('Seguimiento_CRED_SupleTera',compact('result1','result2','establecimiento','establec'));
        }
        else
        {
            $this->layout->setMensaje("Mostrar Indicador Fed");
            $datos=$this->SeguimientoCRED_Model->listar_establec();
            $this->layout->view('Inicio_Seguimiento_CRED_SupleTera',compact('datos'));
        }
    }
    public function Mostrar_Seguimiento_CRED_Vacunas() 
    {
        $this->layout->setMensaje("Indicador Fed");
        $this->layout->setMenu_activo("0");            
        if($this->input->post()) 
        {   
            $mes= $this->input->post('mes');
            $establec= $this->input->post('establec');
            $result1=$this->SeguimientoCRED_Model->listar_establec(); 
            $establecimiento=$this->SeguimientoCRED_Model->Buscar_establec($establec);        
            $result2=$this->SeguimientoCRED_Model->Seguimiento_CRED_Vacunas($mes,$establec);
            $this->layout->view('Seguimiento_CRED_Vacunas',compact('result1','result2','establecimiento','establec'));
        }
        else
        {
            $this->layout->setMensaje("Mostrar Indicador Fed");
            $datos=$this->SeguimientoCRED_Model->listar_establec();
            $this->layout->view('Inicio_Seguimiento_CRED_Vacunas',compact('datos'));
        }
    }
}