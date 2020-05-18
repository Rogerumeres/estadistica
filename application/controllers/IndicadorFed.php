<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class IndicadorFed extends CI_Controller
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
    public function listar_establec()
    {
        $this->layout->setMensaje("");
        $datos=$this->IndicadorFed_model->listar_establec();
        $this->layout->view('inicio_indicador_fed_materno',compact('datos'));
    }
    /*------------ITS--------*/
    public function Mostrar_indicador_fed_materno() 
    {
        $this->layout->setMensaje("Indicador Fed");
        $this->layout->setMenu_activo("0");            
        if($this->input->post()) 
        {   
            $result1=$this->IndicadorFed_model->listar_establec(); 
            $this->layout->setMensaje("Indicador Materno FED");
            $mes= $this->input->post('mes');
            $establec= $this->input->post('establec');
            $establecimiento=$this->IndicadorFed_model->Buscar_establec($establec);
            $FechaActualizacion=$this->IndicadorFed_model->Buscar_FechaActualizacion();        
            $result2=$this->IndicadorFed_model->indicador_fed_materno($mes,$establec);
            $this->layout->view('indicador_fed_materno',compact('result1','result2','establecimiento','establec','FechaActualizacion'));
        }
        else
        {
            $this->layout->setMensaje("Mostrar Indicador Fed");
            $datos=$this->IndicadorFed_model->listar_establec();
            $this->layout->view('inicio_indicador_fed_materno',compact('datos'));
        }
    }  
    
    public function Mostrar_indicador_fed_nino110a130() 
    {
        $this->layout->setMensaje("Indicador Fed");
        $this->layout->setMenu_activo("0");            
        if($this->input->post()) 
        {   
            $mes= $this->input->post('mes');
            $establec= $this->input->post('establec');
            $result1=$this->IndicadorFed_model->listar_establec(); 
            $establecimiento=$this->IndicadorFed_model->Buscar_establec($establec);
            $FechaActualizacion=$this->IndicadorFed_model->Buscar_FechaActualizacion();        
            $result2=$this->IndicadorFed_model->indicador_fed_nino110a130($mes,$establec);
            $this->layout->view('Indicador_Fed_Nino110a130',compact('result1','result2','establecimiento','establec','FechaActualizacion'));
        }
        else
        {
            $this->layout->setMensaje("Mostrar Indicador Fed");
            $datos=$this->IndicadorFed_model->listar_establec();
            $this->layout->view('Inicio_Indicador_Fed_Nino110a130',compact('datos'));
        }
    }  
}