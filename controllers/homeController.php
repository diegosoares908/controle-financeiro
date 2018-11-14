<?php
class homeController extends Controller {

	private $user;
	
	public function __construct(){
		$this->user = new Usuarios();

		if(!$this->user->verifyLogin()){
			header("Location: ".BASE_URL."login");
			exit;
		}		
	}

    public function index() {
        $data = array();

        $this->loadTemplate('home', $data);
    }

}