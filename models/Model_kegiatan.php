<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Model_kegiatan extends CI_Model {
    
    
    public function allKegiatan () {

        $query = $this->db->get('kegiatan');
        return $query->result();
        
    }
}