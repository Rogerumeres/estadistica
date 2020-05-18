<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class TbcMetaxenicas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        $this->load->library('UsuarioLib');
        $this->load->helper(array('url'));       
        $this->layout->setLayout('template4');
        $this->load->model("TbcMetaxenicas_model");
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
        $datos=$this->TbcMetaxenicas_model->listar_establec();
        //$this->layout->view('buscar_atenciones_inicio',compact('datos'));
    }
    /*------------tbc--------*/
    public function Tbc_toma_muestra() 
    {
        $this->layout->setMensaje("Sintomatico Respiratorio");
        $this->layout->setMenu_activo("7");
        if($this->input->post()) 
        {
            $año= $this->input->post('año');
            $result1=$this->TbcMetaxenicas_model->listar_establec();
            $this->layout->setMensaje("Seguimiento Sintomatico Respiratorio");
            $RENAES= $this->input->post('establec');
            $Establecimiento=$this->TbcMetaxenicas_model->Buscar_establec($RENAES);
            $FechaActualizacion=$this->TbcMetaxenicas_model->Buscar_FechaActualizacion();
            $result2=$this->TbcMetaxenicas_model->Tbc_toma($año,"$RENAES");
            $this->layout->view('toma_muestra_tbc',compact('result1','result2','Establecimiento','RENAES','FechaActualizacion'));
        }else
        {
            $this->layout->setMensaje("Mostrar Sintomatico Respiratorio");
            $datos=$this->TbcMetaxenicas_model->listar_establec();
            $this->layout->view('inicio_toma_muestra_tbc',compact('datos'));
        }
    } 
    public function Tbc_contacto() 
    {
        $this->layout->setMensaje("Contacto Censado y Examinado");
        $this->layout->setMenu_activo("7");
        if($this->input->post()) 
        {
            $año= $this->input->post('año');
            $result1=$this->TbcMetaxenicas_model->listar_establec();
            $this->layout->setMensaje("Seguimiento Contacto Censado y Examinado");
            $RENAES= $this->input->post('establec');
            $Establecimiento=$this->TbcMetaxenicas_model->Buscar_establec($RENAES);
            $FechaActualizacion=$this->TbcMetaxenicas_model->Buscar_FechaActualizacion();
            $result2=$this->TbcMetaxenicas_model->Tbc_contacto($año,"$RENAES");
            $this->layout->view('contacto_censado_examinado',compact('result1','result2','Establecimiento','RENAES','FechaActualizacion'));
        }else
        {
            $this->layout->setMensaje("Mostrar Contacto Censado y Examinado");
            $datos=$this->TbcMetaxenicas_model->listar_establec();
            $this->layout->view('inicio_contacto_censado_examinado',compact('datos'));
        }
    } 
    public function Tbc_errores() 
    {
        $this->layout->setMenu_activo("7");
        $this->layout->setMensaje("Errores TBC");
        if($this->input->post()) 
        {
            $año= $this->input->post('año');
            $mes= $this->input->post('mes');
            $result1=$this->TbcMetaxenicas_model->listar_establec();
            $this->layout->setMensaje("Seguimiento Errores TBC");
            $RENAES= $this->input->post('establec');
            $Establecimiento=$this->TbcMetaxenicas_model->Buscar_establec($RENAES);
            $FechaActualizacion=$this->TbcMetaxenicas_model->Buscar_FechaActualizacion();
            $result2=$this->TbcMetaxenicas_model->Errores_tbc($año,$mes);
            $this->layout->view('errores_tbc',compact('result1','result2','Establecimiento','RENAES','FechaActualizacion'));
        }else
        {
            $this->layout->setMensaje("Mostrar Errores TBC");
            $datos=$this->TbcMetaxenicas_model->listar_establec();
            $this->layout->view('inicio_errores_tbc',compact('datos'));
        }
    } 
    /*------------metaxenicas--------*/
    public function errores_malaria() 
    {
        $this->layout->setMenu_activo("8");
        if($this->input->post()) 
        {
            //$result1=$this->seguimiento_model->listar_establec();
            $año= $this->input->post('año');
            $mes= $this->input->post('mes');
            $this->layout->setMensaje("Listar errores Malaria");
            $FechaActualizacion=$this->TbcMetaxenicas_model->Buscar_FechaActualizacion();
            $result1=$this->TbcMetaxenicas_model->Errores_malaria($año,$mes);
            $this->layout->view('errores_malaria',compact('result1','FechaActualizacion'));
        }else
        {
            $this->layout->setMensaje("Buscar errores malaria");
            //$datos=$this->seguimiento_model->listar_establec();
            $this->layout->view('inicio_errores_malaria');
        }
    }   
    public function errores_bartonela() 
    {
        $this->layout->setMenu_activo("8");
        if($this->input->post()) 
        {
            //$result1=$this->seguimiento_model->listar_establec();
            $año= $this->input->post('año');
            $mes= $this->input->post('mes');
            $this->layout->setMensaje("Listar errores Bartonela");
            $FechaActualizacion=$this->TbcMetaxenicas_model->Buscar_FechaActualizacion();
            $result1=$this->TbcMetaxenicas_model->Errores_bartonela($año,$mes);
            $this->layout->view('errores_bartonela',compact('result1','FechaActualizacion'));
        }else
        {
            $this->layout->setMensaje("Buscar errores Bartonela");
            //$datos=$this->seguimiento_model->listar_establec();
            $this->layout->view('inicio_errores_bartonela');
        }
    }  
    public function errores_rbartonela() 
    {
        $this->layout->setMenu_activo("8");
        if($this->input->post()) 
        {
            //$result1=$this->seguimiento_model->listar_establec();
            $año= $this->input->post('año');
            $mes= $this->input->post('mes');
            $this->layout->setMensaje("Listar errores Bartonela");
            $FechaActualizacion=$this->TbcMetaxenicas_model->Buscar_FechaActualizacion();
            $result1=$this->TbcMetaxenicas_model->Errores_rbartonela($año,$mes);
            $this->layout->view('errores_rbartonela',compact('result1','FechaActualizacion'));
        }else
        {
            $this->layout->setMensaje("Buscar errores Bartonela");
            //$datos=$this->seguimiento_model->listar_establec();
            $this->layout->view('inicio_errores_rbartonela');
        }
    } 
    public function errores_leishmania() 
    {
        $this->layout->setMenu_activo("8");
        if($this->input->post()) 
        {
            //$result1=$this->seguimiento_model->listar_establec();
            $año= $this->input->post('año');
            $mes= $this->input->post('mes');
            $this->layout->setMensaje("Listar errores Bartonela");
            $FechaActualizacion=$this->TbcMetaxenicas_model->Buscar_FechaActualizacion();
            $result1=$this->TbcMetaxenicas_model->Errores_leishmania($año,$mes);
            $this->layout->view('errores_leishmania',compact('result1','FechaActualizacion'));
        }else
        {
            $this->layout->setMensaje("Buscar errores Bartonela");
            //$datos=$this->seguimiento_model->listar_establec();
            $this->layout->view('inicio_errores_leishmania');
        }
    } 
}