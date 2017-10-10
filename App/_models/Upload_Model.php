<?php
    class Upload_Model extends CoreApp\Model {
      public function __construct() {
          parent::__construct();

      }

      public function uploadData($array){
        $db = CoreApp\DB::init(CoreApp\AppConfig::dbNAME());
        $mykey = md5(microtime().rand());
        unset($array["save"]);
        $cast = $array["cast"];
        unset($array["cast"]);
        
        foreach ($array as $key => $value) {
          $stmt = $db->prepare("INSERT INTO `projects`(`content_id`, cast, `type`, `content`) VALUES (:id, :cast, :type, :content)");
          $stmt->execute(array(
            ":id" => $mykey,
            ":cast" => $cast,
            ":type" => $key,
            ":content" => $value
          ));
        }
      }

      public function updateData($array){
        $db = CoreApp\DB::init(CoreApp\AppConfig::dbNAME());
        $id = $array["id"];
        unset($array["id"]);
        unset($array["save_changes"]);
        foreach ($array as $key => $value) {
          if(!empty($value)){
            $stmt = $db->prepare("UPDATE `projects` SET `content`= :content WHERE `content_id` = :id AND `type` = :type");
            $stmt->execute(array(
              ":id" => $id,
              ":type" => $key,
              ":content" => $value
            ));
          }
        }
      }
      public function deleteData($array){
        $db = CoreApp\DB::init(CoreApp\AppConfig::dbNAME());
        $stmt = $db->prepare("DELETE FROM projects WHERE content_id = :id");
        $stmt->execute(array(
          ":id" => $array["id"]
        ));
      }
      public function uploadImage($image){
        $target_dir = "images/";
        $target_file = $target_dir . basename($image["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

        $check = getimagesize($image["image"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            die("File is not an image.");
            $uploadOk = 0;
        }
        if (file_exists($target_file)) {
            die("Sorry, file already exists.");
            $uploadOk = 0;
        }
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            die("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
            $uploadOk = 0;
        }
          if (!move_uploaded_file($image["image"]["tmp_name"], $target_file)) {
              die("Sorry, there was an error uploading your file.");
          }
        header("Location: /Admin");
      }
  }
