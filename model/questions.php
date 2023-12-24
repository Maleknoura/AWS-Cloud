<?php
include_once  "database.php";

class questions {
    private $idquestion;
    private $questioncontent;
    



    public function __construct()
    {
        
    }
   public function getidquestion()
   {
    return $this->idquestion;
   }
   public function getquestioncontent()
   {
    return $this->questioncontent;
   }
   

public function setidquestion( $idquestion){
    $this->idquestion = $idquestion;
}
public function setquestioncontent($questioncontent){
    $this->questioncontent = $questioncontent;
}

 public function getallquestions(){

 }
}

?>