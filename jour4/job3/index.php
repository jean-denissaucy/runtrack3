<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokédex - Recherche</title>
</head>

<body>
    <h1>Recherche de Pokémon</h1>

    <form id="filterForm">
        <div>
            <label for="id">ID :</label>
            <input type="text" id="id" name="id">
        </div>

        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom">
        </div>

        <div>
            <label for="type">Type :</label>
            <select id="type" name="type">
                <option value="">-- Sélectionner --</option>
                <option value="Plante">Plante</option>
                <option value="Poison">Poison</option>
                <option value="Feu">Feu</option>
                <option value="Eau">Eau</option>
                <option value="Insecte">Insecte</option>
                <option value="Normal">Normal</option>
                <option value="Électrik">Électrik</option>
                <option value="Sol">Sol</option>
                <option value="Fée">Fée</option>
                <option value="Combat">Combat</option>
                <option value="Psy">Psy</option>
                <option value="Roche">Roche</option>
                <option value="Acier">Acier</option>
                <option value="Glace">Glace</option>
                <option value="Spectre">Spectre</option>
                <option value="Dragon">Dragon</option>
                <option value="Ténèbres">Ténèbres</option>
                <option value="Vol">Vol</option>
            </select>
        </div>

        <div>
            <input type="button" id="filtrer" value="Filtrer">
        </div>
    </form>

    <div id="results"></div>

    <script src="./script.js"></script>
</body>

</html>