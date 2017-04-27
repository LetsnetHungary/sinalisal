<?php
	class Implantatumok extends CoreApp\ViewController {
		public function __construct() {
			parent::__construct(__CLASS__);
			$this->v->sidebar = CoreApp\CMS::getCMSContent("sidebar");
			$this->v->rendszer = CoreApp\CMS::getCMSContent("Legacy1");
		}

		public function rendszerek($r) {
			$this->v->rendszer = CoreApp\CMS::getCMSContent($r);
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
