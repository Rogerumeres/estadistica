<?php
class Estrategia_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
     
public function insertar_estrategia($descripcion, $estrategia, $nom_archivo, $fecha)
{
    
    $data = array(
        'des_archivo' => $descripcion,
    'estrategia' => $estrategia,
    'nom_archivo' => $nom_archivo,
    'fecha_subida'=>$fecha,
        );
    
    return $this->db->insert('estrategia', $data);
}

public function listar_estrategias() {
        
        $query=$this->db
        ->select("id,des_archivo, fecha_subida,estrategia, nom_archivo")
        ->from("estrategia")
        ->order_by("fecha_subida","desc")
        ->get();
        return $query->result();
    }

public function listar_estrategias1() {
        
        $query=$this->db
        ->select("des_archivo,fecha_subida,nom_archivo")
        ->from("estrategia")
        ->where("estrategia","articulado")
        ->get();
        return $query->result();
    }
public function listar_estrategias2() {
        
        $query=$this->db
        ->select("des_archivo,fecha_subida,nom_archivo")
        ->from("estrategia")
        ->where("estrategia","materno")
        ->get();
        return $query->result();
    }

public function listar_tras() {
        
        $query=$this->db
        ->select("des_archivo,fecha_subida,nom_archivo")
        ->from("estrategia")
        ->where("estrategia","transmisibles")
        ->get();
        return $query->result();
    }

public function listar_no_tras() {
        
        $query=$this->db
        ->select("des_archivo,fecha_subida,nom_archivo")
        ->from("estrategia")
        ->where("estrategia","ntransmisibles")
        ->get();
        return $query->result();
    }
    
public function listar_pro_salud() {
        
        $query=$this->db
        ->select("des_archivo,fecha_subida,nom_archivo")
        ->from("estrategia")
        ->where("estrategia","promsa")
        ->get();
        return $query->result();
    }
    
public function listar_sien() {
        
        $query=$this->db
        ->select("des_archivo,fecha_subida,nom_archivo")
        ->from("estrategia")
        ->where("estrategia","sien")
        ->get();
        return $query->result();
    }
public function listar_padron() {
        
        $query=$this->db
        ->select("des_archivo,fecha_subida,nom_archivo")
        ->from("estrategia")
        ->where("estrategia","padron")
        ->get();
        return $query->result();
    }

public function listar($id)
    {
        $this->db->select("nom_archivo");
        $this->db->where("id",$id);
        $this->db->from("estrategia");

        $resultado=$this->db->get();
        return $resultado->row();
    }

public function eliminar($id)
    {
        $this->db->delete('estrategia', array('id' => $id));
        return true; 
    }

public function mostrar_estrategia_id($id)
    {
        $where=array("id"=>$id);
        $query=$this->db
         ->select("id,des_archivo,estrategia,nom_archivo,fecha_subida")
        ->from("estrategia")
        ->where($where)
        ->get();
        return $query->row();
    }

public function modificar_estrategia($datos=array(),$id)
    {
        $this->db->where('id', $id);
        $this->db->update('estrategia', $datos); 
            return true;       
    }

public function modificar_fecha($datos=array())
    {
            $this->db->update('estrategia', $datos); 
            return true; 
    }

}