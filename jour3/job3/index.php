<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu du Taquin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
        }

        #recommencer {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            margin-bottom: 20px;
            display: none;
        }

        #plateau {
            display: grid;
            grid-template-columns: repeat(3, 150px);
            grid-template-rows: repeat(3, 150px);
            gap: 5px;
            margin: 0 auto;
            width: fit-content;
            margin-bottom: 30px;
        }

        .case {
            width: 150px;
            height: 150px;
            border: 2px solid #ccc;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f9f9f9;
            cursor: pointer;
            transition: transform 0.1s;
        }

        .case:hover:not(.vide) {
            transform: scale(1.05);
        }

        .case img {
            width: 100%;
            height: 100%;
            display: block;
        }

        .case.vide {
            background-color: #e0e0e0;
            cursor: default;
        }

        #message {
            font-size: 24px;
            font-weight: bold;
            min-height: 30px;
            margin-top: 20px;
        }

        .gagne {
            color: green;
        }
    </style>
</head>

<body>
    <h1>Jeu du Taquin</h1>
    <button id="recommencer">Recommencer</button>

    <div id="plateau">
        <div class="case" data-position="0"><img src="taquin/1.png" alt="taquin" data-order="1"></div>
        <div class="case" data-position="1"><img src="taquin/2.png" alt="taquin" data-order="2"></div>
        <div class="case" data-position="2"><img src="taquin/3.png" alt="taquin" data-order="3"></div>
        <div class="case" data-position="3"><img src="taquin/4.png" alt="taquin" data-order="4"></div>
        <div class="case" data-position="4"><img src="taquin/5.png" alt="taquin" data-order="5"></div>
        <div class="case" data-position="5"><img src="taquin/6.png" alt="taquin" data-order="6"></div>
        <div class="case" data-position="6"><img src="taquin/7.png" alt="taquin" data-order="7"></div>
        <div class="case" data-position="7"><img src="taquin/8.png" alt="taquin" data-order="8"></div>
        <div class="case vide" data-position="8"></div>
    </div>

    <div id="message"></div>

    <script src="../jsquery/jquery-3.7.1.min.js"></script>
    <script src="script.js"></script>

</body>

</html>