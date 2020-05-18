<?php
class Productos_Model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
     public function Mostrar_Producto(){

     	$query=$this->db
     	->select("id,marca,pantalla,ram,procesador,disco_duro")
     	->from("productos")
     	->get();
     	return $query->result();
     }
}