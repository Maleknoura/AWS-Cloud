<?php
require_once "./Modele/question_modele.php";

class QuestionControleur
{
    public $questioncontent; 
    public $idquestion;   
    public $idthemes;    
    public $themename;  

    public function getQuestionControleur($i)
    {
        $questionModel = new questions();
        $questionModel->idquestion = $i;

        if ($questionModel->getQuestion()) {

            $this->idquestion = $questionModel->idquestion;
            $this->questioncontent = $questionModel->questioncontent;
            $this->idthemes = $questionModel->idthemes;
            $this->themename = $questionModel->themename;

            require_once "./Vue/quizz_vue.php";
        } else {
           
        }
    }

    
}
?>
