<?php

class Usuarios extends Model{

	/*
	**Valida o usuário para fazer o login
	*/
	public function validateUser($email, $password){

		$sql = "SELECT * FROM usuarios WHERE EMAIL = :email AND SENHA = :password";

		$sql = $this->db->prepare($sql);

		$sql->bindValue(":email", $email);
		$sql->bindValue(":password", $password);

		if($sql->execute()){
			if($sql->rowCount() > 0){
				$data = $sql->fetch(PDO::FETCH_ASSOC);
	
				$nome = $data['NOME'];
				$cod = $data['COD'];

				$_SESSION['COD'] = $cod;
				$_SESSION['user'] = $nome;
	
				return true;
			}else{
				return false;
			}
		}else{
			print_r($sql->errorInfo());
		}
	}

	/*
	**Verifica se existe algum usuário logado
	*/

	public function verifyLogin(){

		if(!empty($_SESSION['COD'])){
			$COD = $_SESSION['COD'];

			$sql = "SELECT * FROM usuarios WHERE COD = :COD";

			$sql = $this->db->prepare($sql);

			$sql->bindValue(":COD", $COD);

			if($sql->execute()){
				if($sql->rowCount() > 0 ){
					return true;
				}else{
					return false;
				}
			}else{
				print_r($sql->errorInfo());
			}
		}else{
			return false;
		}
	}

	public function clearSession(){
		unset($_SESSION['COD']);
		unset($_SESSION['user']);
	}
}

?>