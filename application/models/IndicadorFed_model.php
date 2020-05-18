<?php
class IndicadorFed_model extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
    }
    public function listar_establec() 
    {
        $query=$this->db
        ->select("Codigo_Unico,Nombre_Establecimiento")
        ->from("MAESTRO_ESTABLEC")
        ->group_by("Codigo_Unico")
        ->get();
        return $query->result();
    }
    public function Buscar_establec($renaes) 
    {
        $query=$this->db
        ->select("Nombre_Establecimiento")
        ->from("MAESTRO_ESTABLEC")
        ->where("Codigo_Unico",$renaes)
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
    //********************   Indicador Fed      *******************//
    public function indicador_fed_materno($mes,$eess) 
    {
        $query=$this->db->query("call PASeguimientoTBCAplicativo(10,2020,$mes,'$eess')");
        return $query->result();
    }
    public function indicador_fed_nino110a130($mes,$eess) 
    {
        $query=$this->db->query("call PASeguimientoTBCAplicativo(12,2020,$mes,'$eess')");
        return $query->result();
    }
}