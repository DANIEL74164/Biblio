<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        
        $this->load->library(['form_validation','session']);
        $this->load->database();
        $this->load->model('LoginModel', 'admin');
    }
    public function index() {
        $logged_in = $this->session->userdata('logged_in');
        if($logged_in){
            redirect(base_url().'welcome');
        }
        $this->load->view('login');
        
    }
    public function doLogin() {
        $usuario = $this->input->post('usuario');
        $contraseña = $this->input->post('password');
        $admin = $this->input->post('checkbox');
        $check_login = $this->admin->checkLogin($usuario, $contraseña);
        $esadmin_login = $this->admin->esadminLogin($admin);
        if ($check_login&&$admin) {
            $this->session->set_userdata('logged_in', true);
            redirect(base_url().'pages/dashboard');
            
        } elseif($check_login) {
             $this->session->set_userdata('logged_in', true);
            redirect(base_url().'pages/usuario');      
        }
        else{
            $this->session->set_userdata('logged_in', false);
            $this->session->set_flashdata('msg', 'Usuario / Contraseña incorrecta');
            redirect(base_url().'pages/index');      
        }
        
    }
    public function logout() {
        $this->session->unset_userdata('logged_in');
        redirect(base_url().'login');
    }

}