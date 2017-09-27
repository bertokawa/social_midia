<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function recebeDados() {
		$user_post  = $this -> input -> post('usuario');
		$senha_post = md5($this -> input -> post('senha'));

		$this->load->model('user_model');
		$res=$this->user_model->validaDado($user_post, $senha_post);

		if ($res == True) {
			echo "deu boa";
			$this->index();
		} else {
			echo "deu ruim";
		}
	}

	public function index()
	{
		$this->load->view('header.php');
		$this->load->view('dashboard.php');
		$this->load->view('footer.php');
	}

	public function dashboard()
	{
		$this->load->view('header.php');
		$this->load->view('dashboard.php');
		$this->load->view('footer.php');
	}

	public function login()
	{
		//echo 'oi';
		$this->load->model('user_model');
		$teste = $this->user_model->getData();
		//var_dump($teste);
		$this->load->view('login.php');

		//$this->load->view('login.php', array('usuario' => $teste ));
	}

	public function cadastro()
	{
		$this->load->view('header.php');
		$this->load->view('cadastroTag.php');
		$this->load->view('footer.php');
	}

	public function listaTag()
	{
		$this->load->view('header.php');
		$this->load->view('listaTag.php');
		$this->load->view('footer.php');
	}

	public function financas()
	{
		$this->load->view('header.php');
		$this->load->view('financas.php');
		$this->load->view('footer.php');
	}
}
