<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Info_detais extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout('template5');
        $this->load->model("Info_model");
    }
    public function mostrar_pai_detalle($dni=null)
    {
        $datos=$this->Info_model->mostrar_vacunas_detalle($dni);
        $this->layout->view("detalle_pai",compact("datos"));
    }
   
}

