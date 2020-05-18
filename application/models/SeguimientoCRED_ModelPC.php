<?php
class SeguimientoCRED_Model extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
    }
    public function listar_establec() 
    {
        $query=$this->db
        ->select("RENAES,Establecimiento")
        ->from("`TBSeguimientosCRED`")
        ->group_by("RENAES")
        ->order_by("MicroRed")
        ->get();
        return $query->result();
    }
    public function Buscar_establec($renaes) 
    {
        $query=$this->db
        ->select("Establecimiento")
        ->from("TBSeguimientosCRED")
        ->where("RENAES",$renaes)
        ->get();
        return $query->row();
    }
    //********************   Seguimiento CRED    *******************//
    public function Seguimiento_CRED_Errores($ano,$eess) 
    {
        $query=$this->db->query("call PASeguimientoCREDAplicativo(1,$ano,'$eess')");
        return $query->result();
    }
    public function Seguimiento_CRED_MenorMes($ano,$eess) 
    {
        $query=$this->db->query("call PASeguimientoCREDAplicativo(2,$ano,'$eess')");
        return $query->result();
    }
    public function Seguimiento_CRED_MenorAnio($ano) 
    {
        $query=$this->db->query("call PASeguimientoCREDAplicativo(3,$ano,'$eess')");
        return $query->result();
    }
    public function Seguimiento_CRED_PoliSeisMeses($ano,$eess) 
    {
        $query=$this->db->query("call PASeguimientoCREDAplicativo(4,$ano,'$eess')");
        return $query->result();
    }
    public function Seguimiento_CRED_SuplePrev($ano,$eess) 
    {
        $query=$this->db->query("call PASeguimientoCREDAplicativo(5,$ano,'$eess')");
        return $query->result();
    }
    public function Seguimiento_CRED_SupleTera($ano,$eess) 
    {
        $query=$this->db->query("call PASeguimientoCREDAplicativo(6,$ano,'$eess')");
        return $query->result();
    }
    public function Seguimiento_CRED_Vacunas($ano,$eess) 
    {
        $query=$this->db->query("call PASeguimientoCREDAplicativo(7,$ano,'$eess')");
        return $query->result();
    }
}