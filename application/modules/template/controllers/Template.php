<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends MX_Controller {

	public function load_view($fragment, $params = null)
	{
		$data['outlet'] = $this->load->view($this->router->class . '/' . $fragment, $params, true);
		return $this->load->view('outlet', $data);
	}

}
