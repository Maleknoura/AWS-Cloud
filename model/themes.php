<?php
include_once  "database.php";

class reponses {
    private $idthemes;
    private $themename;
 

    public function __construct()
    {
        
    }
   public function getidthemes()
   {
    return $this->idthemes;
   }
   public function getthemename()
   {
    return $this->themename;
   }
  
public function setidthemes( $idthemes){
    $this->idthemes = $idthemes;
}
public function setthemename($themename){
    $this->themename = $themename;
}

 public function getallthemes(){

 }
}

?>