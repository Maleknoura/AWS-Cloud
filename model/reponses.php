<?php
include_once  "database.php";

class reponses {
    private $idreponse;
    private $reponsecontent;
 

    public function __construct()
    {
        
    }
   public function getidreponse()
   {
    return $this->idreponse;
   }
   public function getreponsecontent()
   {
    return $this->reponsecontent;
   }
  
public function setidreponse( $idreponse){
    $this->idreponse = $idreponse;
}
public function setreponsecontent($reponsecontent){
    $this->reponsecontent = $reponsecontent;
}

 public function getallreponses(){

 }
}

?>