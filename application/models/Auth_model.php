<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth_model extends CI_Model{

    private function set_session($udata){
        $this->session->set_userdata('isLogged', '1');
        $this->session->set_userdata($udata);
    }

    private function get_session(){
        return $this->session->userdata();
    }

    public function login($userdata){
        $udata = $this->db->where(array("email" => $userdata['email']))->get('users')->row_array();
        if(password_verify($userdata['password'], $udata['password'])){
            unset($udata['password']);
            $this->set_session($udata);
            return true;
        }
        return false;
    }

    public function register($userdata){
        $udata = array(
            'first_name' => $userdata['first_name'],
            'last_name' => $userdata['last_name'],
            'email' => $userdata['email'],
            'password' => password_hash($userdata['password'], PASSWORD_BCRYPT),
            'created_at' => date('Y-m-d H:i:s')
        );
        $this->db->insert('users', $udata);
        return true;
    }

    public function logout(){
        $this->session->sess_destroy();
        $this->isAuthenticated = 0;
    }

    public function isLogged(){
        $session = $this->get_session();
        if(isset($session['isLogged'])){
            return true;
        }
        return false;
    }

    public function get_userdata(){
        if($this->isLogged()){
            return $this->get_session();
        }
        return null;
    }

    public function change_password($old_password, $new_password){
        $userdata = $this->get_userdata();
        $udata = $this->db->where(array("email" => $userdata['email']))->get('users')->row_array();
        if(password_verify($old_password, $udata['password'])){
            $this->db->set('password', password_hash($new_password,PASSWORD_BCRYPT))->where('email', $userdata['email'])->update('users');
            return true;
        }
        return false;
    }
}