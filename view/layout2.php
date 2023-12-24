<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Quiz Page</title>
</head>
<body >
<!-- <img src="../images/logoaws-removebg-preview.png" alt="" width="220px" height="150px"> -->


<div class="bg-white flex items-center justify-center h-screen">
    <div class="quiz-container text-center">
        <div class="question-container bg-blue-900 text-white p-3 rounded shadow-md mb-4">
            <div class="question text-xl font-bold">Quelle est la capitale de la France ?</div>
        </div>
        <div class="answers flex justify-between p-4 rounded text-gray-700">
            <div class="left-answers">
                <div class="answer bg-white p-4 rounded shadow cursor-pointer shadow-lg transition duration-300 mb-5 mr-5">Parisloremipsumloremipsum</div>
                <div class="answer bg-white p-4 rounded shadow cursor-pointer shadow-lg transition duration-300 mb-5 mr-5">Parisloremipsumloremipsum</div>
            </div>
            <div class="right-answers">
                <div class="answer bg-white p-4 rounded shadow cursor-pointer shadow-lg transition duration-300 mb-5 ml-5">Parisloremipsumloremipsum</div>
                <div class="answer bg-white p-4 rounded shadow cursor-pointer shadow-lg transition duration-300 mb-5 ml-5">Parisloremipsumloremipsum</div>
            </div>
        </div>
    </div>
    </div>
    <div class="flex justify-between ">
            <div class="score bg-gray-300 p-4 rounded shadow-md">Score: 0</div>
            <button class="bg-gray-300 p-4 rounded shadow-md">Next</button>
        </div>
</body>
</html>
