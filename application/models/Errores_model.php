<?php
class Errores_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        
     }


//********************     Planificacion Sismed        *******************//

public function listar_errores_plani_sismed_Modelo($mes) {
        
        $query=$this->db->query("call PAMostrarHisSismed(2020,$mes)");
      
       // ->select("*")
       // ->from("tbnominalhisminsa")
        //->get();
        return $query->result();
    }
    
//********************     Materno        *******************//

public function listar_errores_Materno_Modelo($mes) {
        
        $query=$this->db->query("call PAMostrarSeguimientoMaterno(2020,$mes)");
      
       // ->select("*")
       // ->from("tbnominalhisminsa")
        //->get();
        return $query->result();
    }

public function listarGestantes($establec) {
        
        $query=$this->db->query("call PAMostrarGestantes('$establec')");
      
       // ->select("*")
       // ->from("tbnominalhisminsa")
        //->get();
        return $query->result();
        
    }
public function Buscar_FechaActualizacion() 
    {
        $query=$this->db
        ->select("FechaActualizacion")
        ->from("TbNominalCSMCQ")
        ->group_by("FechaActualizacion")
        ->order_by("FechaActualizacion")
        ->get();
        return $query->row();
    }

}