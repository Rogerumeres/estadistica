<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Seguimiento_PROMSA extends CI_Controller
{
    	public function __construct()
        {
            
            parent::__construct();
            $this->load->library(array('session'));
            $this->load->library('UsuarioLib');
           $this->load->helper(array('url'));       
            $this->layout->setLayout('template4');
           $this->load->model("Seguimiento_model_PROMSA");
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

    
public function Listar_errores_promsa() {
        
             $this->layout->setMenu_activo("-1");            
               if($this->input->post()) 
              {   
                  $microred= $this->input->post('establec');
                  $this->layout->setMensaje("Errores frecuentes Promoción de la salud");
                  $result1=$this->Seguimiento_model_PROMSA->listar_establec();
                  $result2=$this->Seguimiento_model_PROMSA->listar_errores_promsa($microred);
                  $this->layout->view('errores_promsa',compact('result1','result2'));

              }else{

                  $this->layout->setMensaje("Listar Errores Promsa");
                  $datos=$this->Seguimiento_model_PROMSA->listar_establec();
                  $this->layout->view('inicio_errores_promsa',compact('datos'));
              }
              
    } 




}