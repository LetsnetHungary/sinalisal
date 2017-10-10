<?php
    class Admin_Model extends CoreApp\Model {
      protected $db;
      public function __construct() {
          parent::__construct();
      }
      public function getData(){
        $db = CoreApp\DB::init(CoreApp\AppConfig::dbNAME());
        $stmt = $db->prepare("SELECT `content_id`, cast, `type`, `content` FROM `projects` WHERE 1 = 1 ");
        $stmt->execute();
        $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $return_array = [];
        foreach($array as $data){
          $return_array[$data["cast"]][$data["content_id"]][$data["type"]] = $data["content"];
        }
        return $return_array;
      }
    }
