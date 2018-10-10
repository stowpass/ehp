<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OrcamentoController extends CI_Controller {


	public function index()
	{
		$this->load->view('layout/topo');
		$this->load->view('orcamentos/listagem');
		$this->load->view('layout/rodape');

	}
	
	
	public function novo()
	{
		$this->load->view('layout/topo');
		$this->load->view('orcamentos/formulario');
		$this->load->view('layout/rodape');

    }
    
}