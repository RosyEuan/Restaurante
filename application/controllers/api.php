<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class api extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database(); 
    }

    public function getData() {
       
        $query = $this->db->get('perfiles'); // Tabla
        $data = $query->result();

        header('Content-Type: application/json');
        echo json_encode($data);
    }
}
