<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pocetna extends MY_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('model_logIn');
    }
    
    public function index() {if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
   }
   $data = array();
        $this->load_view('pages/pocetna',$data);
    }
    
    public function login() {
        $data = array();
        $this->load->library('form_validation');

        $this->form_validation->set_rules('loginFormEmail', 'Email', 'trim|required');
        $this->form_validation->set_rules('loginFormPassword', 'Password', 'trim|required|callback_check_database');

        if($this->form_validation->run() == FALSE)
        {
            $this->load_view($data);
            echo '!';
        }
        else
        {
          redirect('pocetna', 'refresh');
        }
    }
    
     function check_database($password)
    {
      $email = $this->input->post('loginFormEmail');

      $result = $this->model_logIn->login($email, $password);

      if($result)
      {
        $sess_array = array();
        foreach($result as $row)
        {
          $sess_array = array(
            'id' => $row->id,
            'username' => $row->username
          );
          $this->session->set_userdata('logged_in', $sess_array);
        }
        return TRUE;
      }
      else
      {
        $this->form_validation->set_message('check_database', 'Invalid username or password');
        return false;
      }
    }
}