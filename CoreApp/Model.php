<?php

namespace CoreApp;

	class Model {

		protected $db;

		public function __construct()	{
			/*
			$d = new Database();
			$this->db = $d->PDOConnection();
			unset($this->d);
			$this->db->exec("set names utf8");
			*/
		}
		protected function CURLWPOST($url, $postarray) {
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postarray));
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				$api_output = curl_exec ($ch);
				curl_close($ch);
				return $api_output;

	}
	}
