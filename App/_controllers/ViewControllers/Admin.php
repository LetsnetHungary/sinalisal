<?php
	class Admin extends CoreApp\ViewController {
		public function __construct() {
			parent::__construct(__CLASS__);
			$_GET["main"] = true;
      $model = $this->loadModel(__CLASS__);
			$this->v->contents = $model->getData();
		}
	}
