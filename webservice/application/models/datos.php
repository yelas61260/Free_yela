<?php
class datos extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function getUsuario(){
		$query = $this->db->get('mdl_user');
		return $query->row();
	}
}