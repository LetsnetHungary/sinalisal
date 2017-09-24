<?php
    class Admin_Model extends CoreApp\Model {
      protected $db;
      public function __construct() {
          parent::__construct();
      }
      public function getData(){
        $this->db = CoreApp\DB::init("sinalisal");
        $stmt = $this->db->prepare("SELECT `project_id`, `type`, `content` FROM `projects` WHERE 1 = 1 ");
        $stmt->execute();
        $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $return_array = [];
        foreach($array as $data){
          $return_array[$data["project_id"]][$data["type"]] = $data["content"];
        }
        return $return_array;
      }
    }
