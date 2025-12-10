<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reconstruction Arc-en-ciel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
            background: linear-gradient(to bottom, #87CEEB, #98D8E8);
            min-height: 100vh;
        }

        h1 {
            color: #333;
            margin-bottom: 30px;
        }

        #melanger {
            padding: 12px 30px;
            font-size: 18px;
            cursor: pointer;
            background: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            margin-bottom: 30px;
            transition: background 0.3s;
        }

        #melanger:hover {
            background: #45a049;
        }

        #cartes {
            display: flex;
            gap: 10px;
            justify-content: center;
            flex-wrap: wrap;
            padding: 20px;
            background: white;
            border-radius: 10px;
            margin: 0 auto 30px;
            max-width: 800px;
            min-height: 120px;
            border: 3px dashed #ccc;
        }

        #cartes img {
            width: 100px;
            height: 100px;
            cursor: grab;
            border: 2px solid #ddd;
            border-radius: 5px;
            transition: transform 0.2s;
        }

        #cartes img:hover {
            transform: scale(1.05);
        }

        #cartes img:active {
            cursor: grabbing;
        }

        #zone-depot {
            display: flex;
            gap: 5px;
            justify-content: center;
            margin: 0 auto 30px;
            max-width: 650px;
        }

        .drop-zone {
            width: 100px;
            height: 100px;
            border: 3px dashed #999;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 5px;
            transition: all 0.3s;
        }

        .drop-zone.over {
            background: #e3f2fd;
            border-color: #2196F3;
            transform: scale(1.05);
        }

        .drop-zone img {
            width: 100%;
            height: 100%;
            border: 2px solid #4CAF50;
            border-radius: 5px;
        }

        #message {
            font-size: 28px;
            font-weight: bold;
            min-height: 40px;
            margin-top: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .gagne {
            color: #4CAF50;
            animation: bounce 0.5s;
        }

        .perdu {
            color: #f44336;
        }

        @keyframes bounce {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .instructions {
            background: white;
            padding: 15px;
            border-radius: 10px;
            max-width: 600px;
            margin: 0 auto 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <h1>🌈 Reconstruction de l'Arc-en-ciel 🌈</h1>

    <div class="instructions">
        <p><strong>Instructions :</strong> Glissez-déposez les images dans le bon ordre pour reconstituer l'arc-en-ciel
            !</p>
    </div>

    <button id="melanger">🔀 Mélanger</button>

    <div id="cartes">
        <img src="arc/arc1.png" alt="Arc 1" data-order="1" draggable="true">
        <img src="arc/arc2.png" alt="Arc 2" data-order="2" draggable="true">
        <img src="arc/arc3.png" alt="Arc 3" data-order="3" draggable="true">
        <img src="arc/arc4.png" alt="Arc 4" data-order="4" draggable="true">
        <img src="arc/arc5.png" alt="Arc 5" data-order="5" draggable="true">
        <img src="arc/arc6.png" alt="Arc 6" data-order="6" draggable="true">
    </div>

    <div id="zone-depot">
        <div class="drop-zone" data-position="1"></div>
        <div class="drop-zone" data-position="2"></div>
        <div class="drop-zone" data-position="3"></div>
        <div class="drop-zone" data-position="4"></div>
        <div class="drop-zone" data-position="5"></div>
        <div class="drop-zone" data-position="6"></div>
    </div>

    <div id="message"></div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="script.js"></script>
</body>

</html>