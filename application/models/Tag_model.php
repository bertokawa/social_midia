<?php
class tag_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function esta_vazia () {
        $query = $this->db->query("SELECT * FROM search_tags LIMIT 1");
        return $query->num_rows();
    }

    public function adicionaTag($tagBD) {
        $tags = $this->getTag();
        $flag = true;

        foreach ($tags as $key => $value) {
            if ($value['term'] == $tagBD) {
                $flag = false;
            }
        }
        
        if ($flag == true) {
            $id = $this->session->userdata('id_user');
            $this->db->query("INSERT INTO search_tags (term,ID_User) VALUES ('$tagBD','$id')");
        }
        
    }

    public function getTag () {
        $user = $this->session->userdata('username');
        $id = $this->session->userdata('id_user');
        $query = $this->db->query("SELECT term FROM search_tags WHERE ID_User='$id'")->result_array();

        return $query;
    }
}