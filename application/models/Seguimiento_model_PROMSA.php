<?php
class Seguimiento_model_PROMSA extends CI_Model {

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

 //********************   promsa      *******************//

public function Listar_errores_promsa($microred) {
        
        $query=$this->db->query("call Errores_Promsa(1,$microred)");
      
      
        return $query->result();
    }










}