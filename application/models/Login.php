<?php
class Login extends CI_Model {


    public function getLogin($usuario,$password){

        $sql = "SELECT nombre, apellido,usuario 
      FROM usuarios WHERE usuario = '$usuario' 
    AND password = '$password' AND estado = 1 LIMIT 0,1";

        $query  = $this->db->query($sql);
        $result = $query->result();
        return $result;


    }




}