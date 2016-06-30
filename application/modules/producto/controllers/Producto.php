<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends MX_Controller {

	private $crud;

	public $autoload = array(
        'modules'    => array('template')
    );

	public function __construct()
	{
		parent::__construct();

		$this->load->library('grocery_crud');

		$this->crud = new grocery_CRUD();

		$this->crud->set_theme('datatables');
		$this->crud->unset_print();
		$this->crud->unset_export();
		$this->crud->unset_jquery();
	}

	public function index()
	{
		return $this->gestion_productos();
	}

	public function gestion_productos()
	{
		$this->crud->set_crud_url_path(site_url('admin/producto/gestion_productos'));
		$this->crud->set_table('producto');
		$this->crud->set_subject('Productos');

		$this->crud->set_primary_key('id','categoria');
		$this->crud->set_relation('categoria','categoria','nombre');

		$this->crud->change_field_type('estado', 'true_false', array('Inactivo','Activo'));

		$output = $this->crud->render();

		return $this->template->load_view('productos', $output);
	}

	public function gestion_categorias()
	{
		$this->crud->set_crud_url_path(site_url('admin/producto/gestion_categorias'));
		$this->crud->set_table('categoria');
		$this->crud->set_subject('Categorias');

		$this->crud->set_primary_key('id','categoria');
		$this->crud->set_relation('padre','categoria','nombre');

		$this->crud->change_field_type('estado', 'true_false', array('Inactivo','Activo'));

		$output = $this->crud->render();

		return $this->template->load_view('categorias', $output);
	}
}
