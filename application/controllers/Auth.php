<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index(){
        $post = $this->input->post();
		if(isset($post['code'])){
            switch($post["code"]){
                case '1':
                    // code 1 Register
                    // Form Vaildation
                    $this->form_validation->set_rules('first_name', 'First name', 'required|min_length[3]|max_length[20]');
                    $this->form_validation->set_rules('last_name', 'Last name', 'required|min_length[3]|max_length[20]');
                    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
                    $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[20]');
                    $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
                    // End
                    if($this->form_validation->run() == false){
                        redirect("auth/register");
                    }else{
                        unset($post["confirm_password"]);
                        $registration_status = $this->Auth_model->register($post);
                        if($registration_status){
                            $this->session->set_flashdata('message', 'Registration SuccessFull Please Login');
                            redirect('auth/login');
                        }else{
                            $this->session->set_flashdata('message', 'Something went wrong');
                            redirect('auth/register');
                        }
                    }
                    break;
                case '2':
                    //code 2 Login
                    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
                    $this->form_validation->set_rules('password', 'Password', 'required|min_length[1]|max_length[20]');
                    
                    if($this->form_validation->run() == false){
                        redirect("auth/login");
                    }else{
                        unset($post["confirm_password"]);
                        $loginStatus = $this->Auth_model->login($post);
                        if($loginStatus){
                            redirect('dashboard');
                        }else{
                            $this->session->set_flashdata('message', "Enter correct credential");
                            redirect('auth/login');
                        }
                    }
                    break;
                case '3':
                    //code 3 Change Password
                    $this->form_validation->set_rules('current_password', 'Password', 'required|min_length[1]|max_length[20]');
                    $this->form_validation->set_rules('new_password', 'Password', 'required|min_length[1]|max_length[20]');
                    $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[new_password]');
                    if($this->form_validation->run() == false){
                        redirect("dashboard");
                    }else{
                        unset($post["confirm_password"]);
                        $pwdStatus = $this->Auth_model->change_password($post['current_password'], $post['new_password']);
                        if($pwdStatus){
                            redirect('auth/logout');
                        }else{
                            $this->session->set_flashdata('message', "Enter correct password");
                            redirect('dashboard');
                        }
                    }
                    break;
                default :
                    exit('Invalid Request');
                break;
            }
        }else{
            exit('Invalid Request');
        }
	}

    public function register(){
        if($this->Auth_model->isLogged()){
            redirect('dashboard');
        }else{
            $message = $this->session->flashdata('message');

            $data = array();
            if(isset($message)){
                $data = array('message' => $message);
            }
            $this->load->view('auth/register', $data);
        }
    }

    public function login(){
        if($this->Auth_model->isLogged()){
            redirect('dashboard');
        }else{
            $message = $this->session->flashdata('message');

            $data = array();
            if(isset($message)){
                $data = array('message' => $message);
            }

            $this->load->view('auth/login', $data);
        }
    }

    public function logout(){
        $this->Auth_model->logout();
        $this->session->set_flashdata('message', 'Successfully logged out');
        redirect('auth/login');
    }
}
