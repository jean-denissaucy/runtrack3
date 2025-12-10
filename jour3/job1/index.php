<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        button {
            margin-right: 10px;
            margin-bottom: 10px;
            color: red;
        }

        #citation {
            font-style: italic;
            color: blue;
        }
    </style>
    <button id="btn-show">Afficher la citation</button>
    <button id="btn-hide">Cacher la citation</button>

    <p id="citation" style="display:none;">
        Les logiciels et les cathédrales, c'est un peu la même chose - d'abord on les construit,
        ensuite on prie.
    </p>


    <script src="../jsquery/jquery-3.7.1.min.js"></script>
    <script src="script.js"></script>
</body>

</html>