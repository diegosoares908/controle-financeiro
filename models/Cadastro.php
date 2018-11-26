<?php

class Cadastro extends Model{

	public function novoUsuario($data){

    	$nome = $data['nome'];
    	$email = $data['email'];
    	$senha = md5($data['senha']);

		$sql = "INSERT INTO usuarios (NOME, EMAIL, SENHA) VALUES (:nome, :email, :senha)";

    	$sql = $this->db->prepare($sql);

    	$sql->bindValue(':nome', $nome);
    	$sql->bindValue(':email', $email);
    	$sql->bindValue(':senha', $senha);

    	if($sql->execute()){
    		echo "OK!";
    	}else{
    		print_r($sql->errorInfo());
    	}
	}
}

?>