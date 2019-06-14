<?php 

class Usuarios extends Model{

	public function verificarLogin(){
		if(!isset($_SESSION['login']) || (isset($_SESSION['login']) && empty($_SESSION['login']))){
            header("Location:".BASE_URL."login");
            die();
        }else{
            return true;
        }
	}

	public function verificarAdmin(){
		if($_SESSION['adm'] == 1){
			return true;
		} else{
			return false;
		}
	}

	public function fazerLogin($email, $senha){
		$resp = array();
		
		$sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":email", $email);
		$sql->bindValue(":senha", $senha);
		$sql->execute();

		if($sql->rowCount() > 0){
			$resp = $sql->fetch();
			return $resp;
		}else{
			return "Usuario e/ou senha incorretos!";
		}
	}

	public function getVendedores(){
		$resp = array();
		$sql = "SELECT * FROM usuarios ORDER BY nome";
		$sql = $this->db->prepare($sql);
		$sql->execute();

		if($sql->rowCount() > 0){
			$resp = $sql->fetchAll();
		}

		return $resp;
	}

	public function trocarSenha($senha, $id){
		$sql = "UPDATE usuarios SET senha = :senha WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":senha", $senha);
		$sql->bindValue(":id", $id);
		$sql->execute();

		return true;
	}

	public function checkEmail($email){
		$resp = array();

		$sql = "SELECT * FROM usuarios WHERE email = :email";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":email", $email);
		$sql->execute();

		if($sql->rowCount() > 0){
			$resp = $sql->fetch();
		} else {
			return false;
		}

		return $resp;
	}

	public function insertToken($token, $id_usuario){
		$validade = date("Y-m-d H:i:s", strtotime("+24 hours"));
		$sql = "INSERT INTO usuarios_token SET id_usuario = :id_usuario, hash = :hash, used = 0, expired = :expired";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":id_usuario", $id_usuario);
		$sql->bindValue(":hash", $token);
		$sql->bindValue(":expired", $validade);
		$sql->execute();

		if($this->db->lastInsertId()){
			return true;
		}else{
			return false;
		}
	}

	public function validarToken($token){
		$sql = "SELECT * FROM usuarios_token WHERE hash = :hash AND used = 0 AND expired > NOW()";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":hash", $token);
		$sql->execute();

		if($sql->rowCount() > 0){
			$sql = $sql->fetch();
			$id = $sql['id_usuario'];
			return $id;
		}else{
			return 0;
		}
	}

	public function mudarSenha($senha, $user, $token){
		$sql = "UPDATE usuarios SET senha = :senha WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":senha", $senha);
		$sql->bindValue(":id", $user);
		$sql->execute();

		$sql = "UPDATE usuarios_token SET used = 1 WHERE hash = :hash";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":hash", $token);
		$sql->execute();
	}
}

?>