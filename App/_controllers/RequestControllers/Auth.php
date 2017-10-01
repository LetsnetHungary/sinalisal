<?php
	class Auth extends CoreApp\InnerController {
		public function __construct() {
			parent::__construct(__CLASS__);
			$_GET["main"] = true;
		}
    public function loginrequest(){
      print_r(json_encode($this->model->lUI($_POST)));
    }
    public function logout(){
      if($this->model->lO()){
        header("Location: /Login");
      }
      die("Error occured");
    }
    public function cULI(){
      return $this->model->cULI();
    }
		public function kULI($hash, $devkey){
			return $this->model->kULI($hash, $devkey);
		}
	}
