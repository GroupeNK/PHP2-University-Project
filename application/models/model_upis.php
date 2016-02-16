<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_upis extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function insert_zapis($niz_podataka_za_bazu) {
        $sql = $this->db->insert_string('korisnici', $niz_podataka_za_bazu);
        $query = $this->db->query($sql);
        
        if($query === true) {
            return true;
        }
        else {
            return false;
        }
    }
}