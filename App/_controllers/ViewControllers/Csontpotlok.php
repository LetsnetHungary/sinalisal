<?php
	class Csontpotlok extends CoreApp\ViewController {
		public function __construct() {
			parent::__construct(__CLASS__);
			$this->v->sidebar = CoreApp\CMS::getCMSContent("sidebar_csp");
			$this->v->rendszer = CoreApp\CMS::getCMSContent("csontpotlok/BioVinBone");
			$_GET["main"] = true;
		}


		public function rendszerek($r) {
			$r = str_replace(' ', '', $r);
			$r = str_replace('.', '', $r);
			$this->v->rendszer = CoreApp\CMS::getCMSContent("csontpotlok/".$r);
			$_GET["main"] = false;
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
