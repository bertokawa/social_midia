<?php
class Mention_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function listagem_mentions() {
        $user = $this->session->userdata('username');
        $user_id = $this->session->userdata('id_user');
        $query = $this->db->query("SELECT * FROM tweets WHERE user_id=$user_id")->result_array();

        return $query;
    }
}