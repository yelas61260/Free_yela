<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Newcontroller extends CI_Controller
{
	public function index(){
		$this->load->model('datos');
		$data = $this->datos->getUsuario();
		header('Content-Type: application/json');
		echo json_encode($data);
	}

	public function bienvenida(){
		print_r('si cambia');
	}
}