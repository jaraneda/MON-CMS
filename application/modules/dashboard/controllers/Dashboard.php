<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {

	public $autoload = array(
        'modules'    => array('template')
    );

	public function index()
	{
		return $this->template->load_view('dashboard');
	}
}
