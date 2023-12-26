<?php
require_once "./Modele/reponse_modele.php";

class ReponseControleur {

    public $reponses; 

    public function getReponseContoleur($i) {

        $reponseModel = new reponses();
        $reponseModel->idquestion= $i;

        $this->reponses = $reponseModel->getAllReponses();
    }
}
?>
