<?php
require_once "./Controleur/index_controleur.php";
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./Contenu/style/style_index.css">
    
    <title>Document</title>
</head>
<body>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="flex flex-col items-center justify-center h-screen">
    <div class="bg-rgba-card p-4 rounded-lg shadow-xl max-w-md w-full">
        <img src="../images/logoaws-removebg-preview.png" alt="" width="290px" height="90px" class="mx-auto">
        <div class="flex items-center justify-center">
            <form  method="post">
                <div class="mb-4 mr-5">
                    <input type="text" id="username" name="pseudo" placeholder=" Pseudoname" class="w-full sm:w-64 border-2 border-gray-300 p-2 rounded-md focus:outline-none focus:border-blue-500 transition-all duration-300 center">  
                </div>      
                <button type="submit" name="commancer" class="w-full text-white bg-gradient-to-br from-purple-900 to-blue-800 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">START</button>   
            </form>
        </div>
    </div>

    <div class="mt-9">
        <h3 id="text-container"></h3>
    </div>

    <script>
        const textToAnimate = "Cree ton propre Quiz  sur AWS Cloud Practitioner ";
        const textContainer = document.getElementById("text-container");

        function animateText() {
            let index = 0;
            const intervalId = setInterval(function() {
                textContainer.textContent = textToAnimate.slice(0, index);
                index++;

                if (index > textToAnimate.length) {
                    clearInterval(intervalId);
                    textContainer.textContent = textToAnimate;
                }
            }, 150);
        }

        window.onload = animateText;
    </script>
</body>
</html>
 
      
</body>
</html>
<?php $content = ob_get_clean();?>