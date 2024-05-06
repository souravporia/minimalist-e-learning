<?php
class Qna_model extends CI_Model{

    public function fetch_questions($data = array()){
        $result = $this->db->where($data)->order_by('id','RANDOM')->limit(10)->get('questions')->result_array();
        return $result;
    }

    public function fetch_question($id){
        $result = $this->db->where('id',intval($id))->get('questions')->row_array();
        return $result;
    }

    public function insert_question($data){
        $d = array(
            'user_id' => intval($data['user_id']),
            'user_name' => $data['user_name'],
            'body' => $data['body'],
            'created_at' => date('Y-m-d H:i:s')
        );
        $this->db->insert('questions', $d);
    }

    public function fetch_answers($data){
        $result = $this->db->where($data)->get('answers')->result_array();
        return $result;
    }

    public function insert_answer($data){
        $d = array(
            'user_id' => intval($data['user_id']),
            'user_name' => $data['user_name'],
            'body' => $data['body'],
            'question_id' => intval($data['question_id']),
            'created_at' => date('Y-m-d H:i:s')
        );
        $this->db->insert('answers', $d);
    }

    public function select_questions($data){
        return $this->db->where_in('id', $data)->get('questions')->result_array();
    }

    public function update_question_status($w, $data){
        $this->db->where($w)->update("questions", $data);
    }

    public function delete_answer($w){
        $this->db->where($w)->delete('answers');
    }

    public function delete_question($user_id, $id){
        $question = $this->fetch_question(intval($id));
        if($question['user_id'] == intval($user_id)){
            $this->delete_answer(array('question_id' => intval($id)));
            $this->db->where('id',intval($id))->delete('questions');
        }
    }

}