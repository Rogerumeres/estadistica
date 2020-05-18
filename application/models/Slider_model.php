<?php
class Slider_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
     
    public function Insertar_slider($titulo, $descripcion, $nom_archivo){
    
    $data = array(
    'titulo' => $titulo,
    'descripcion' => $descripcion,
    'imagen' => $nom_archivo,
    'fecha_subida'=>date('Y-m-d h-m-s'),
        );
    
    return $this->db->insert('slider', $data);
}

public function listar_sliders() {
        
        $query=$this->db
        ->select("titulo,imagen,descripcion")
        ->from("slider")
        ->get();
        return $query->result();
    }

}