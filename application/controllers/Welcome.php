<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index/welcome
	 *	- or -
	 * 		http://example.com/index/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function id_user($user) {
        $query = $this->db->query("SELECT id FROM usuarios WHERE user='$user'")->result_array();

        if (empty($query)) {
            echo "";
        } else {
            $id =$query[0]['id'];
        }

        return $id;
	}

	public function name_user($user) {
        $query = $this->db->query("SELECT name FROM usuarios WHERE user='$user'")->result_array();

        if (empty($query)) {
            echo "";
        } else {
            $id =$query[0]['name'];
        }

        return $id;
	}

	public function recebeDados() {
		$user_post  = $this -> input -> post('usuario');
		$senha_post = md5($this -> input -> post('senha'));

		$this->load->model('user_model');
		$res=$this->user_model->validaDado($user_post, $senha_post);

		if ($res == True) {
			#echo "deu boa";
			$newdata = array(
		        'username'  => $user_post,
		        'id_user'	=> $this->id_user($user_post),
		        'name'		=> $this->name_user($user_post),
		        'logged_in' => TRUE
			);

			$this->session->set_userdata($newdata);

			$this->index();
		} else {
			echo "deu ruim";
		}
	}

	public function tagsCadastradas() {
		$tag = $this->input->post('tag');

		if ($tag[0] != "#") {
			$tag = '#'.substr($tag, 0, strlen($tag));
		}

		$this->load->model('tag_cadastro');
		$this->tag_cadastro->adicionaTag($tag);

		$this->index();
	}


	public function index() {
		$this->load->model('lista_mentions');
		$res = $this->lista_mentions->listagem_mentions();

		$this->load->model('tag_cadastro');
		$teste = $this->tag_cadastro->getTag();

		$conteudo = array('nomes'=>$res, 'tags'=>$teste );

		$this->load->view('head');
		$this->load->view('header');
		$this->load->view('mentions', $conteudo);
		$this->load->view('footer');
	}

	public function dashboard() {
		$this->index();
	}

	public function login() {
		$this->load->model('user_model');
		$teste = $this->user_model->getData();

		$this->load->view('head');
		$this->load->view('login');
	}

	public function cadastro() {
		$this->load->view('head');
		$this->load->view('header');
		$this->load->view('cadastroTag');
		$this->load->view('footer');
	}

	public function listaTag() {
		$this->load->model('tag_cadastro');
		$teste = $this->tag_cadastro->getTag();

		$conteudo = array('tags' => $teste );

		$this->load->view('head');
		$this->load->view('header');
		$this->load->view('listaTag', $conteudo);
		$this->load->view('footer');
	}

	public function financas() {
		$this->load->view('head');
		$this->load->view('header');
		$this->load->view('financas');
		$this->load->view('footer');
	}

	public function logout_session() {
		unset(
        	$_SESSION['username'],
        	$_SESSION['id_user'],
        	$_SESSION['name'],
        	$_SESSION['logged_in']
		);

		$this->login();
	}
}
