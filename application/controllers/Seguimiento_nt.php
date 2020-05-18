<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Seguimiento_nt extends CI_Controller
{
    	public function __construct()
        {
            
            parent::__construct();
            $this->load->library(array('session'));
            $this->load->library('UsuarioLib');
           $this->load->helper(array('url'));       
            $this->layout->setLayout('template4');
           $this->load->model("seguimiento_model_nt");
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

public function listar_establec(){

              $this->layout->setMensaje("Buscar Atenciones HIS-MINSA");
              $datos=$this->seguimiento_model_nt->listar_establec();
              $this->layout->view('buscar_atenciones_inicio',compact('datos'));
}



  /*------------bucal--------*/

    
public function Seguimiento_bucal_gestante() {
        
             $this->layout->setMenu_activo("4");            
               if($this->input->post()) 
              {
                  $result1=$this->seguimiento_model_nt->listar_establec();
                  $año= $this->input->post('año');
                  $establec= $this->input->post('establec');
                   $establecimiento=$this->seguimiento_model_nt->Buscar_establec($establec);
                  $this->layout->setMensaje("Seguimiento Odontologia Gestante");
                  $result2=$this->seguimiento_model_nt->Seguimiento_bucal_gestante($año,$establec);
                  $this->layout->view('bucal_gestante',compact('result1','result2','establecimiento'));

              }else{

                  $this->layout->setMensaje("Buscar Atenciones Odontologia Gestante");
                  $datos=$this->seguimiento_model_nt->listar_establec();
                  $this->layout->view('inicio_bucal_gestante',compact('datos'));
              }
              
    } 

public function Seguimiento_bucal_nino() {
            
             $this->layout->setMenu_activo("4");
         
              if($this->input->post()) 
              {
                  $result1=$this->seguimiento_model_nt->listar_establec();
                  $año= $this->input->post('año');
                  $establec= $this->input->post('establec');
                   $establecimiento=$this->seguimiento_model_nt->Buscar_establec($establec);
                  $this->layout->setMensaje("Seguimiento Odontologia Niños");
                  $result2=$this->seguimiento_model_nt->Seguimiento_bucal_ninio($año,$establec);
                  $this->layout->view('bucal_ninos',compact('result1','result2','establecimiento'));

              }else{

                  $this->layout->setMensaje("Buscar Atenciones Odontologia Niños");
                  $datos=$this->seguimiento_model_nt->listar_establec();
                  $this->layout->view('inicio_bucal_ninos',compact('datos'));
              }
              
    } 


  public function Seguimiento_bucal_adulto() {
            
             $this->layout->setMenu_activo("4");
         
              if($this->input->post()) 
              {
                  $result1=$this->seguimiento_model_nt->listar_establec();
                  $año= $this->input->post('año');
                  $establec= $this->input->post('establec');
                  $establecimiento=$this->seguimiento_model_nt->Buscar_establec($establec);
                  $this->layout->setMensaje("Seguimiento Odontologia Adulto");
                  $result2=$this->seguimiento_model_nt->Seguimiento_bucal_adulto($año,$establec);
                  $this->layout->view('bucal_adulto',compact('result1','result2','establecimiento'));

              }else{

                  $this->layout->setMensaje("Buscar Atenciones Odontologia Adulto");
                  $datos=$this->seguimiento_model_nt->listar_establec();
                  $this->layout->view('inicio_bucal_adulto',compact('datos'));
              }
              
    } 


public function listar_errores_preventivo() 

{            $this->layout->setMenu_activo("4");
            if($this->input->post()) 
              {
                  $result1=$this->seguimiento_model_nt->listar_microred();
                  $establec= $this->input->post('establec');
                   $this->layout->setMensaje("Errores Bucal");
                  $result2=$this->seguimiento_model_nt->listar_errores_preventivo($establec);
                  $this->layout->view('listar_errores_odontologia_preventiva',compact('result1','result2'));

              }else{

                  $this->layout->setMensaje("Listar Errores Bucal");
                  $datos=$this->seguimiento_model_nt->listar_microred();
                  $this->layout->view('inicio_errores_odontologia_preventiva',compact('datos'));
              }
             
    }





//********************     Cancer      *******************//


public function listar_ivaa() {
        
             $this->layout->setMenu_activo("3");            
               if($this->input->post()) 
              {   
                  $microred= $this->input->post('establec');
                  $establecimiento=$this->seguimiento_model_nt->Buscar_establec($microred);
                  $this->layout->setMensaje("Nominal Ivva");
                  $result1=$this->seguimiento_model_nt->listar_establec();
                  $result2=$this->seguimiento_model_nt->listar_ivaa($microred);
                  $this->layout->view('ivva',compact('result1','result2','establecimiento'));

              }else{

                  $this->layout->setMensaje("Listar Nominal Ivva");
                  $datos=$this->seguimiento_model_nt->listar_establec();
                  $this->layout->view('inicio_ivva',compact('datos'));
              }
         }

public function listar_pap() {
        
             $this->layout->setMenu_activo("3");            
               if($this->input->post()) 
              {   
                  $microred= $this->input->post('establec');
                  $establecimiento=$this->seguimiento_model_nt->Buscar_establec($microred);
                  $this->layout->setMensaje("Nominal PAP");
                  $result1=$this->seguimiento_model_nt->listar_establec();
                  $result2=$this->seguimiento_model_nt->listar_pap($microred);
                  $this->layout->view('pap',compact('result1','result2','establecimiento'));

              }else{

                  $this->layout->setMensaje("Listar Nominal PAP");
                  $datos=$this->seguimiento_model_nt->listar_establec();
                  $this->layout->view('inicio_pap',compact('datos'));
              }
         
}


public function listar_consejerias() {
        
             $this->layout->setMenu_activo("3");            
               if($this->input->post()) 
              {   
                  $microred= $this->input->post('establec');
                  $establecimiento=$this->seguimiento_model_nt->Buscar_establec($microred);
                  $this->layout->setMensaje("Nominal Consejerias");
                  $result1=$this->seguimiento_model_nt->listar_establec();
                  $result2=$this->seguimiento_model_nt->listar_consejeria($microred);
                  $this->layout->view('consejeria',compact('result1','result2','establecimiento'));

              }else{

                  $this->layout->setMensaje("Listar Nominal Consejerias");
                  $datos=$this->seguimiento_model_nt->listar_establec();
                  $this->layout->view('inicio_consejera',compact('datos'));
              }
         
}

public function listar_nominales() {
        
             $this->layout->setMenu_activo("3");            
               if($this->input->post()) 
              {   
                  $microred= $this->input->post('establec');
                  $establecimiento=$this->seguimiento_model_nt->Buscar_establec($microred);
                  $this->layout->setMensaje("Nominal cancer");
                  $result1=$this->seguimiento_model_nt->listar_establec();
                  $result2=$this->seguimiento_model_nt->listar_nominales($microred);
                  $this->layout->view('nominales_cancer',compact('result1','result2','establecimiento'));

              }else{

                  $this->layout->setMensaje("Listar Nominal Cancer");
                  $datos=$this->seguimiento_model_nt->listar_establec();
                  $this->layout->view('inicio_nominales_cancer',compact('datos'));
              }
         
}

public function errores_cancer() {
        
             $this->layout->setMenu_activo("3");            
               if($this->input->post()) 
              {   
                  $microred= $this->input->post('establec');
                  $this->layout->setMensaje("Errores frecuentes cancer");
                  $result1=$this->seguimiento_model_nt->listar_microred();
                  $result2=$this->seguimiento_model_nt->Error_cancer($microred);
                  $this->layout->view('errores_cancer',compact('result1','result2'));

              }else{

                  $this->layout->setMensaje("Listar Errores Cancer");
                  $datos=$this->seguimiento_model_nt->listar_microred();
                  $this->layout->view('inicio_errores_cancer',compact('datos'));
              }
              
    } 

public function listar_entrega_resultados_pap() {
          $this->layout->setMenu_activo("3");
          $this->layout->setMensaje("Lista de Entrega de resultados PAP ");
        $datos=$this->Seguimiento_model_nt->listar_entrega_resultados_pap();
        $this->layout->view('listar_entrega_resultados_pap',compact('datos'));
        
     }
    


 //********************     hipertension y diabetes      *******************//


public function listar_diabetes() {
         $this->layout->setMenu_activo("5");
         if($this->input->post()) 
              {
                  $result1=$this->seguimiento_model_nt->listar_establec();
                  $establec= $this->input->post('establec');
                  $establecimiento=$this->seguimiento_model_nt->Buscar_establec($establec);
                  $this->layout->setMensaje("Casos de Diabetes - Tratados No Controlados - Tratados Controlado");
                  $result2=$this->seguimiento_model_nt->listar_diabetes($establec);
                  $this->layout->view('listar_diabetes',compact('result1','result2','establecimiento'));

              }else{

                  $this->layout->setMensaje("Buscar casos Diabetes");
                  $datos=$this->seguimiento_model_nt->listar_establec();
                  $this->layout->view('inicio_listar_diabetes',compact('datos'));
              }
             
        }


public function listar_hipertension() {
         
     $this->layout->setMenu_activo("5");

 if($this->input->post()) 
              {
                  $result1=$this->seguimiento_model_nt->listar_establec();
                    $establec= $this->input->post('establec');
                  $establecimiento=$this->seguimiento_model_nt->Buscar_establec($establec);
                  $this->layout->setMensaje("Casos de hipertension - Tratados No Controlados- Tratados Controlado");
                  $result2=$this->seguimiento_model_nt->listar_hipertension($establec);
                  $this->layout->view('listar_hipertension',compact('result1','result2','establecimiento'));

              }else{

                  $this->layout->setMensaje("Buscar casos hipertensión");
                  $datos=$this->seguimiento_model_nt->listar_establec();
                  $this->layout->view('inicio_listar_hipertension',compact('datos'));
              }
             
        }
             

public function valoracion_clinica() {
         $this->layout->setMenu_activo("5");


 if($this->input->post()) 
              {
                  $result1=$this->seguimiento_model_nt->listar_establec();
                
                  $establec= $this->input->post('establec');
                  $establecimiento=$this->seguimiento_model_nt->Buscar_establec($establec);
                  $this->layout->setMensaje("valoración del índice de masa corporal (IMC), perímetro abdominal, medición de la presión arterial y estilos de vida");
                  $result2=$this->seguimiento_model_nt->valoracion_clinica($establec);
                  $this->layout->view('listar_errores_valoracion',compact('result1','result2','establecimiento'));

              }else{

                  $this->layout->setMensaje("Buscar valoración del índice de masa corporal (IMC)");
                  $datos=$this->seguimiento_model_nt->listar_establec();
                  $this->layout->view('inicio_listar_errores_valoracion',compact('datos'));
              }
            
    }

public function errores_dnt() {
         $this->layout->setMenu_activo("5");


 if($this->input->post()) 
              {
                  $result1=$this->seguimiento_model_nt->listar_microred();
                  $establec= $this->input->post('establec');
                  $establecimiento=$this->seguimiento_model_nt->Buscar_establec($establec);
                  $this->layout->setMensaje("Errores de daños no Transmisibles");
                  $result2=$this->seguimiento_model_nt->errores_dnt($establec);
                  $this->layout->view('listar_errores_dnt',compact('result1','result2','establecimiento'));

              }else{

                  $this->layout->setMensaje("Buscar Errores de daños no Transmisibles");
                  $datos=$this->seguimiento_model_nt->listar_microred();
                  $this->layout->view('inicio_listar_errores_dnt',compact('datos'));
              }


             
        }
   
}