<?php 

class loginController extends Controller {
	
	public function index() {
		$dados = array(
			"erro" => ""
		);
		$u = new Usuarios();
		if(isset($_COOKIE['lembrar'])){
			$email = $_COOKIE['email'];
			$senha = $_COOKIE['senha'];
			$login = $u->fazerLogin($email, $senha);
			if(is_array($login)) {
				$_SESSION['login'] = $login['id'];
				$_SESSION['nome'] = $login['nome'];
				$_SESSION['email'] = $login['email'];
				$_SESSION['adm'] = $login['adm'];
				header("Location: " . BASE_URL);
				die();
			}
		}
		if(isset($_POST['acao'])){
			$email = addslashes($_POST['email']);
			$senha = addslashes(md5($_POST['senha']));
			$login = $u->fazerLogin($email, $senha);
			if(is_array($login)) {
				$_SESSION['login'] = $login['id'];
				$_SESSION['nome'] = $login['nome'];
				$_SESSION['email'] = $login['email'];
				$_SESSION['adm'] = $login['adm'];
				if(isset($_POST['lembrar'])){
					setcookie('lembrar', true, time()+(60*60*168), '/');
					setcookie('email', $email, time()+(60*60*168), '/');
					setcookie('senha', $senha, time()+(60*60*168), '/');
				}
				header("Location: " . BASE_URL);
				die();
			}else {
				$dados['erro'] = "Usuário e/ou senha inválidos!";
			}
		}

		$this->loadTemplateLogin("login", $dados);
	}

	public function sair(){
		setcookie('lembrar', true, time()-1, '/');
		session_destroy();
		header("Location: ".BASE_URL);
	}

	public function trocarSenha(){
		$dados = array(
			"erro" => ""
		);
		if(isset($_POST['acao'])){
			if($_POST['senha1'] === $_POST['senha2']){
				$senha = md5($_POST['senha2']);
				$u = new Usuarios();
				$u->trocarSenha($senha, $_SESSION['login']);
				header("Location: ".BASE_URL);
			}else{
				$dados['erro'] = "As senhas não conferem. Tente novamente";
			}
		}

		$this->loadTemplate("trocaSenha", $dados);
	}

	public function esqueci(){
		$dados = array(
			"erro" => "",
			"info" => ""
		);
		if(isset($_POST['acao']) && !empty($_POST['email'])){
			$email = addslashes($_POST['email']);
			$u = new Usuarios();
			if($id_user = $u->checkEmail($email)){
				$token = md5(time().rand(0,9999).rand(0,9999).rand(0,9999));
				$u->insertToken($token, $id_user['id']);
				$dados['info'] = "Clique no link abaixo para redefinir a sua senha!<br/><br/><a href='".BASE_URL."login/redefinir/".$token."'>Inserir nova senha</a>";
			}else{
				$dados['erro'] = "O e-mail cadastrado não é válido!";
			}
		}
		$this->loadTemplateLogin("esqueci_senha", $dados);
	}

	public function redefinir($token = 0){
		$dados = array(
			"erro" => ""
		);
		if($token != 0){
			$user = 0;
			$u = new Usuarios();
			$user = intval($u->validarToken($token));
			if($user > 0){
				if(isset($_POST['acao']) && !empty($_POST['novaSenha'])){
					$novaSenha = md5($_POST['novaSenha']);
					$u->mudarSenha($novaSenha, $user, $token);
					$dados['aviso'] = "Senha alterada com sucesso!";
				}
			}else{
				$dados['erro'] = "Link utilizado e/ou sem validade";
			}
		}else{
			$dados['erro'] = "Você não tem permissão para acessar essa página.";
		}

		$this->loadTemplateLogin("redefinir_senha", $dados);
	}
}

?>