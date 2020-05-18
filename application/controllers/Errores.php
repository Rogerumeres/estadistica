<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Errores extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        $this->load->library('UsuarioLib');
        $this->load->helper(array('url'));       
        $this->layout->setLayout('template4');
        $this->load->model("errores_model");
        $this->load->model("seguimiento_model_nt");
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
    //********************     Planificacion      *******************//
    public function listar_errores_plani_sismed_Controlador() 
    {
        $this->layout->setMenu_activo("2");
        if($this->input->post()) 
        {
            $mes= $this->input->post('mes');
            $this->layout->setMensaje("Listar errores plani sismed");
            $FechaActualizacion=$this->errores_model->Buscar_FechaActualizacion();
            $datos=$this->errores_model->listar_errores_plani_sismed_Modelo($mes);
            $this->layout->view('listar_errores_plani_sismed_Vista',compact('datos','FechaActualizacion'));
        }
        else
        {
            $this->layout->setMensaje("Seleccione mes");
            $this->layout->view('listar_errores_plani_sismed_inicial_Vista');
        }
    }
    
    //********************     Materno      *******************//
    
    
    public function listar_errores_Materno_Controlador() 
    {
        $this->layout->setMenu_activo("2");
        if($this->input->post()) 
        {
            $mes= $this->input->post('mes');
            $this->layout->setMensaje("Listar errores Materno");
            $FechaActualizacion=$this->errores_model->Buscar_FechaActualizacion();
            $datos=$this->errores_model->listar_errores_Materno_Modelo($mes);
            $this->layout->view('listar_errores_Materno_Vista',compact('datos','FechaActualizacion'));
        }
        else
        {
        $this->layout->setMensaje("Seleccione mes");
        $this->layout->view('listar_errores_Materno_inicial_Vista');
        }
    }
    
    public function listar_gestantes() 
    {
        $this->layout->setMenu_activo("2");
        if($this->input->post()) 
        {
            $this->layout->setMensaje("Listado de Gestantes");
            $ListadoEstablecimientos=$this->seguimiento_model_nt->listar_establec();
            $establec= $this->input->post('establec');
            $FechaActualizacion=$this->errores_model->Buscar_FechaActualizacion();
            $EstablecimientoSeleccionado=$this->seguimiento_model_nt->Buscar_establec($establec);
            $ListadoGestantes=$this->errores_model->listarGestantes($establec);
            $this->layout->view('vListarGestantes',compact('ListadoEstablecimientos','EstablecimientoSeleccionado','ListadoGestantes','FechaActualizacion'));
        }else
        {
            $this->layout->setMensaje("Listado de Gestantes");
            $ListadoEstablecimientos=$this->seguimiento_model_nt->listar_establec();
            $this->layout->setMensaje("Seleccione mes");
            $this->layout->view('vListarGestantesInicial',compact('ListadoEstablecimientos'));
        }
    
    }
    
    
    
    

}