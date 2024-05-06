<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Credits extends CI_Controller{
    public function index(){
        $this->load->view('credits');
    }
}