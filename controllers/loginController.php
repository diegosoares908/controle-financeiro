<?php

class loginController extends Controller{

	private $user;

	public function __construct(){
		$this->user = new Usuarios();
	}

	/**
	 * Carrega a view 'login.php'
	 */
	public function index(){
		$this->loadView('login');
	}

	/**
	 * Validação dos dados de login
	 */
	public function signin(){

    	if(!empty($_POST['email'])){
    		$email = addslashes($_POST['email']);
    		$pass = md5(addslashes($_POST['pass']));
    		
    		if($this->user->validateUser($email, $pass)){
    			header("Location: ".BASE_URL.'home');
    			exit;
    		}else{
    			header("Location: ".BASE_URL.'login?error=1');
    			exit;
    		}
    	}else{
    		header("Location: ".BASE_URL.'login');
    		exit;
    	}
    }

    /**
	 * Encerra a sessão
	 */
    public function signout(){
        $this->user->clearSession();

        header("Location: ".BASE_URL.'login');
    }
}

?>