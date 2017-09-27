<?php
class User_model extends CI_Model {

// todas as funções
    public function __construct() {
        parent::__construct();
        // Your own constructor code

		//$teste = "oi";
        //var_dump($teste);
        //$this->load->config("database");
        $this->load->database();

        //$this->db->connect();
    }

    public function validaDado($user, $senha) {
    	$query = $this->db->query("SELECT password FROM usuarios WHERE user='$user'")->result_array();
    	//$query = $this->db->get_where('user',$user);

        if (empty($query)) {
            return False;
        } else {
            $pass_db = $query[0]['password'];
        }

    	if($pass_db == $senha){
    		return True;
    	} else {
    		return False;
    	}

    	//var_dump($query);
    }

    public function getData () {
		//$query = $this->db->query("SELECT * FROM usuarios WHERE user=");

		//var_dump($query->result_array());

    	//return array('usuario1', 'usuario2');
    }
}