<?php
    class Upload_Model extends CoreApp\Model {
      public function __construct() {
          parent::__construct();

      }

      public function uploadData($array){
        $db = CoreApp\DB::init("graphedh_sinalisal");
        $mykey = md5(microtime().rand());
        unset($array["save"]);
        foreach ($array as $key => $value) {
          $stmt = $db->prepare("INSERT INTO `projects`(`project_id`, `type`, `content`) VALUES (:id, :type, :content)");
          $stmt->execute(array(
            ":id" => $mykey,
            ":type" => $key,
            ":content" => $value
          ));
        }
      }

      public function updateData($array){
        $db = CoreApp\DB::init("graphedh_sinalisal");
        $id = $array["id"];
        unset($array["id"]);
        unset($array["save_changes"]);
        foreach ($array as $key => $value) {
          if(!empty($value)){
            echo($key);
            $stmt = $db->prepare("UPDATE `projects` SET `content`= :content WHERE `project_id` = :id AND `type` = :type");
            $stmt->execute(array(
              ":id" => $id,
              ":type" => $key,
              ":content" => $value
            ));
          }
        }
      }
      public function deleteData($array){
        $db = CoreApp\DB::init("graphedh_sinalisal");
        $stmt = $db->prepare("DELETE FROM projects WHERE project_id = :id");
        $stmt->execute(array(
          ":id" => $array["id"]
        ));
      }
  }
