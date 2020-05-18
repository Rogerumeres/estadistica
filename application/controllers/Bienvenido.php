<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bienvenido extends CI_Controller
{
    	public function __construct()
        {
            parent::__construct();
            $this->layout->setLayout('new_template');
           
        }

		public function index() {
        
    	$this->layout->setMenu_activo("Bienvenido");
        $this->layout->view('bienvenido');
        
        
    }
     public function vision_mision()
     {
     	$this->layout->setMenu_activo("Misión-Visión");
     	$this->layout->view('vision_mision');
     }

      public function recursos_humanos()
     {
        $this->layout->setMenu_activo("Recursos Humanos");
        $this->layout->view('recursos_h');
     }



}