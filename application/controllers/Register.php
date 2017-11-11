<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

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

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

	public function registro () {
		$this->load->view('register');
	}

	public function criar_user() {

		$user_post  = $this -> input -> post('name');
		$email_post  = $this -> input -> post('email');
		$senha_post = md5($this -> input -> post('password'));

		$this->load->model('user_model');
		$this->user_model->adicionaUser($user_post, $email_post, $senha_post);

		$this->load->view('head');
		$this->load->view('login');
	}
}
