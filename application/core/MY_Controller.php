<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    function load_view($view, $vars = array()) {
        $this->load->view('template/header', $vars);
        $this->load->view($view,$vars);
        $this->load->view('template/footer');
    }
}