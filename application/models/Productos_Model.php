<?php
class Productos_Model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
     public function Mostrar_Producto(){

     	$query=$this->db
     	->select("id,marca,pantalla,ram,procesador,disco_duro,precio")
     	->from("productos")
     	->get();
     	return $query->result();
     }
    public function Insertar_usuario($nom, $email, $pass,$descripcion,$pais){
    
    $data = array(
    'name' => $nom,
    'email' => $email,
    'password' => $pass,
    'descripcion' => $descripcion,
    'pais' => $pais,
    );
    
    return $this->db->insert('users', $data);
    }


    public function getproductoId($id)
    {
        $where=array("id"=>$id);
        $query=$this->db
         ->select("id,marca,pantalla,ram,procesador,disco_duro,precio")
        ->from("productos")
        ->where($where)
        ->get();
        return $query->row();
    }

    public function modificar_producto($datos=array(),$id)
    {
        $this->db->where('id', $id);
        $this->db->update('productos', $datos); 
            return true;       
    }

    public function eliminar($id)
    {
        $this->db->delete('productos', array('id' => $id));
        return true; 
    }

}