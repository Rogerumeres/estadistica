<?php
class Seguimiento_model extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
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
    //********************     busqueda de atenciones       *******************//
    public function buscar_atenciones($micro_red_esta,$documento,$dato,$eess) 
    {
        $query=$this->db->query("call BuscarAtencionesJeison($micro_red_esta,$documento,'$dato',$eess)");
        return $query->result();
    }
    public function buscar_atenciones_cie($micro_red_esta,$establec,$mes,$dx,$lab,$cie) 
    {
        $query=$this->db->query("call BuscarAtencionesJeisonCie($micro_red_esta,$establec,$mes,'$dx','$lab','$cie')");
        return $query->result();
    }
    public function listar_establec() 
    {
        $query=$this->db
        ->select("Codigo_Unico,Nombre_Establecimiento")
        ->from("MAESTRO_ESTABLEC")
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
    
    //********************   mental       *******************//
    public function Seguimiento_mental_vif($ano,$eess) 
    {
        $query=$this->db->query("call PASeguimientoMentalAplicativo(1,$ano,'$eess')");
        return $query->result();
    }
    
    public function Seguimiento_mental_td($ano,$eess) 
    {
        $query=$this->db->query("call PASeguimientoMentalAplicativo(2,$ano,'$eess')");
        return $query->result();
    }
    
    public function Seguimiento_mental_ad($ano,$eess) 
    {
        $query=$this->db->query("call PASeguimientoMentalAplicativo(3,$ano,'$eess')");
        return $query->result();
    }
    
    public function Seguimiento_mental_ep($ano,$eess) 
    {
        $query=$this->db->query("call PASeguimientoMentalAplicativo(4,$ano,'$eess')");
        return $query->result();
    }
    
    public function Seguimiento_mental_encuesta($ano,$eess) 
    {
        $query=$this->db->query("call PASeguimientoMentalAplicativo(5,$ano,'$eess')");
        return $query->result();
    }
    
    public function Seguimiento_mental_encuesta_($ano,$eess) 
    {
        $query=$this->db->query("call PASeguimientoMentalAplicativo(6,$ano,'$eess')");
        return $query->result();
    }
    
    public function Seguimiento_mental_ffuertes($ano,$eess) 
    {
        $query=$this->db->query("call PASeguimientoMentalAplicativo(7,$ano,'$eess')");
        return $query->result();
    }
    
    public function Seguimiento_mental_tras_psicosociales($ano,$eess) 
    {
        $query=$this->db->query("call PASeguimientoMentalAplicativo(8,$ano,'$eess')");
        return $query->result();
    }
    
    public function Errores_mental($ano,$mes) 
    {
        $query=$this->db->query("call PAErroresVariosJeison(1,$ano,'$mes')");
        return $query->result();
    }
}