<?php

  namespace CoreApp;

  class CMS {

    private static $mapB = "_cms/_maps/";
    private static $jsonB = "_cms/_jsons/";

    public static function getSection($viewName, $sectionName) {
      $cmsMapFile = "_cms/_maps/map.$viewName.json";
      $content = json_decode(file_get_contents($cmsMapFile));

      $sectionFile = "_cms/_jsons/$viewName/$sectionName.json";
      return(self::GS($sectionFile));
    }

    private static function GS($sectionFile) {
     $content = file_get_contents($sectionFile);
     return(json_decode($content));
   }

   public static function getCMSContent($sectionName) {
     if(file_exists("_cms/_jsons/$sectionName.json")) {
       return(file_get_contents("_cms/_jsons/$sectionName.json"));
     }
     else {
       return(file_get_contents("_cms/_jsons/Legacy2.json"));
     }
   }
 }
