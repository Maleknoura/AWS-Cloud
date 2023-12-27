<?php 

require_once "./Controleur/result_controleur.php";

$objetResult = new ResultControleur();
$objetResult->terminer();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Contenu/style/style_result.css">
    <title>Document</title>
</head>
<body>
    <header>
        <!-- <div class="logo"></div> -->
        <!-- <button id="toggleCorrectionBtn">Correction</button> -->
    </header>
    <section class="sec1">
        <?php if ($objetResult->scoreContoleur() >= 7) : ?>
            <h2>Congratulations le Podium est a vous !</h2>
        <?php else : ?>
            <h2>Malheureusement, essayez la prochaine fois </h2>
        <?php endif; ?>
        <h2>Votre score est : <?php echo $objetResult->scoreContoleur() * 10; ?>/100</h2>
        <?php $objetResult->Correction(); ?>
    </section>
    <!-- footer -->
    <?php require_once "./Contenu/footer.php";?>
</body>
            
</html>
