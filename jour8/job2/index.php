<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <header class="bg-sky-500 shadow-lg">
        <nav class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <ul class="flex h-16 items-center justify-center space-x-8">
                <li><a href="index.php" class="rounded-md bg-white px-4 py-2 text-sm font-medium text-sky-600 hover:bg-sky-50 transition">Accueil</a></li>
                <li><a href="index.php" class="rounded-md px-4 py-2 text-sm font-medium text-white hover:bg-sky-600 hover:text-white transition">Inscription</a></li>
                <li><a href="index.php" class="rounded-md px-4 py-2 text-sm font-medium text-white hover:bg-sky-600 hover:text-white transition">Connexion</a></li>
                <li><a href="index.php" class="rounded-md px-4 py-2 text-sm font-medium text-white hover:bg-sky-600 hover:text-white transition">Rechercher</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <h2>Création de compte</h2>
            <form action="" method="post">
                <fieldset>
                    <legend>Civilité</legend>
                    <label>
                        <input type="radio" name="civilite" value="mr" required>
                        Monsieur
                    </label>
                    <label>
                        <input type="radio" name="civilite" value="mme" required>
                        Madame
                    </label>

                </fieldset>

                <div>
                    <label for="prenom">Prénom :</label>
                    <input type="text" id="prenom" name="prenom" required>
                </div>

                <div>
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom" required>
                </div>

                <div>
                    <label for="adresse">Adresse :</label>
                    <input type="text" id="adresse" name="adresse" required>
                </div>

                <div>
                    <label for="email">Adresse email :</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div>
                    <label for="password">Mot de passe :</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <div>
                    <label for="password_confirm">Confirmation du mot de passe :</label>
                    <input type="password" id="password_confirm" name="password_confirm" required>
                </div>

                <fieldset>
                    <legend>Passions</legend>
                    <label>
                        <input type="checkbox" name="passions[]" value="informatique">
                        Informatique</label>
                    <label>
                        <input type="checkbox" name="passions[]" value="voyages">
                        Voyages</label>
                    <label>
                        <input type="checkbox" name="passions[]" value="sport">
                        Sport</label>
                    <label>
                        <input type="checkbox" name="passions[]" value="lecture">
                        Lecture</label>
                </fieldset>

                <div>
                    <button type="submit">Valider</button>
                </div>
            </form>
        </section>
    </main>

    <footer>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="index.php">Inscription</a></li>
            <li><a href="index.php">Connexion</a></li>
            <li><a href="index.php">Rechercher</a></li>
        </ul>
    </footer>
</body>

</html>