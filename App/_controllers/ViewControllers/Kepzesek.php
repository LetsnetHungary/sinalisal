<?php
	class Kepzesek extends CoreApp\ViewController {
		public function __construct() {
			parent::__construct(__CLASS__);
      $model = $this->loadModel("Admin");

			$contents = $model->getData();
			$this->v->courses = isset($contents["course"]) ? $contents["course"] : [];
		}

  }
