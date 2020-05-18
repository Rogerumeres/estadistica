<?php
class Subir_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
     
    public function Insertar_archivo($titulo, $descripcion, $nom_archivo, $programa){
    
    $data = array(
    'titulo' => $titulo,
    'descripcion' => $descripcion,
    'nombre_archivo' => $nom_archivo,
    'fecha_subida'=>date('Y-m-d'),
    'programa' => $programa,
    );
    
    return $this->db->insert('archivos', $data);
}

public function listar_archivos() {
        
        $query=$this->db
        ->select("titulo,nombre_archivo,programa")
        ->from("archivos")
        ->get();
        return $query->result();
    }

}