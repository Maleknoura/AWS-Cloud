<?php
session_start();

require_once "./Controleur/question_controleur.php";
require_once "./Controleur/reponse_controleur.php";
require_once "./Controleur/result_controleur.php";

$i = isset($_GET['id']) ? $_GET['id'] : 1;
$selectedAnswer = isset($_GET['answer']) ? intval($_GET['answer']) : null;

$objetQuestion = new QuestionControleur();
$objetReponse = new ReponseControleur();
$objetResult = new ResultControleur();

$objetResult->insertLast($i,$selectedAnswer);
$objetQuestion->getQuestionControleur($i);
$objetReponse->getReponseContoleur($i);


if($i>1){
    $objetResult->insertReponseContoleur($i-1,$selectedAnswer);
}else{
    $objetResult->deleteControleur();
}

session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Contenu/style/style_quizz.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <title>Document</title>
</head>
<body>
    <header>
        <div class="logo"></div>
        <div class="container">
        <div class="progress">
            <div class="percent"></div>
        </div>
        <div class="container ml-5">
            <div class="row">
                <div class="col">
                    <ul id="progress-bar" class="progressbar">
                    <?php
                $totalQuestions = 10;
                for ($j = 1; $j <= $totalQuestions; $j++) {
                    $class = ($j == $i) ? 'active' : ''; 
                    echo '<li class="' . $class . '">Q' . $j . '</li>';
                }
                ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

        <button type="button" id="next">Next</button>
    </header>
    
    <section class="sec1"> 
       
       
        <div class="card">
        
    <div class="flex items-center justify-center">
    <h4 style="color:#59738D"><?php echo $objetQuestion->themename ;?></h4>
            <h5><?php echo $objetQuestion->questioncontent ;?>
            
            
    </div>
</div>

          
           
        </div>
    </section>
    <section class="sec2">
    <form method="GET" id="answersForm">
        <div class="div1">
            <button type="button" class="answerButton" value="<?php echo $objetReponse->reponses[0]['idreponse']; ?>">A) <?php echo $objetReponse->reponses[0]['reponsecontent']; ?></button>
            <button type="button" class="answerButton" value="<?php echo $objetReponse->reponses[1]['idreponse']; ?>">B) <?php echo $objetReponse->reponses[1]['reponsecontent']; ?></button>
        </div>
        <div class="div2">
            <button type="button" class="answerButton" value="<?php echo $objetReponse->reponses[2]['idreponse']; ?>">C) <?php echo $objetReponse->reponses[2]['reponsecontent']; ?></button>
            <button type="button" class="answerButton" value="<?php echo $objetReponse->reponses[3]['idreponse']; ?>">D) <?php echo $objetReponse->reponses[3]['reponsecontent']; ?></button>
        </div>
        <input type="hidden" name="selectedAnswer" id="selectedAnswer" value="">
    </form>

    </section>
    
  
 

    <!-- ajax -->
    
    <script>
        $(document).ready(function() {
            $(".answerButton").click(function() {
                <?php $i++; ?>
                var selectedAnswer = $(this).val();
                $("#selectedAnswer").val(selectedAnswer);


                $.ajax({
                    type: "GET",
                    url: "quizz.php",
                    data: { id: <?php echo $i; ?>, answer: selectedAnswer },
                    success: function(response) {
                        $("body").html(response);
                    }
                });

            });
            
        $("#next").click(function() {


                $.ajax({
                    type: "GET",
                    url: "quizz.php",
                    data: { id: <?php echo $i; ?> },
                    success: function(response) {
                        $("body").html(response);
                    }
                });

        });
    });
    </script>
</body>
</html>
