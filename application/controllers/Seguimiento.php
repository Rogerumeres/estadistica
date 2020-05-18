<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Seguimiento extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        $this->load->library('UsuarioLib');
        $this->load->helper(array('url'));       
        $this->layout->setLayout('template4');
        $this->load->model("Seguimiento_model");
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
        $this->layout->setMensaje("Buscar Atenciones HIS-MINSA");
        $datos=$this->Seguimiento_model->listar_establec();
        $this->layout->view('buscar_atenciones_inicio',compact('datos'));
    }
    public function buscar_atenciones() 
    {
        $this->layout->setMenu_activo("9");
        if($this->input->post()) 
        {
            // $this->listar_establec();
            $documento= $this->input->post('documento');
            $establec= $this->input->post('establec');   
            $dato= $this->input->post('dato');
        if($establec==1)
        {
            $micro_red_esta=1;
            $establec=0;
        }else
        {
            $micro_red_esta=2;
        }
            $result1=$this->Seguimiento_model->listar_establec();
            $establecimiento=$this->Seguimiento_model->Buscar_establec($establec);
            $FechaActualizacion=$this->Seguimiento_model->Buscar_FechaActualizacion();
            $this->layout->setMensaje("Listado de Atenciones");
            $result2=$this->Seguimiento_model->buscar_atenciones($micro_red_esta,$documento,$dato,$establec);
            $this->layout->view('buscar_atenciones',compact('result1','result2','establecimiento','FechaActualizacion'));
        }else
        {
            $this->layout->setMensaje("Buscar Atenciones HIS-MINSA");
            $datos=$this->Seguimiento_model->listar_establec();
            $this->layout->view('buscar_atenciones_inicio',compact('datos'));
        }
    }
    public function listar_establec_()
    {
        $this->layout->setMensaje("Buscar Atenciones HIS-MINSA x CIE");
        $datos=$this->Seguimiento_model->listar_establec();
        $this->layout->view('buscar_atenciones_cie_inicio',compact('datos'));
    }
    public function buscar_atenciones_cie() 
    {
        $this->layout->setMenu_activo("9");
        if($this->input->post()) 
        {
            // $this->listar_establec();
            $mes= $this->input->post('mes');
            $establec= $this->input->post('establec');   
            $dx= $this->input->post('dx');
            $lab= $this->input->post('lab');
            $cie= $this->input->post('cie');
        if($establec==1)
        {
            $micro_red_esta=1;
            $establec=0;
        }else
        {
            $micro_red_esta=2;
        }
            $result1=$this->Seguimiento_model->listar_establec();
            $establecimiento=$this->Seguimiento_model->Buscar_establec($establec);
            $FechaActualizacion=$this->Seguimiento_model->Buscar_FechaActualizacion();
            $this->layout->setMensaje("Listado de Atenciones x CIE");
            $result2=$this->Seguimiento_model->buscar_atenciones_cie($micro_red_esta,$establec,$mes,$dx,$lab,$cie);
            $this->layout->view('buscar_atenciones_cie',compact('result1','result2','establecimiento','FechaActualizacion'));
        }
        else
        {
            $this->layout->setMensaje("Buscar Atenciones HIS-MINSA x CIE");
            $datos=$this->Seguimiento_model->listar_establec();
            $this->layout->view('buscar_atenciones_cie_inicio',compact('datos'));
        }
    }
    /*------------mental--------*/
    public function Seguimiento_mental_vif() 
    {
        $this->layout->setMenu_activo("6");
        if($this->input->post()) 
        {
            $result1=$this->Seguimiento_model->listar_establec();
            $año= $this->input->post('año');
            $establec= $this->input->post('establec');
            $this->layout->setMensaje("Seguimiento Positivos Violencia familiar");
            $FechaActualizacion=$this->Seguimiento_model->Buscar_FechaActualizacion();
            $result2=$this->Seguimiento_model->Seguimiento_mental_vif($año,$establec);
            $this->layout->view('Mental_VIF',compact('result1','result2','establec','FechaActualizacion'));
        }else
        {
            $this->layout->setMensaje("Buscar Atenciones violencia");
            $datos=$this->Seguimiento_model->listar_establec();
            $this->layout->view('Inicio_Mental_VIF',compact('datos'));
        }
    } 
    public function Seguimiento_mental_tdepres() 
    {
        $this->layout->setMenu_activo("6");
        if($this->input->post()) 
        {
            $result1=$this->Seguimiento_model->listar_establec();
            $año= $this->input->post('año');
            $establecimiento= $this->input->post('establec');
            $establec=$this->Seguimiento_model->Buscar_establec($establecimiento);
            $this->layout->setMensaje("Seguimiento Positivos Trastornos Depresivos");
            $FechaActualizacion=$this->Seguimiento_model->Buscar_FechaActualizacion();
            $result2=$this->Seguimiento_model->Seguimiento_mental_td($año,$establecimiento);
            $this->layout->view('Mental_TD',compact('result1','result2','establec','FechaActualizacion'));
        }else
        {
            $this->layout->setMensaje("Buscar Atenciones Trastornos Depresivos");
            $datos=$this->Seguimiento_model->listar_establec();
            $this->layout->view('Inicio_Mental_TD',compact('datos'));
        }
    }  
    public function Seguimiento_mental_adrogas() 
    {
        $this->layout->setMenu_activo("6");
        if($this->input->post()) 
        {
            $result1=$this->Seguimiento_model->listar_establec();
            $año= $this->input->post('año');
            $establec= $this->input->post('establec');
            $this->layout->setMensaje("Seguimiento Positivos Alcohol y Drogas");
            $FechaActualizacion=$this->Seguimiento_model->Buscar_FechaActualizacion();
            $result2=$this->Seguimiento_model->Seguimiento_mental_ad($año,$establec);
            $this->layout->view('Mental_AD',compact('result1','result2','establec','FechaActualizacion'));
        }else
        {
            $this->layout->setMensaje("Buscar Atenciones Alcohol y Drogas");
            $datos=$this->Seguimiento_model->listar_establec();
            $this->layout->view('Inicio_Mental_AD',compact('datos'));
        }
    }     
    public function Seguimiento_mental_psicosis() 
    {
        $this->layout->setMenu_activo("6");
        if($this->input->post()) 
        {
            $result1=$this->Seguimiento_model->listar_establec();
            $año= $this->input->post('año');
            $establec= $this->input->post('establec');
            $this->layout->setMensaje("Seguimiento Positivos Psicosis");
            $FechaActualizacion=$this->Seguimiento_model->Buscar_FechaActualizacion();
            $result2=$this->Seguimiento_model->Seguimiento_mental_ep($año,$establec);
            $this->layout->view('Mental_EP',compact('result1','result2','establec','FechaActualizacion'));
        }else
        {
            $this->layout->setMensaje("Buscar Atenciones Psicosis");
            $datos=$this->Seguimiento_model->listar_establec();
            $this->layout->view('Inicio_Mental_EP',compact('datos'));
        }
    }
    public function Seguimiento_mental_encuesta() 
    {
        $this->layout->setMenu_activo("6");
        if($this->input->post()) 
        {
            $result1=$this->Seguimiento_model->listar_establec();
            $año= $this->input->post('año');
            $establec= $this->input->post('establec');
            $this->layout->setMensaje("Seguimiento Habilidades sociales <12");
            $FechaActualizacion=$this->Seguimiento_model->Buscar_FechaActualizacion();
            $result2=$this->Seguimiento_model->Seguimiento_mental_encuesta($año,$establec);
            $this->layout->view('Mental_HHSS_Menor',compact('result1','result2','establec','FechaActualizacion'));
        }else
        {
            $this->layout->setMensaje("Buscar Habilidades sociales <12");
            $datos=$this->Seguimiento_model->listar_establec();
            $this->layout->view('Inicio_Mental_HHSS_Menor',compact('datos'));
        }
    }   
    public function Seguimiento_mental_encuesta_() 
    {
        $this->layout->setMenu_activo("6");
        if($this->input->post()) 
        {
            $result1=$this->Seguimiento_model->listar_establec();
            $año= $this->input->post('año');
            $establec= $this->input->post('establec');
            $this->layout->setMensaje("Seguimiento Habilidades sociales >12");
            $FechaActualizacion=$this->Seguimiento_model->Buscar_FechaActualizacion();
            $result2=$this->Seguimiento_model->Seguimiento_mental_encuesta_($año,$establec);
            $this->layout->view('Mental_HHSS_Mayor',compact('result1','result2','establec','FechaActualizacion'));
        }else
        {
            $this->layout->setMensaje("Buscar Habilidades sociales >12");
            $datos=$this->Seguimiento_model->listar_establec();
            $this->layout->view('Inicio_Mental_HHSS_Mayor',compact('datos'));
        }
    } 
    public function Seguimiento_mental_ffuertes() 
    {
        $this->layout->setMenu_activo("6");
        if($this->input->post()) 
        {
            $result1=$this->Seguimiento_model->listar_establec();
            $año= $this->input->post('año');
            $establec= $this->input->post('establec');
            $this->layout->setMensaje("Seguimiento Familias fuertes");
            $FechaActualizacion=$this->Seguimiento_model->Buscar_FechaActualizacion();
            $result2=$this->Seguimiento_model->Seguimiento_mental_ffuertes($año,$establec);
            $this->layout->view('Mental_FF',compact('result1','result2','establec','FechaActualizacion'));
        }else
        {
            $this->layout->setMensaje("Buscar Familias fuertes");
            $datos=$this->Seguimiento_model->listar_establec();
            $this->layout->view('Inicio_Mental_FF',compact('datos'));
        }
    }  
    public function Errores_mental() 
    {
        $this->layout->setMenu_activo("6");
        if($this->input->post()) 
        {
            //$result1=$this->Seguimiento_model->listar_establec();
            $año= $this->input->post('año');
            $mes= $this->input->post('mes');
            $this->layout->setMensaje("Listar errores Mental");
            $FechaActualizacion=$this->Seguimiento_model->Buscar_FechaActualizacion();
            $result1=$this->Seguimiento_model->Errores_mental($año,$mes);
            $this->layout->view('errores_mental',compact('result1','FechaActualizacion'));
        }else
        {
            $this->layout->setMensaje("Buscar errores Salud mental");
            //$datos=$this->Seguimiento_model->listar_establec();
            $this->layout->view('inicio_errores_mental');
        }
    }   
}