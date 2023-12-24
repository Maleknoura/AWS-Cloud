<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>
<section class="firstSec">
    <img src="../images/logoaws-removebg-preview.png" alt="" width="220px" height="150px">
    <h3 id="text-container"></h3>
    <div class="bg-rgba-card p-4 rounded-lg shadow-xl max-w-xs w-full mt-12 flex align-center  ">
        <form action="#" method="post">
            <div class="mb-4">
                <input type="text" id="username" name="username" placeholder="Saisir votre pseudoname" class="w-full sm:w-64 border-2 border-gray-300 p-2 rounded-md focus:outline-none focus:border-blue-500 transition-all duration-300">
            </div>
            <button type="submit" class="w-full bg-orange-500 text-white p-2 rounded-sm text-sm hover:bg-orange-700 focus:outline-none focus:shadow-outline-orange active:bg-orange-800 transition-all duration-300">Register</button>
        </form>
    </div>
</section>


    <script>
        const textToAnimate = "AWS Cloud Practitioner gives you the best";
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