<?php
class Simulation extends CI_Controller{
    public function index(){
        $get = $this->input->get('q');

        if(isset($get['q'])){
            switch(intval($get['q'])){
                case '1':
                    $this->load->view('JavascriptVisualRelease/search');
                    break;
                default :
                    echo "Invalid request";
                    break;
            }
        }else{
            $this->load->view('JavascriptVisualRelease/search');
        }
    }
}