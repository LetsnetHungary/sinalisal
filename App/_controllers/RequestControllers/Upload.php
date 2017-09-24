<?php
	class Upload extends CoreApp\InnerController {
		public function __construct() {
			parent::__construct(__CLASS__);
      $model = $this->loadModel(__CLASS__);
			$_GET["main"] = true;
      if(isset($_POST["save"]))
        $model->uploadData($_POST);
      else if(isset($_POST["save_changes"]))
        $model->updateData($_POST);
      else if(isset($_POST["delete"]))
        $model->deleteData($_POST);

      header("Location: Admin");
		}
	}
