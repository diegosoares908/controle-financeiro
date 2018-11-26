<?php

class cadastroController extends Controller{

	private $cadastro;

	public function __construct(){
		$this->cadastro = new Cadastro();
	}

	/*
    **Carrega o template cadastro
    */

    public function index(){
        $this->loadView('cadastro');
    }

    /*
    **Cadastra um novo usuário
    */
    public function novo(){

    	$data = array(
    		'nome' => $_POST['nome'],
    		'email' => $_POST['email'],
    		'senha' => $_POST['pass']
    	);

    	$this->cadastro->novoUsuario($data);

    	header("Location: ".BASE_URL."login");
    }
}

?>