<?php if (! defined('BASEPATH')) exit('No direct script access allowed'); // linha de proteção ao controller
 
class Login extends CI_Controller{ // criação da classe Login
 
    function authenticate(){

        $this->load->model('users_model');// chama o modelo usuarios_model
        $user = $this->input->post('user');// pega via post username do form
        $user = $this->db->escape($user);
        $password = $this->input->post('password'); // pega via post a senha do form
        $password = $this->db->escape($password);

        $flag = $this->users_model->verify_password($user,$password); 
        
        if($flag){
            // echo 'conectado';
            $this->session->set_userdata('logged_user', $user);
            $dados = array('msg' => 'Logado com sucesso!', 'usuario'=>$user,'password'=> $password);
        }else{
            // echo "não conectado";
            $dados = array('msg' => 'Não foi possível fazer o Login!','usuario'=>$user,'password'=> $password);
        }
        //$this->load->view("login/authenticate", $dados);
        //$this->load->view('login_authenticate', $dados);
        $this->load->view('login_authenticate',$dados);
    }
}flash juke