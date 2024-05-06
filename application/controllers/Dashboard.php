<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    private $userdata;
    public function __construct(){
        parent::__construct();
        if(!$this->Auth_model->isLogged()){
            $this->session->set_flashdata('message', 'You Must log in to Access this page');
            redirect('login');
        }else{
            $this->userdata = $this->Auth_model->get_userdata();
        }
    }
    
	public function index(){
        $data = array(
            "user_name" =>  $this->userdata['first_name']." ".$this->userdata['last_name']
        );
		$this->load->view('dashboard/dashboard', $data);
	}

    public function qna(){
        $this->load->model('Qna_model');
        $get = $this->input->get();
        $post = $this->input->post();
        if(isset($post['code'])){
            switch($post['code']){
                case '1' :
                // code 1 new question
                    $data = array(
                        'user_id' => $this->userdata['id'],
                        'body' => $post['body'],
                        'user_name' => $this->userdata['first_name']." ".$this->userdata['last_name']
                    );
                    $this->Qna_model->insert_question($data);
                    redirect('dashboard/qna');
                break;
                case '2' :
                // code 2 new reply
                    $data = array(
                        'user_id' => $this->userdata['id'],
                        'body' => $post['reply'],
                        'user_name' => $this->userdata['first_name']." ".$this->userdata['last_name'],
                        'question_id' => $get['q']
                    );
                    $this->Qna_model->insert_answer($data);
                    redirect('dashboard/qna?q='.$get['q']);
                break;
            }
        }
        if(isset($get['q'])){
            switch($get['q']){
                case "m" :
                    // My questions
                    $questions = $this->Qna_model->fetch_questions(array('user_id' => intval($this->userdata["id"])));
                    $data = array(
                        "questions" => $questions,
                        "user_name" => $this->userdata['first_name']." ".$this->userdata['last_name']
                    );
                    $this->load->view('dashboard/q_home', $data);
                    break;
                case "u" :
                    // My Answers
                    $q_array = array();
                    $ans = $this->Qna_model->fetch_answers(array('user_id' => $this->userdata['id']));
                    $in = 0;
                    if($ans != null){
                        foreach($ans as $a){
                            foreach($q_array as $b){
                                if($b == $a['question_id'])
                                    $in = 1;
                            }
                            if($in == 0)
                                array_push($q_array, $a['question_id']);
                            $in = 0;
                        }
                    
                        $questions = $this->Qna_model->select_questions($q_array);
                    }else{
                        $questions = null;
                    }

                    $data = array(
                        "questions" => $questions,
                        "user_name" => $this->userdata['first_name']." ".$this->userdata['last_name']
                    );
                    $this->load->view('dashboard/q_home', $data);
                    break;
                default :
                    $question = $this->Qna_model->fetch_question($get['q']);
                    if($question != null){
                        if(isset($get['s'])){
                            $this->Qna_model->update_question_status(array('id' => $get['q']),array('status' => $get['s']));
                            redirect('dashboard/qna?q='.$get['q']);
                        }

                        if(isset($get['d'])){
                            $this->Qna_model->delete_question($this->userdata['id'],$get['q']);
                            redirect('dashboard/qna');
                        }

                        $answers = $this->Qna_model->fetch_answers(array('question_id'=> intval($get['q'])));
                        $data = array(
                            'question' => $question,
                            'answers' => $answers,
                            'user_name' => $this->userdata['first_name']." ".$this->userdata['last_name'],
                            'user_id' => $this->userdata['id']
                        );
                        $this->load->view('dashboard/qna', $data);
                    }else{
                        show_error(404);
                    }
                break;
            }
        }else{
            // All Answers
            $questions = $this->Qna_model->fetch_questions();
            $data = array(
                "questions" => $questions,
                "user_name" => $this->userdata['first_name']." ".$this->userdata['last_name']
            );
            $this->load->view('dashboard/q_home', $data);
        }
    }


    public function library(){
        $data = array(
            "user_name" => $this->userdata['first_name']." ".$this->userdata['last_name']
        );
		$this->load->view('dashboard/library', $data);
    }

    public function videos(){
        $data = array(
            "user_name" => $this->userdata['first_name']." ".$this->userdata['last_name']
        );
		$this->load->view('dashboard/videos', $data);
    }

    public function lab(){
        $get = $this->input->get();
        $this->load->model('Lab_model');
        $q = 1;
        if(isset($get['q'])){
            $q = $get['q'];
        }
        $experiments = $this->Lab_model->fetch_experiments();

        $data = array(
            "user_name" => $this->userdata['first_name']." ".$this->userdata['last_name'],
            'experiments' => $experiments,
            'experiment_id' => intval($q)
        );
        $this->load->view('dashboard/v_lab', $data);
    }
}
