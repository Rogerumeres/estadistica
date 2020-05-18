<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Detalle_error extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout('template5');
        $this->load->model("Erroresdetalle_model");
    }
    public function edit($id=null)
    {
        $datos=$this->Erroresdetalle_model->listar_nominalhiscita($id);
        $this->layout->view("mostrardetalle",compact("id","datos"));
    }

    /*-------detalle bucal----------------*/
    public function mostrar_bucal_dni($mes=null,$dni=null)
    {
        $datos=$this->Erroresdetalle_model->Mostrar_detalle_bucal($mes,$dni);
        $this->layout->view("mostrar_errores_its_detalle",compact("datos"));
    }


    /*---------plani-----*/
    public function mostrar_hc($opcion=null,$renaes=null,$mes=null)
    {
        $datos=$this->Erroresdetalle_model->listar_sismed_hc($opcion,$renaes,$mes);
        $this->layout->view("mostrardetallehc",compact("datos"));
    }
    public function mostrar_hc_Materno_Controlador($opcion=null,$renaes=null,$mes=null)
    {
        $datos=$this->Erroresdetalle_model->listar_Materno_hc_Modelo($opcion,$renaes,$mes);
        $this->layout->view("mostrardetallematernohc",compact("datos"));
    }
    public function mostrar_detalle_nino($dni=null)
    {
        $datos=$this->Erroresdetalle_model->listar_detalle_nino($dni);
        $this->layout->view("mostrar_detalle_nino",compact("datos"));
    }
    
    /*---------detalle mental-------------*/
    public function mostrar_detalle_vif_pos($opcion=null,$intervencion=null,$renaes=null,$Nro_Doc=null,$FichaFam=null)
    {
        $establec=$renaes;
        $datos=$this->Erroresdetalle_model->Mostrar_detalle_vif_pos($opcion,$intervencion,$renaes,$Nro_Doc,$FichaFam);
        $this->layout->view("mostrar_detalle_vif_pos",compact('datos','establec'));
    }   
    public function mostrar_detalle_tbc($opcion=null,$intervencion=null,$renaes=null,$Nro_Doc=null,$FichaFam=null)
    {
        $establec=$renaes;
        $datos=$this->Erroresdetalle_model->Mostrar_detalle_tbc($opcion,$intervencion,$renaes,$Nro_Doc,$FichaFam);
        $this->layout->view("mostrar_detalle_vif_pos",compact('datos','establec'));
    }   
   
    public function mostrar_detalle_indicador_fed($opcion=null,$intervencion=null,$renaes=null,$Nro_Doc=null)
    {
        $establec=$renaes;
        $datos=$this->Erroresdetalle_model->Mostrar_detalle_indicador_fed($opcion,$intervencion,$renaes,$Nro_Doc);
        $this->layout->view("mostrar_detalle_indicador_fed",compact('datos','establec'));
    }
    public function Mostrar_detalle_Seguimiento_CRED($opcion=null,$intervencion=null,$renaes=null,$Nro_Doc=null,$FichaFam=null)
    {
        $establec=$renaes;
        $datos=$this->Erroresdetalle_model->Mostrar_detalle_SeguimientoCRED($opcion,$intervencion,$renaes,$Nro_Doc,$FichaFam);
        $this->layout->view("mostrar_detalle_vif_pos",compact('datos','establec'));
    } 


        //****************promsa********************//
      public function mostrar_errores_promsa_detalle($codigo_unico=null,$id_cita=null)
    {
        $datos=$this->Erroresdetalle_model->Mostrar_errores_promsa_detalle($codigo_unico,$id_cita);
        $this->layout->view("mostrar_errores_promsa_detalle",compact('datos'));
    }

         //****************its********************//
     public function mostrar_errores_its_detalle($codigo_unico=null,$id_cita=null)
    {
        $datos=$this->Erroresdetalle_model->Mostrar_errores_its_detalle($codigo_unico,$id_cita);
        $this->layout->view("mostrar_errores_its_detalle",compact('datos'));
    }

     public function mostrar_errores_its_detalle_dni($codigo_unico=null,$dni=null)
    {
        $datos=$this->Erroresdetalle_model->Mostrar_errores_its_detalle_dni($codigo_unico,$dni);
        $this->layout->view("mostrar_errores_its_detalle",compact('datos'));
    }

      //****************dnt********************//
     public function mostrar_errores_dnt_detalle($codigo_unico=null,$id_cita=null)
    {
        $datos=$this->Erroresdetalle_model->Mostrar_errores_dnt_detalle($codigo_unico,$id_cita);
        $this->layout->view("mostrar_errores_its_detalle",compact('datos'));
    }

      public function mostrar_seguimiento_diabetes_detalle($codigo_unico=null,$dni=null)
    {
        $datos=$this->Erroresdetalle_model->Mostrar_seguimiento_diabetes_detalle($codigo_unico,$dni);
        $this->layout->view("mostrar_errores_its_detalle",compact('datos'));
    }
     public function mostrar_seguimiento_hipertension_detalle($codigo_unico=null,$dni=null)
    {
        $datos=$this->Erroresdetalle_model->Mostrar_seguimiento_hipertension_detalle($codigo_unico,$dni);
        $this->layout->view("mostrar_errores_its_detalle",compact('datos'));
    }
     public function mostrar_seguimiento_dnt_detalle($codigo_unico=null,$dni=null)
    {
        $datos=$this->Erroresdetalle_model->Mostrar_seguimiento_dnt_detalle($codigo_unico,$dni);
        $this->layout->view("mostrar_errores_its_detalle",compact('datos'));
    }
}

