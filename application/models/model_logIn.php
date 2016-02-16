<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_logIn extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function login($email, $password) {
        $this -> db -> select('id, username, password, email');
        $this -> db -> from('korisnici');
        $this -> db -> where('email', $email);
        $this -> db -> where('password', $password);
        $this -> db -> limit(1);
        
        $query = $this -> db -> get();

        if($query -> num_rows() == 1)
        {
          return $query->result();
        }
        else
        {
          return false;
        }
    }
}