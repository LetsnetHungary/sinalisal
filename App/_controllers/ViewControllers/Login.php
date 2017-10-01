<?php
	class Login extends CoreApp\ViewController {
		public function __construct() {
			parent::__construct(__CLASS__);
			$_GET["main"] = true;
			include_once("App/_controllers/RequestControllers/Auth.php");
			$auth_obj = new Auth();
			if(isset($_SESSION["logged"]) && $auth_obj->cULI())
				header("Location: /Admin");
			if(isset($_COOKIE["keepmeloggedin"]) && isset($_COOKIE["fingerprint"])){
        if($auth_obj->kULI($_COOKIE["keepmeloggedin"], $_COOKIE["fingerprint"])){
          header("Location: /Admin");
        }
      }
		}
	}
