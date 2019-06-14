<?php 
class Clientes extends Model {

	public function cadastrarCliente($nome, $email, $cidade, $estado, $instituicao, $telefone, $interesse, $observacao, $user) {
		$sql = "INSERT INTO clientes SET nome = :nome, email = :email, cidade = :cidade, estado = :estado, instituicao = :instituicao, telefone = :telefone, interesse = :interesse, observacao = :observacao, user = :user";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":nome", $nome);
		$sql->bindValue(":email", $email);
		$sql->bindValue(":cidade", $cidade);
		$sql->bindValue(":estado", $estado);
		$sql->bindValue(":instituicao", $instituicao);
		$sql->bindValue(":telefone", $telefone);
		$sql->bindValue(":interesse", $interesse);
		$sql->bindValue(":observacao", $observacao);
		$sql->bindValue(":user", $user);
		$sql->execute();

		if($this->db->lastInsertId()){
			return true;
		} else{
			return false;
		}
	}

	public function getAllClients($vends = ''){
		$resp = array();
		$sql = "SELECT clientes.id, clientes.nome, clientes.email, clientes.cidade, clientes.estado, clientes.instituicao, clientes.telefone, clientes.interesse, clientes.observacao, usuarios.nome AS username
				FROM clientes JOIN usuarios ON clientes.user = usuarios.id";
		if($vends != ''){
			$sql = "SELECT clientes.id, clientes.nome, clientes.email, clientes.cidade, clientes.estado, clientes.instituicao, clientes.telefone, clientes.interesse, clientes.observacao, usuarios.nome AS username
				FROM clientes JOIN usuarios ON clientes.user = usuarios.id WHERE clientes.user = :vends ORDER BY clientes.instituicao";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(":vends", $vends);
			$sql->execute();
		}else{
			$sql = $this->db->prepare($sql);
			$sql->execute();
		}

		if($sql->rowCount() > 0){
			$resp = $sql->fetchAll();
		}

		return $resp;
	}

	public function getClientesUser($user) {
		$resp = array();
		$sql = "SELECT * FROM clientes WHERE user = :user";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":user", $user);
		$sql->execute();

		if($sql->rowCount()){
			$resp = $sql->fetchAll();
		}

		return $resp;
	}

	public function getClienteById($id)	{
		$resp = array();
		$sql = "SELECT clientes.id, clientes.nome, clientes.email, clientes.cidade, clientes.estado, clientes.instituicao, clientes.telefone, clientes.interesse, clientes.observacao, clientes.user, usuarios.nome AS username FROM clientes JOIN usuarios ON clientes.user = usuarios.id WHERE clientes.id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":id", $id);
		$sql->execute();

		if($sql->rowCount() > 0){
			$resp = $sql->fetch();
		}

		return $resp;
	}

	public function excluir($id){
		$sql = "DELETE FROM clientes WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":id", $id);
		$sql->execute();
	}

	public function editarCliente($nome, $email, $cidade, $estado, $instituicao, $telefone, $interesse, $observacao, $id){
		$sql = "UPDATE clientes SET nome = :nome, email = :email, cidade = :cidade, estado = :estado, instituicao = :instituicao, telefone = :telefone, interesse = :interesse, observacao = :observacao WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":nome", $nome);
		$sql->bindValue(":email", $email);
		$sql->bindValue(":cidade", $cidade);
		$sql->bindValue(":estado", $estado);
		$sql->bindValue(":instituicao", $instituicao);
		$sql->bindValue(":telefone", $telefone);
		$sql->bindValue(":interesse", $interesse);
		$sql->bindValue(":observacao", $observacao);
		$sql->bindValue(":id", $id);
		$sql->execute();
	}
}
?>