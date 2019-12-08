<?php
class Register extends CI_Controller {
      public function __construct() {
        parent::__construct(); 
        $this->load->helper('url');
        $this->load->library(['form_validation', 'session']);
        $this->load->database();
        $this->load->model('RegisterModel', 'register');
    }
    public function index() {
        
            redirect(base_url() . 'pages/registration');
        
    }
    public function doRegister() {
        
            $codigo = $this->input->post('codigo');
            $nombres = $this->input->post('nombres');
            $apellidos = $this->input->post('apellidos');
            $direccion = $this->input->post('direccion');
            $usuario = $this->input->post('usuario');
            $contraseña = $this->input->post('password');
            $email = $this->input->post('email');
            $telefono = $this->input->post('telefono');
            
            $data = [
                'usua_login' => $usuario, 'usua_password' => $contraseña, 'usua_codigo' => $codigo, 'usua_nombres' => $nombres, 'usua_apellidos' => $apellidos, 'usua_direccion' => $direccion, 'usua_email' => $email, 'usua_telefono' => $telefono];
            
            $insert_data = $this->register->add_user($data);
            if ($insert_data) {
                $this->session->set_flashdata('msg', 'Registrado correctamente');
                redirect(base_url() . 'login');
            }
        //}
    }

}