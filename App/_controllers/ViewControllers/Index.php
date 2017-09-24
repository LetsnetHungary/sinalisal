<?php
	class Index extends CoreApp\ViewController {
		public function __construct() {
			parent::__construct(__CLASS__);
      $model = $this->loadModel("Admin");
			$this->v->contents = $model->getData();
		}

		/*
		public function modelDidLoad() {
			echo "<br> model loaded<br> ";
		}

		public function viewRenderEnded() {
			echo "<br>render ended";
		}
		*/
	}
