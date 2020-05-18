<?php
class Informacion_esta_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
	public function listar_anio() {
        
        $query=$this->db
        ->select("id,anio")
        ->from("anio")
        ->get();
        return $query->result();
    }

    public function listar_informacion_estadistica() {
        
        $query=$this->db
        ->select("id,descripcion, unidad_informativa,anio, archivo,fecha_registro")
        ->from("informacion_estadistica")
        ->order_by("fecha_registro","desc")
        ->get();
        return $query->result();
    }

    public function listar($id)
    {
        $this->db->select("archivo");
        $this->db->where("id",$id);
        $this->db->from("informacion_estadistica");

        $resultado=$this->db->get();
        return $resultado->row();
    }

    public function eliminar($id)
    {
        $this->db->delete('informacion_estadistica', array('id' => $id));
        return true; 
    }

    public function eliminar_anio($id)
    {
        $this->db->delete('anio', array('id' => $id));
        return true; 
    }

    public function listar_unidad_informativa() {
        
        $query=$this->db
        ->select("id_unidad,unidad_informativa")
        ->from("unidad_informativa")
        ->get();
        return $query->result();
    }

    //*** Insertar Informacion Estadistica

     public function insertar_info_esta($descripcion, $unidad_informativa, $anio, $archivo, $fecha){
    
    $data = array(
    'descripcion' => $descripcion,
    'unidad_informativa' => $unidad_informativa,
    'anio' => $anio,
    'archivo'=>$archivo,
    'fecha_registro'=>date('y-m-d'),
        );
    
    return $this->db->insert('informacion_estadistica', $data);
	}

public function listar_info_morbi() {
        
        
        $query=$this->db
        ->select("id,descripcion, archivo")
        ->from("informacion_estadistica")
        ->where("unidad_informativa","Morbilidad")
        ->get();
        return $query->result();
        
            }
	public function listar_info_morbi_17() {
        
        $query=$this->db
        ->select("id,descripcion, unidad_informativa,anio, archivo, fecha_registro")
        ->from("informacion_estadistica")
         ->where("unidad_informativa","Morbilidad")
         ->where("anio","2017")
        ->get();
        return $query->result();
    }
	public function listar_info_morbi_16() {
        
        $query=$this->db
        ->select("id,descripcion, unidad_informativa,anio, archivo, fecha_registro")
        ->from("informacion_estadistica")
         ->where("unidad_informativa","Morbilidad")
         ->where("anio","2016")
        ->get();
        return $query->result();
    }

    public function listar_info_morbi_15() {
        
        $query=$this->db
        ->select("id,descripcion, unidad_informativa,anio, archivo, fecha_registro")
        ->from("informacion_estadistica")
         ->where("unidad_informativa","Morbilidad")
         ->where("anio","2015")
        ->get();
        return $query->result();
    }
    public function listar_info_morbi_14() {
        
        $query=$this->db
        ->select("id,descripcion, unidad_informativa,anio, archivo, fecha_registro")
        ->from("informacion_estadistica")
         ->where("unidad_informativa","Morbilidad")
         ->where("anio","2014")
        ->get();
        return $query->result();
    }
    public function listar_info_morbi_13() {
        
        $query=$this->db
        ->select("id,descripcion, unidad_informativa,anio, archivo, fecha_registro")
        ->from("informacion_estadistica")
         ->where("unidad_informativa","Morbilidad")
         ->where("anio","2013")
        ->get();
        return $query->result();
    }

    /** listado de Mortalidad **/

    public function listar_info_morta_17() {
        
        $query=$this->db
        ->select("id,descripcion, unidad_informativa,anio, archivo, fecha_registro")
        ->from("informacion_estadistica")
         ->where("unidad_informativa","Mortalidad")
         ->where("anio","2017")
        ->get();
        return $query->result();
    }
    public function listar_info_morta_16() {
        
        $query=$this->db
        ->select("id,descripcion, unidad_informativa,anio, archivo, fecha_registro")
        ->from("informacion_estadistica")
         ->where("unidad_informativa","Mortalidad")
         ->where("anio","2016")
        ->get();
        return $query->result();
    }

    public function listar_info_morta_15() {
        
        $query=$this->db
        ->select("id,descripcion, unidad_informativa,anio, archivo, fecha_registro")
        ->from("informacion_estadistica")
         ->where("unidad_informativa","Mortalidad")
         ->where("anio","2015")
        ->get();
        return $query->result();
    }
    public function listar_info_morta_14() {
        
        $query=$this->db
        ->select("id,descripcion, unidad_informativa,anio, archivo, fecha_registro")
        ->from("informacion_estadistica")
         ->where("unidad_informativa","Mortalidad")
         ->where("anio","2014")
        ->get();
        return $query->result();
    }
    public function listar_info_morta_13() {
        
        $query=$this->db
        ->select("id,descripcion, unidad_informativa,anio, archivo, fecha_registro")
        ->from("informacion_estadistica")
         ->where("unidad_informativa","Mortalidad")
         ->where("anio","2013")
        ->get();
        return $query->result();
    }


    /** listado de atc y atn **/

public function listar_info_atcatn_18() {
        
        $query=$this->db
        ->select("id,descripcion, unidad_informativa,anio, archivo, fecha_registro")
        ->from("informacion_estadistica")
         ->where("unidad_informativa","Atendidos y Atenciones")
         ->where("anio","2018")
        ->get();
        return $query->result();
    }
    public function listar_info_atcatn_17() {
        
        $query=$this->db
        ->select("id,descripcion, unidad_informativa,anio, archivo, fecha_registro")
        ->from("informacion_estadistica")
         ->where("unidad_informativa","Atendidos y Atenciones")
         ->where("anio","2017")
        ->get();
        return $query->result();
    }
    public function listar_info_atcatn_16() {
        
        $query=$this->db
        ->select("id,descripcion, unidad_informativa,anio, archivo, fecha_registro")
        ->from("informacion_estadistica")
         ->where("unidad_informativa","Atendidos y Atenciones")
         ->where("anio","2016")
        ->get();
        return $query->result();
    }

    public function listar_info_atcatn_15() {
        
        $query=$this->db
        ->select("id,descripcion, unidad_informativa,anio, archivo, fecha_registro")
        ->from("informacion_estadistica")
         ->where("unidad_informativa","Atendidos y Atenciones")
         ->where("anio","2015")
        ->get();
        return $query->result();
    }
    public function listar_info_atcatn_14() {
        
        $query=$this->db
        ->select("id,descripcion, unidad_informativa,anio, archivo, fecha_registro")
        ->from("informacion_estadistica")
         ->where("unidad_informativa","Atendidos y Atenciones")
         ->where("anio","2014")
        ->get();
        return $query->result();
    }
    public function listar_info_atcatn_13() {
        
        $query=$this->db
        ->select("id,descripcion, unidad_informativa,anio, archivo, fecha_registro")
        ->from("informacion_estadistica")
         ->where("unidad_informativa","Atendidos y Atenciones")
         ->where("anio","2013")
        ->get();
        return $query->result();
    }

    /** listado de Atendidos y atendidos **/

     public function listar_info_pobla_17() {
        
        $query=$this->db
        ->select("id,descripcion, unidad_informativa,anio, archivo, fecha_registro")
        ->from("informacion_estadistica")
         ->where("unidad_informativa","Poblacion")
         ->where("anio","2017")
        ->get();
        return $query->result();
    }
    public function listar_info_pobla_16() {
        
        $query=$this->db
        ->select("id,descripcion, unidad_informativa,anio, archivo, fecha_registro")
        ->from("informacion_estadistica")
         ->where("unidad_informativa","Poblacion")
         ->where("anio","2016")
        ->get();
        return $query->result();
    }

    public function listar_info_pobla_15() {
        
        $query=$this->db
        ->select("id,descripcion, unidad_informativa,anio, archivo, fecha_registro")
        ->from("informacion_estadistica")
         ->where("unidad_informativa","Poblacion")
         ->where("anio","2015")
        ->get();
        return $query->result();
    }
    public function listar_info_pobla_14() {
        
        $query=$this->db
        ->select("id,descripcion, unidad_informativa,anio, archivo, fecha_registro")
        ->from("informacion_estadistica")
         ->where("unidad_informativa","Poblacion")
         ->where("anio","2014")
        ->get();
        return $query->result();
    }
    public function listar_info_pobla_13() {
        
        $query=$this->db
        ->select("id,descripcion, unidad_informativa,anio, archivo, fecha_registro")
        ->from("informacion_estadistica")
         ->where("unidad_informativa","Poblacion")
         ->where("anio","2013")
        ->get();
        return $query->result();
    }

}