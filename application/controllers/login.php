<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_login');
    }
    public function index()
    {
        $data['title'] = 'Login Page';
        $this->load->view('login', $data);
    }
    public function getlogin()
    {

        $user = $this->input->post('username');
        $pass = $this->input->post('password');
        $this->model_login->getlogin($user, $pass);
    }
}
