<?php
class Info_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        
     }

//********************     Cancer           *******************//

public function mostrar_ninos_6meses() {
        
        $query=$this->db->query("call mostrar_anemia(1)");
        return $query->result();
    }

  public function mostrar_ninos_4meses() {
        
        $query=$this->db->query("call mostrar_anemia(4)");
        return $query->result();
    }

public function mostrar_ninos_anemia() {
        
        $query=$this->db->query("call mostrar_anemia(2)");
        return $query->result();
    }

   public function mostrar_visita_anemia() {
        
        $query=$this->db->query("call mostrar_anemia(3)");
        return $query->result();
    }

public function mostrar_indicador_visita_anemia($año,$mes) {
        
        $query=$this->db->query("call mostrar_indicador(6,$año,$mes)");
        return $query->result();
    }

public function mostrar_indicador_visita_45($año,$mes) {
        
        $query=$this->db->query("call mostrar_indicador(7,$año,$mes)");
        return $query->result();
    }

  public function mostrar_indicador_suple_45($año,$mes) {
        
        $query=$this->db->query("call mostrar_indicador(10,$año,$mes)");
        return $query->result();
    }

public function mostrar_indicador_8_meses($año,$mes) {
        
        $query=$this->db->query("call mostrar_indicador(9,$año,$mes)");
        return $query->result();
    }
public function mostrar_indicador_12_meses($año,$mes) {
        
        $query=$this->db->query("call mostrar_indicador(8,$año,$mes)");
        return $query->result();
    }

public function buscar_anemia($buscar) {
        
        $query=$this->db->query("call buscar_anemia($buscar)");
      
       // ->select("*")
       // ->from("tbnominalhisminsa")
        //->get();
        return $query->result();
    }

/*----------VACUNAS-----*/

    public function mostrar_vacunas($mes) {
        
        $query=$this->db->query("call CON_VAC($mes)");
        return $query->result();
    }


 public function mostrar_vacunas_detalle($dni) {
        
        $query=$this->db->query("call CON_VAC_01($dni)");
        return $query->result();
    }


}