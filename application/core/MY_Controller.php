<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    function load_view() {
        $this->load->view('template/header');
        $this->load->view('template/footer');
    }
}