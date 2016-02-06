<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function __construct() {
    parent::__construct();
}

function load_view($view, $vars = array()) {
    $this->load->view('template/header', $vars);
}