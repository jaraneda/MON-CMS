<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends MX_Controller {

	//public $autoload = array(
    //    'modules'    => array('template')
    //);

	public function cargar_pagina($pagina = 'inicio')
	{
		$data = array();

		$query = $this->db->get_where('pagina', array('nombre' => $pagina));

		if( $query->num_rows() == 0 )
		{
			return show_404();
		}

		foreach ($query->result() as $row)
		{
        	$data['contenido'] = $row->contenido;
		}


		return $this->load->view('paginas', $data);
	}
}
