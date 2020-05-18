<?php
class TbcMetaxenicas_model extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
    }
    public function listar_establec() 
    {
        $query=$this->db
        ->select("RENAES,Establecimiento")
        ->from("TBTBCPANCasosPositivosExcel")
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
        ->from("TBTBCPANCasosPositivosExcel")
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
    //********************   tbc       *******************//
    public function Tbc_toma($ano,$RENAES) 
    {
        $query=$this->db->query("call PASeguimientoTBCAplicativo(1,$ano,'','$RENAES')");
        return $query->result();
    }
    public function Tbc_contacto($ano,$RENAES) 
    {
        $query=$this->db->query("call PASeguimientoTBCAplicativo(2,$ano,'','$RENAES')");
        return $query->result();
    }
    public function Errores_tbc($ano,$mes) 
    {
        $query=$this->db->query("call PASeguimientoTBCAplicativo(3,$ano,$mes,'')");
        return $query->result();
    }
    
    
    
    //********************   Metaxenicas      *******************//
    public function Errores_malaria($ano,$mes) 
    {
    $query=$this->db->query("call PAErroresVariosJeison(2,$ano,$mes)");
    return $query->result();
    }
    
    public function Errores_bartonela($ano,$mes) 
    {
    $query=$this->db->query("call PAErroresVariosJeison(3,$ano,$mes)");
    return $query->result();
    }
    
    public function Errores_rbartonela($ano,$mes) 
    {
    $query=$this->db->query("call PAErroresVariosJeison(4,$ano,$mes)");
    return $query->result();
    }
    
    public function Errores_leishmania($ano,$mes) 
    {
    $query=$this->db->query("call PAErroresVariosJeison(5,$ano,$mes)");
    return $query->result();
    }
}