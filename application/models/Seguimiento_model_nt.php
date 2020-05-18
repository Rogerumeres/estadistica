<?php
class Seguimiento_model_nt extends CI_Model {

    function __construct()
    {
        parent::__construct();
        
     }

public function listar_establec() {
        
        $query=$this->db
        ->select("Codigo_Unico,Nombre_Establecimiento")
        ->from("MAESTRO_ESTABLEC")
        ->get();
        return $query->result();
        echo result();
    }

public function Buscar_establec($renaes) {
        
        $query=$this->db
        ->select("Nombre_Establecimiento")
        ->from("MAESTRO_ESTABLEC")
        ->where("Codigo_Unico",$renaes)
        ->get();
        return $query->row();
    }



public function listar_microred() {
        
        $query=$this->db
        ->select("Codigo_MicroRed,MicroRed")
        ->from("MAESTRO_ESTABLEC")
        ->group_by("Codigo_MicroRed")
        ->get();
        return $query->result();
    }

public function Buscar_microred($codigo) {
        
        $query=$this->db
        ->select("MicroRed")
        ->from("MAESTRO_ESTABLEC")
        ->where("Codigo_MicroRed",$codigo)
        ->group_by("Codigo_MicroRed")
        ->get();
        return $query->row();
    }
 //********************   bucal       *******************//
 public function Seguimiento_bucal_ninio($ano,$eess) {
        
        $query=$this->db->query("call Mostrar_seguimiento_bucal(1,$ano,'$eess')");
      
      
        return $query->result();
    }

public function Seguimiento_bucal_gestante($ano,$eess) {
        
        $query=$this->db->query("call Mostrar_seguimiento_bucal(2,$ano,'$eess')");
      
      
        return $query->result();
    }

public function Seguimiento_bucal_adulto($ano,$eess) {
        
        $query=$this->db->query("call Mostrar_seguimiento_bucal(3,$ano,'$eess')");
      
      
        return $query->result();
    }
public function listar_errores_preventivo($renaes) {
        
        $query=$this->db->query("call Mostrar_Errores_Bucal(1,'$renaes')");
      
       // ->select("*")
       // ->from("tbnominalhisminsa")
        //->get();
        return $query->result();
    }


//********************     Cancer           *******************//
public function Error_cancer($establec) {
        
        $query=$this->db->query("call Mostrar_cancer(1,$establec)");
        return $query->result();
    }

public function listar_pap($establec) {
        
        $query=$this->db->query("call Mostrar_cancer(3,$establec)");
        return $query->result();
    }

public function listar_ivaa($establec) {
        
        $query=$this->db->query("call Mostrar_cancer(4,$establec)");
        return $query->result();
    }

public function listar_consejeria($establec) {
        
        $query=$this->db->query("call Mostrar_cancer(2,$establec)");
        return $query->result();
    }

public function listar_nominales($establec) {
        
        $query=$this->db->query("call Mostrar_cancer(5,$establec)");
        return $query->result();
    }

public function listar_entrega_resultados_pap() {
        
        $query=$this->db->query("call Mostrar_cancer(12)");
        return $query->result();
    }




//********************     HIPERTENSION Y DIABETES        *******************//

public function listar_diabetes($establec) {
        
        $query=$this->db->query("call Mostrar_hipertension_diabetes(1,'$establec')");
      
       // ->select("*")
       // ->from("tbnominalhisminsa")
        //->get();
        return $query->result();
    }

public function listar_hipertension($establec) {
        
        $query=$this->db->query("call Mostrar_hipertension_diabetes(2,'$establec')");
      
       // ->select("*")
       // ->from("tbnominalhisminsa")
        //->get();
        return $query->result();
    }

public function valoracion_clinica($establec) {
        
        $query=$this->db->query("call Mostrar_hipertension_diabetes(3,'$establec')");
      
        return $query->result();
    }

public function errores_dnt($establec) {
        
        $query=$this->db->query("call Mostrar_hipertension_diabetes(4,'$establec')");
      
       // ->select("*")
       // ->from("tbnominalhisminsa")
        //->get();
        return $query->result();
    }


}