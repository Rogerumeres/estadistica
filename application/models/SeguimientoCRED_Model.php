<?php
class SeguimientoCRED_Model extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
    }
    public function Listar_establec() 
    {
        $query=$this->db
        ->select("RENAES,Establecimiento")
        ->from("TBSeguimientosCRED")
        ->group_by("RENAES")
        ->order_by("MicroRed")
        ->get();
        return $query->result();
    }
    public function Listar_Anio() 
    {
        $query=$this->db
        ->select("'1' as id_año,Año")
        ->from("TbNominalCSMCQ")
        ->group_by("Año")
        ->order_by("Año")
        ->get();
        return $query->result();
    }
    public function Buscar_establec($RENAES) 
    {
        $query=$this->db
        ->select("Establecimiento")
        ->from("TBSeguimientosCRED")
        ->where("RENAES",$RENAES)
        ->get();
        return $query->row();
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
    //********************   Seguimiento CRED    *******************//
    public function Seguimiento_CRED_Errores($mes,$RENAES) 
    {
        $query=$this->db->query("call PASeguimientoCREDAplicativo(1,$mes,'$RENAES')");
        return $query->result();
    }
    public function Seguimiento_CRED_MenorMes($mes,$RENAES) 
    {
        $query=$this->db->query("call PASeguimientoCREDAplicativo(2,$mes,'$RENAES')");
        return $query->result();
    }
    public function Seguimiento_CRED_MenorAnio($mes,$RENAES) 
    {
        $query=$this->db->query("call PASeguimientoCREDAplicativo(3,$mes,'$RENAES')");
        return $query->result();
    }
    public function Seguimiento_CRED_PoliSeisMeses($mes,$RENAES) 
    {
        $query=$this->db->query("call PASeguimientoCREDAplicativo(4,$mes,'$RENAES')");
        return $query->result();
    }
    public function Seguimiento_CRED_SuplePrev($mes,$RENAES) 
    {
        $query=$this->db->query("call PASeguimientoCREDAplicativo(5,$mes,'$RENAES')");
        return $query->result();
    }
    public function Seguimiento_CRED_SupleTera($mes,$RENAES) 
    {
        $query=$this->db->query("call PASeguimientoCREDAplicativo(6,$mes,'$RENAES')");
        return $query->result();
    }
    public function Seguimiento_CRED_Vacunas($mes,$RENAES) 
    {
        $query=$this->db->query("call PASeguimientoCREDAplicativo(7,$mes,'$RENAES')");
        return $query->result();
    }
}