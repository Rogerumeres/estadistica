<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Info extends CI_Controller
{
    	public function __construct()
        {
            
            parent::__construct();
            $this->load->library(array('session'));
            $this->load->library('UsuarioLib');
           $this->load->helper(array('url'));       
            $this->layout->setLayout('template_anemia');
           $this->load->model("info_model");
           $this->load->helper("file");
          
        }


public function errores_his() {
      //$this->access_library->check_logged_in(); 
         
           $this->layout->setMensaje(" ");
          $this->layout->view('menu_errores');
       
           
    }

//********************     Cancer           *******************//


public function mostrar_ninos_6meses() {
        
          $this->layout->setMensaje("Niñas y niños de 8 meses de edad que iniciaron tratamiento con hierro o suplementacion preventiva");
        $datos=$this->info_model->mostrar_ninos_6meses();
        $this->layout->view('mostrar_ninos',compact('datos'));
              
    }


    public function mostrar_ninos_4meses() {
        
          $this->layout->setMensaje("Niños y niños de  4-5 meses Suplementados con gotas de Hierro");
        $datos=$this->info_model->mostrar_ninos_4meses();
        $this->layout->view('mostrar_ninos_4_meses',compact('datos'));
              
    }



    public function mostrar_ninos_anemia() {
        
          $this->layout->setMensaje("Niños con anemia");
        $datos=$this->info_model->mostrar_ninos_anemia();
        $this->layout->view('mostrar_ninos_anemia',compact('datos'));
              
    }

    public function mostrar_visita_anemia() {
        
          $this->layout->setMensaje("Visita Niños con Anemia");
        $datos=$this->info_model->mostrar_visita_anemia();
        $this->layout->view('mostrar_visita_anemia',compact('datos'));
              
    }


public function mostrar_indicador_anemia() {
        if($this->input->post()) 
            {
         $año= $this->input->post('año');    
        $mes= $this->input->post('mes');
        $this->layout->setMensaje("SII-13.2: Niñas y niños de 8 meses de edad que reciben 02 visitas domiciliarias por personal de salud");
        $datos=$this->info_model->mostrar_indicador_visita_anemia($año,$mes);
        $this->layout->view('mostrar_indicador_anemia',compact('datos'));
              }
              else{
                 $this->layout->setMensaje("Seleccione mes de Evaluación-I-13.2: Niñas y niños de 8 meses de edad que reciben 02 visitas domiciliarias por personal de salud");
                 $this->layout->view('inicio_indicador_anemia');
              }
    }

     public function mostrar_indicador_4_5meses() {
         if($this->input->post()) 
            {
         $año= $this->input->post('año');    
        $mes= $this->input->post('mes');
        $this->layout->setMensaje("SII-13.1: Niñas y niños de 5 meses de edad que reciben 02 visitas domiciliarias por personal de salud");
        $datos=$this->info_model->mostrar_indicador_visita_45($año,$mes);
        $this->layout->view('mostrar_indicador_4_5meses',compact('datos'));
              }
              else{
                 $this->layout->setMensaje("Seleccione mes de Evaluación-SII-13.1: Niñas y niños de 5 meses de edad que reciben 02 visitas domiciliarias por personal de salud");
                 $this->layout->view('inicio_indicador_4_5_meses');
              }  
    }

public function mostrar_indicador_suple_45() {
        if($this->input->post()) 
            {
         $año= $this->input->post('año');    
        $mes= $this->input->post('mes');
        $this->layout->setMensaje("SII-03: Niñas y niños entre 110 y 130 días de las IPRESS del departamento que reciben hierro en gotas");
        $datos=$this->info_model->mostrar_indicador_suple_45($año,$mes);
        $this->layout->view('mostrar_indicador_suple_45',compact('datos'));
              }
              else{
                 $this->layout->setMensaje("Seleccione mes de Evaluación-SII-03: Niñas y niños entre 110 y 130 días de las IPRESS del departamento que reciben hierro en gotas");
                 $this->layout->view('inicio_indicador_suple_45');
              }
    }

     public function mostrar_indicador_8meses() {
         if($this->input->post()) 
            {
         $año= $this->input->post('año');    
        $mes= $this->input->post('mes');
        $this->layout->setMensaje("SII-11: Niñas y niños de 8 meses de edad que iniciaron tratamiento con hierro o suplementacion preventiva");
        $datos=$this->info_model->mostrar_indicador_8_meses($año,$mes);
        $this->layout->view('mostrar_indicador_8meses',compact('datos'));
              }
              else{
                 $this->layout->setMensaje("Seleccione mes de Evaluación-SII-11: Niñas y niños de 8 meses de edad que iniciaron tratamiento con hierro o suplementacion preventiva");
                 $this->layout->view('inicio_indicador_8meses');
              }  
    }

     public function mostrar_indicador_12meses() {
         if($this->input->post()) 
            {
         $año= $this->input->post('año');    
        $mes= $this->input->post('mes');
        $this->layout->setMensaje("SII-12: Niñas y niños de 12 meses que recibieron tratamiento con hierro o suplementación preventiva");
        $datos=$this->info_model->mostrar_indicador_12_meses($año,$mes);
        $this->layout->view('mostrar_indicador_12meses',compact('datos'));
              }
              else{
                 $this->layout->setMensaje("Seleccione mes de Evaluación-SII-12: Niñas y niños de 12 meses que recibieron tratamiento con hierro o suplementación preventiva");
                 $this->layout->view('inicio_indicador_12meses');
              }  
    }



    public function buscar() {
        
        if($this->input->post()) 
            {
             
         $buscar= $this->input->post('buscar');
          $this->layout->setMensaje("Atenciones de cred");
          $datos=$this->info_model->buscar_anemia($buscar);
          $this->layout->view('buscar',compact('datos'));
            }
          else{
              
               $this->layout->setMensaje("Buscar Atenciones");
              $this->layout->view('buscar_inicio');
              
              }
        
      
    }


    public function buscarn($dni=null) {
        
          
          $this->layout->setMensaje("Atenciones de cred");
          $datos=$this->info_model->buscar_anemia($dni);
          $this->layout->view('buscar',compact('datos'));
                      
      
    }

public function mostrar_pai() {
         if($this->input->post()) 
            {
               $mes= $this->input->post('mes');
        $this->layout->setMensaje("");
        $datos=$this->info_model->mostrar_vacunas($mes);
        $this->layout->view('pai',compact('datos'));
              }
              else{
                 $this->layout->setMensaje("Mostrar vacunas");
                 $this->layout->view('inicio_pai');
              }  
    }


  }