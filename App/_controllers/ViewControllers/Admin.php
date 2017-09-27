<?php
	class Admin extends CoreApp\ViewController {
		public function __construct() {
			CoreApp\Session::init();
			parent::__construct(__CLASS__);
			$_GET["main"] = true;
			include_once("App/_controllers/RequestControllers/Auth.php");
			$auth_obj = new Auth();
			if(!isset($_SESSION["logged"]) || !$auth_obj->cULI())
				header("Location: /Login");
      $model = $this->loadModel(__CLASS__);
			$this->v->contents = $model->getData();
		}
	}
