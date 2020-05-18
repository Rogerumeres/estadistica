<?php
class Seguimiento_model_ITS extends CI_Model {

    function __construct()
    {
        parent::__construct();
        
     }

public function listar_establec() {
        
        $query=$this->db
        ->select("Codigo_MicroRed,MicroRed")
        ->from("MAESTRO_ESTABLEC")
        ->group_by("Codigo_MicroRed")
        ->get();
        return $query->result();
    }

public function Buscar_establec($renaes) {
        
        $query=$this->db
        ->select("MicroRed")
        ->from("MAESTRO_ESTABLEC")
        ->where("Codigo_MicroRed",$renaes)
        ->group_by("Codigo_MicroRed")
        ->get();
        return $query->row();
    }

 //********************   its      *******************//

public function Listar_errores_its($microred) {
        
        $query=$this->db->query("call Mostrar_Errores_its(1,$microred)");
      
      
        return $query->result();
    }

public function Nominal_vih_positivo($microred) {
        
        $query=$this->db->query("call Mostrar_Errores_its(2,$microred)");
      
      
        return $query->result();
    }

public function Nominal_hepatitis_positivo($microred) {
        
        $query=$this->db->query("call Mostrar_Errores_its(3,$microred)");
      
      
        return $query->result();
    }

public function Nominal_sifilis_positivo($microred) {
        
        $query=$this->db->query("call Mostrar_Errores_its(4,$microred)");
      
      
        return $query->result();
    }








}