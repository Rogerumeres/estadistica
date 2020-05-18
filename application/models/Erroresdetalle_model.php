<?php
class Erroresdetalle_model extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
    }


    Public function listar_nominalhiscita($id)
    {
        $query=$this->db->query("call listar_atenciones($id)");
        return $query->row();
        /*
        $this->db->select("*");
        $this->db->where("ID_CITA",$id);
        $this->db->from("tbnominalhisminsa");
        $resultado=$this->db->get();
        return $resultado->row();
        */
    }

   
    Public function listar_sismed_hc($opcion,$renaes,$mes)
    {
        $query=$this->db->query("call PAMostrarDetalleInsumosHisHC($opcion,'$renaes',2020,$mes)");
        return $query->result();
        /*
        $this->db->select("*");
        $this->db->where("ID_CITA",$id);
        $this->db->from("tbnominalhisminsa");
        $resultado=$this->db->get();
        return $resultado->row();
        */
    }
    Public function listar_Materno_hc_Modelo($opcion,$renaes,$mes)
    {
        $query=$this->db->query("call PAMostrarDetalleVwConsolidadoSeguimientoMaternoHC($opcion,$mes,'$renaes')");
        return $query->result();
    }   
    Public function listar_detalle_nino($dni)
    {
        $query=$this->db->query("call mostrar_detalle_nino($dni)");
        return $query->result();
        /*
        $this->db->select("*");
        $this->db->where("ID_CITA",$id);
        $this->db->from("tbnominalhisminsa");
        $resultado=$this->db->get();
        return $resultado->row();
        */
    }


    //********************   detalle error      *******************//

    public function Mostrar_detalle_vif_pos($opcion,$intervencion,$renaes,$Nro_Doc,$FichaFam) 
    {
        $query=$this->db->query("call PASeguimientoMentalVisual($opcion,'$intervencion','$renaes','$Nro_Doc','$FichaFam')");
        return $query->result();
    }
    public function Mostrar_detalle_tbc($opcion,$intervencion,$renaes,$Nro_Doc,$FichaFam) 
    {
        $query=$this->db->query("call PASeguimientoTBCVisual($opcion,'$intervencion','$renaes','$Nro_Doc','$FichaFam')");
        return $query->result();
    }
   
    public function Mostrar_detalle_indicador_fed($opcion,$intervencion,$renaes,$Nro_Doc) 
    {
        $query=$this->db->query("call PASeguimientoTBCVisual($opcion,'$intervencion','$renaes','$Nro_Doc','')");
        return $query->result();
    }
    public function Mostrar_detalle_SeguimientoCRED($opcion,$intervencion,$renaes,$Nro_Doc,$FichaFam) 
    {
        $query=$this->db->query("call PASeguimientoCREDVisual($opcion,'$intervencion','$renaes','$Nro_Doc','$FichaFam')");
        return $query->result();
    }

//**********************its*********************//

     public function Mostrar_errores_its_detalle($codigo_unico,$id_cita) 
    {
        $query=$this->db->query("call Mostrar_errores_its_detalle(1,'$codigo_unico','$id_cita')");
        return $query->result();
    }

     public function Mostrar_errores_its_detalle_dni($codigo_unico,$dni) 
    {
        $query=$this->db->query("call Mostrar_errores_its_detalle(2,'$codigo_unico','$dni')");
        return $query->result();
    }

    //**********************its*********************//

     public function Mostrar_errores_promsa_detalle($codigo_unico,$id_cita) 
    {
        $query=$this->db->query("call Mostrar_errores_promsa_detalle('$codigo_unico','$id_cita')");
        return $query->result();
    }

// ----------------bucal detalles-------------//
     Public function Mostrar_detalle_bucal($mes,$dni)
    {
        $query=$this->db->query("call Mostrar_bucal_detalle($mes,'$dni')");
        return $query->result();
       
    }


      //**********************its*********************//

     public function Mostrar_errores_dnt_detalle($codigo_unico,$id_cita) 
    {
        $query=$this->db->query("call Mostrar_hipertension_diabetes_detalle(1,'$codigo_unico','$id_cita')");
        return $query->result();
    }

    public function Mostrar_seguimiento_diabetes_detalle($codigo_unico,$dni) 
    {
        $query=$this->db->query("call Mostrar_hipertension_diabetes_detalle(2,'$codigo_unico','$dni')");
        return $query->result();
    }
     public function Mostrar_seguimiento_hipertension_detalle($codigo_unico,$dni) 
    {
        $query=$this->db->query("call Mostrar_hipertension_diabetes_detalle(3,'$codigo_unico','$dni')");
        return $query->result();
    }
     public function Mostrar_seguimiento_dnt_detalle($codigo_unico,$dni) 
    {
        $query=$this->db->query("call Mostrar_hipertension_diabetes_detalle(4,'$codigo_unico','$dni')");
        return $query->result();
    }

    
}