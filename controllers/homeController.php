<?php

class homeController extends Controller {

	public function __construct() {
		$u = new Usuarios();
		$u->verificarLogin();
	}

	public function index() {
		$dados = array();
		$cl = new Clientes();
		$dados['clientes'] = $cl->getClientesUser($_SESSION['login']);
		$this->loadTemplate('home', $dados);
	}

	public function cliente($id){
		$dados = array();
		$cl = new Clientes();
		$dados['info_cliente'] = $cl->getClienteById($id);
		$this->loadTemplate('cliente', $dados);
	}

	public function excluir($id){
		$dados = array();
		$cl = new Clientes();
		$dados['form'] = $cl->getClienteById($id);
		if(isset($_POST['del'])){
			$cl->excluir($id);
			header("Location: ".BASE_URL);
		}

		$this->loadTemplate('excluir', $dados);
	}
}