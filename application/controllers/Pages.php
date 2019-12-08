<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 */
class Pages extends CI_Controller {
 public function __construct() {
        parent::__construct(); 
        $this->load->helper('url');
        $this->load->library(['form_validation', 'session']);
        $this->load->database();
        $this->load->model('RegisterModel', 'register');
    }

  public function index(){
    $this->load->view('login');
  }

  public function dashboard(){
    $this->template->display('pages/dashboard');
  }

  public function table(){
    $this->template->display('pages/table');
  }

  public function registration(){
    $this->load->view('pages/registration');
  }
  public function verejemplares(){
    $this->template->display('verejemplar');
  }
  public function ejemplares(){
    $this->template->display('pages/ejemplares');
  }
  public function verautores(){
    $this->template->display('verautores');
  }
  public function autores(){
    $this->template->display('pages/autores');
  }
   public function usuario(){
    $this->template->display('pages/usuario');
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
                redirect(base_url() . 'index');
            }
        //}
    }

}

