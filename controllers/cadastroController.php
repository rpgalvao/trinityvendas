<?php 

class cadastroController extends Controller {

	public function index() {
		$dados = array(
			"sucesso" => "",
			"erro" => ""
		);
		
		if(isset($_POST['acao'])){
			$nome = addslashes($_POST['nome']);
			$email = addslashes($_POST['email']);
			$cidade = addslashes($_POST['cidade']);
			$estado = addslashes($_POST['estado']);
			$inst = addslashes($_POST['instituicao']);
			$telefone = addslashes($_POST['telefone']);
			$interesse = addslashes($_POST['interesse']);
			$obs = addslashes($_POST['obs']);
			$user = $_SESSION['login'];

			$cl = new Clientes();
			if($cl->cadastrarCliente($nome, $email, $cidade, $estado, $inst, $telefone, $interesse, $obs, $user)){
				$dados['sucesso'] = "Cliente cadastrado com sucesso!";
				header("Location: ".BASE_URL);
			}else{
				$dados['erro'] = "Não foi possível cadastrar o cliente";
			}
		}
		$this->loadTemplate("cadastro", $dados);
	}

	public function editar($id){
		$dados = array();
		$cl = new Clientes();
		$dados['info'] = $cl->getClienteById($id);
		if (isset($_POST['acao'])) {
			$nome = addslashes($_POST['nome']);
			$email = addslashes($_POST['email']);
			$cidade = addslashes($_POST['cidade']);
			$estado = addslashes($_POST['estado']);
			$inst = addslashes($_POST['instituicao']);
			$telefone = addslashes($_POST['telefone']);
			$interesse = addslashes($_POST['interesse']);
			$obs = addslashes($_POST['obs']);

			$cl = new Clientes();
			$cl->editarCliente($nome, $email, $cidade, $estado, $inst, $telefone, $interesse, $obs, $id);
			$dados['sucesso'] = "Atualização realizada com sucesso";
		}
		$dados['info'] = $cl->getClienteById($id);
		$this->loadTemplate("editar", $dados);
	}
}
?>