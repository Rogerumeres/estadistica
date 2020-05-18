<?php
class Registro_Model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
     
    public function Insertar_usuario($nom, $email, $pass,$descripcion,$pais){
    
    $data = array(
    'name' => $nom,
    'email' => $email,
    'password' => sha1($pass),
    'descripcion' => $descripcion,
    'pais' => $pais,
    );
    
    return $this->db->insert('users', $data);
}

}