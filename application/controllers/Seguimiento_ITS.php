<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Seguimiento_ITS extends CI_Controller
{
    	public function __construct()
        {
            
            parent::__construct();
            $this->load->library(array('session'));
            $this->load->library('UsuarioLib');
           $this->load->helper(array('url'));       
            $this->layout->setLayout('template4');
           $this->load->model("seguimiento_model_ITS");
           $this->load->helper("file");
           if (!$this->session->userdata('id')){
            redirect('User/ingresar');
           }
        }


public function errores_his() {
      //$this->access_library->check_logged_in(); 
         
           $this->layout->setMensaje(" ");
          $this->layout->view('menu_errores');
       
           
    }


  /*------------ITS--------*/

    
public function Listar_errores_its() {
        
             $this->layout->setMenu_activo("10");            
               if($this->input->post()) 
              {   
                  $microred= $this->input->post('establec');
                  $this->layout->setMensaje("Errores ITS");
                  $result1=$this->seguimiento_model_ITS->listar_establec();
                  $result2=$this->seguimiento_model_ITS->Listar_errores_its($microred);
                  $this->layout->view('errores_its',compact('result1','result2'));

              }else{

                  $this->layout->setMensaje("Listar Errores ITS");
                  $datos=$this->seguimiento_model_ITS->listar_establec();
                  $this->layout->view('inicio_errores_its',compact('datos'));
              }
              
    } 


public function Listar_vih_positivo() {
        
             $this->layout->setMenu_activo("10");            
               if($this->input->post()) 
              {   
                  $microred= $this->input->post('establec');
                  $this->layout->setMensaje("Resultado tamisaje VIH Reactivo y Diagnostico de casos");
                  $result1=$this->seguimiento_model_ITS->listar_establec();
                  $result2=$this->seguimiento_model_ITS->Nominal_vih_positivo($microred);
                  $this->layout->view('listar_vih_positivo',compact('result1','result2'));

              }else{

                  $this->layout->setMensaje("Listar Resultado tamisaje VIH Reactivo y Diagnostico de casos");
                  $datos=$this->seguimiento_model_ITS->listar_establec();
                  $this->layout->view('inicio_listar_vih_positivo',compact('datos'));
              }
              
    } 


public function Listar_hepatitis_positivo() {
        
             $this->layout->setMenu_activo("10");            
               if($this->input->post()) 
              {   
                  $microred= $this->input->post('establec');
                  $this->layout->setMensaje("Resultado tamisaje Hepatitis B,C Reactivo y Diagnostico de casos");
                  $result1=$this->seguimiento_model_ITS->listar_establec();
                  $result2=$this->seguimiento_model_ITS->Nominal_hepatitis_positivo($microred);
                  $this->layout->view('listar_hepatitis_positivo',compact('result1','result2'));

              }else{

                  $this->layout->setMensaje("Listar Resultado tamisaje Hepatitis B,C Reactivo y Diagnostico de casos");
                  $datos=$this->seguimiento_model_ITS->listar_establec();
                  $this->layout->view('inicio_listar_hepatitis_positivo',compact('datos'));
              }
              
    } 


    public function Listar_sifilis_positivo() {
        
             $this->layout->setMenu_activo("10");            
               if($this->input->post()) 
              {   
                  $microred= $this->input->post('establec');
                  $this->layout->setMensaje("Resultado tamisaje Sifilis Reactivo");
                  $result1=$this->seguimiento_model_ITS->listar_establec();
                  $result2=$this->seguimiento_model_ITS->Nominal_sifilis_positivo($microred);
                  $this->layout->view('listar_sifilis_positivo',compact('result1','result2'));

              }else{

                  $this->layout->setMensaje("Listar Resultado tamisaje Sifilis Reactivo");
                  $datos=$this->seguimiento_model_ITS->listar_establec();
                  $this->layout->view('inicio_listar_sifilis_positivo',compact('datos'));
              }
              
    } 



}