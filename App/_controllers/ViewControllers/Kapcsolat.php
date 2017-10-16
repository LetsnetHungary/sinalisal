<?php
	class Kapcsolat extends CoreApp\ViewController {
		public function __construct() {
			parent::__construct(__CLASS__);

      $model = $this->loadModel("Admin");

			$contents = $model->getData();
			$this->v->courses = isset($contents["course"]) ? true : false;
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
