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
        $this->load->model("SeguimientoCRED_Model");
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
        $datos=$this->SeguimientoCRED_Model->Listar_establec();
        //$this->layout->view('Inicio_Seguimiento_CRED_Errores',compact('datos'));
    }
    /*------------CRED--------*/
    public function Mostrar_Seguimiento_CRED_Errores() 
    {
        $this->layout->setMensaje("Errores CRED");
        $this->layout->setMenu_activo("1");
        if($this->input->post()) 
        {
            $año= $this->input->post('anio');
            $result1=$this->SeguimientoCRED_Model->listar_establec(); 
            $this->layout->setMensaje("Errores Varios CRED");
            $RENAES= $this->input->post('establec');
            $Establecimiento=$this->SeguimientoCRED_Model->Buscar_establec($RENAES);
            $FechaActualizacion=$this->SeguimientoCRED_Model->Buscar_FechaActualizacion();
            $result2=$this->SeguimientoCRED_Model->Seguimiento_CRED_Errores($año,$RENAES);
            $this->layout->view('Seguimiento_CRED_Errores',compact('result1','result2','Establecimiento','RENAES','FechaActualizacion'));
        }
        else
        {
            $this->layout->setMensaje("Mostrar Errores Varios CRED");
            $datos=$this->SeguimientoCRED_Model->Listar_establec();
            $this->layout->view('Inicio_Seguimiento_CRED_Errores',compact('datos'));
        }
    }
    public function Mostrar_Seguimiento_CRED_MenorMes() 
    {
        $this->layout->setMensaje("CRED Menor 1 Mes");
        $this->layout->setMenu_activo("1");
        if($this->input->post()) 
        {
            $año= $this->input->post('anio');
            $result1=$this->SeguimientoCRED_Model->listar_establec(); 
            $this->layout->setMensaje("Seguimiento CRED Menor 1 Mes");
            $RENAES= $this->input->post('establec');
            $Establecimiento=$this->SeguimientoCRED_Model->Buscar_establec($RENAES);
            $FechaActualizacion=$this->SeguimientoCRED_Model->Buscar_FechaActualizacion();
            $result2=$this->SeguimientoCRED_Model->Seguimiento_CRED_MenorMes($año,$RENAES);
            $this->layout->view('Seguimiento_CRED_MenorMes',compact('result1','result2','Establecimiento','RENAES','FechaActualizacion'));
        }
        else
        {
            $this->layout->setMensaje("Mostrar CRED Menor 1 Mes");
            $datos=$this->SeguimientoCRED_Model->Listar_establec();
            $this->layout->view('Inicio_Seguimiento_CRED_MenorMes',compact('datos'));
        }
    }
    public function Mostrar_Seguimiento_CRED_MenorAnio() 
    {
        $this->layout->setMensaje("CRED Menor 1 Anio");
        $this->layout->setMenu_activo("1");
        if($this->input->post()) 
        {
            $año= $this->input->post('anio');
            $result1=$this->SeguimientoCRED_Model->listar_establec(); 
            $this->layout->setMensaje("Seguimiento CRED Menor 1 Anio");
            $RENAES= $this->input->post('establec');
            $Establecimiento=$this->SeguimientoCRED_Model->Buscar_establec($RENAES);
            $FechaActualizacion=$this->SeguimientoCRED_Model->Buscar_FechaActualizacion();
            $result2=$this->SeguimientoCRED_Model->Seguimiento_CRED_MenorAnio($año,$RENAES);
            $this->layout->view('Seguimiento_CRED_MenorAnio',compact('result1','result2','Establecimiento','RENAES','FechaActualizacion'));
        }
        else
        {
            $this->layout->setMensaje("Mostrar CRED Menor 1 Anio");
            $datos=$this->SeguimientoCRED_Model->Listar_establec();
            $this->layout->view('Inicio_Seguimiento_CRED_MenorAnio',compact('datos'));
        }
    }
    public function Mostrar_Seguimiento_CRED_PoliSeisMeses() 
    {
        $this->layout->setMensaje("Polimaltosado 4,5,6 Meses");
        $this->layout->setMenu_activo("1");
        if($this->input->post()) 
        {
            $año= $this->input->post('anio');
            $result1=$this->SeguimientoCRED_Model->listar_establec(); 
            $this->layout->setMensaje("Seguimiento Polimaltosado 4,5,6 Meses");
            $RENAES= $this->input->post('establec');
            $Establecimiento=$this->SeguimientoCRED_Model->Buscar_establec($RENAES);
            $FechaActualizacion=$this->SeguimientoCRED_Model->Buscar_FechaActualizacion();
            $result2=$this->SeguimientoCRED_Model->Seguimiento_CRED_PoliSeisMeses($año,$RENAES);
            $this->layout->view('Seguimiento_CRED_PoliSeisMeses',compact('result1','result2','Establecimiento','RENAES','FechaActualizacion'));
        }
        else
        {
            $this->layout->setMensaje("Mostrar Polimaltosado 4,5,6 Meses");
            $datos=$this->SeguimientoCRED_Model->Listar_establec();
            $this->layout->view('Inicio_Seguimiento_CRED_PoliSeisMeses',compact('datos'));
        }
    }
    public function Mostrar_Seguimiento_CRED_SuplePrev() 
    {
        $this->layout->setMensaje("Polimaltosado Preventivo");
        $this->layout->setMenu_activo("1");
        if($this->input->post()) 
        {
            $año= $this->input->post('anio');
            $result1=$this->SeguimientoCRED_Model->listar_establec(); 
            $this->layout->setMensaje("Seguimiento Polimaltosado Preventivo");
            $RENAES= $this->input->post('establec');
            $Establecimiento=$this->SeguimientoCRED_Model->Buscar_establec($RENAES);
            $FechaActualizacion=$this->SeguimientoCRED_Model->Buscar_FechaActualizacion();
            $result2=$this->SeguimientoCRED_Model->Seguimiento_CRED_SuplePrev($año,$RENAES);
            $this->layout->view('Seguimiento_CRED_SuplePrev',compact('result1','result2','Establecimiento','RENAES','FechaActualizacion'));
        }
        else
        {
            $this->layout->setMensaje("Mostrar Polimaltosado Preventivo");
            $datos=$this->SeguimientoCRED_Model->Listar_establec();
            $this->layout->view('Inicio_Seguimiento_CRED_SuplePrev',compact('datos'));
        }
    }
    public function Mostrar_Seguimiento_CRED_SupleTera() 
    {
        $this->layout->setMensaje("Polimaltosado Terapeutico");
        $this->layout->setMenu_activo("1");
        if($this->input->post()) 
        {
            $año= $this->input->post('anio');
            $result1=$this->SeguimientoCRED_Model->listar_establec(); 
            $this->layout->setMensaje("Seguimiento Polimaltosado Terapeutico");
            $RENAES= $this->input->post('establec');
            $Establecimiento=$this->SeguimientoCRED_Model->Buscar_establec($RENAES);
            $FechaActualizacion=$this->SeguimientoCRED_Model->Buscar_FechaActualizacion();
            $result2=$this->SeguimientoCRED_Model->Seguimiento_CRED_SupleTera($año,$RENAES);
            $this->layout->view('Seguimiento_CRED_SupleTera',compact('result1','result2','Establecimiento','RENAES','FechaActualizacion'));
        }
        else
        {
            $this->layout->setMensaje("Mostrar Polimaltosado Terapeutico");
            $datos=$this->SeguimientoCRED_Model->Listar_establec();
            $this->layout->view('Inicio_Seguimiento_CRED_SupleTera',compact('datos'));
        }
    }
    public function Mostrar_Seguimiento_CRED_Vacunas() 
    {
        $this->layout->setMensaje("Vacunas por Grupo de Edad");
        $this->layout->setMenu_activo("1");
        if($this->input->post()) 
        {
            $año= $this->input->post('anio');
            $result1=$this->SeguimientoCRED_Model->listar_establec(); 
            $this->layout->setMensaje("Seguimiento Vacunas por Grupo de Edad");
            $RENAES= $this->input->post('establec');
            $Establecimiento=$this->SeguimientoCRED_Model->Buscar_establec($RENAES);
            $FechaActualizacion=$this->SeguimientoCRED_Model->Buscar_FechaActualizacion();
            $result2=$this->SeguimientoCRED_Model->Seguimiento_CRED_Vacunas($año,$RENAES);
            $this->layout->view('Seguimiento_CRED_Vacunas',compact('result1','result2','Establecimiento','RENAES','FechaActualizacion'));
        }
        else
        {
            $this->layout->setMensaje("Mostrar Vacunas por Grupo de Edad");
            $datos=$this->SeguimientoCRED_Model->Listar_establec();
            $this->layout->view('Inicio_Seguimiento_CRED_Vacunas',compact('datos'));
        }
    }
}