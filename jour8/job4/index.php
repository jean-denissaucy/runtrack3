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
        <h1 class="text-center text-white text-3xl font-bold py-4">Bienvenue a vous</h1>
        <nav class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <ul class="flex h-16 items-center justify-center space-x-8">
                <li><a href="index.php" class="rounded-md bg-white px-4 py-2 text-sm font-medium text-sky-600 hover:bg-sky-50 hover:skew-y-3 hover:scale-105 transition-all duration-300 ease-out shadow-md hover:shadow-xl animate-pulse">Accueil</a></li>
                <li><a href="index.php" class="rounded-md px-4 py-2 text-sm font-medium text-white hover:bg-sky-600 hover:text-white hover:skew-y-3 hover:scale-105 transition-all duration-300 ease-out shadow-md hover:shadow-xl">Inscription</a></li>
                <li><a href="index.php" class="rounded-md px-4 py-2 text-sm font-medium text-white hover:bg-sky-600 hover:text-white hover:skew-y-3 hover:scale-105 transition-all duration-300 ease-out shadow-md hover:shadow-xl">Connexion</a></li>
                <li><a href="index.php" class="rounded-md px-4 py-2 text-sm font-medium text-white hover:bg-sky-600 hover:text-white hover:skew-y-3 hover:scale-105 transition-all duration-300 ease-out shadow-md hover:shadow-xl">Rechercher</a></li>
                <li>
                    <svg viewBox="0 0 1024 1024" class="icon w-10 h-10" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M192 96c-17.6 0-32 14.4-32 32v768c0 17.6 14.4 32 32 32h640c17.6 0 32-14.4 32-32V128c0-17.6-14.4-32-32-32H192z m0-32h640c35.2 0 64 28.8 64 64v768c0 35.2-28.8 64-64 64H192c-35.2 0-64-28.8-64-64V128c0-35.2 28.8-64 64-64z" fill="#ffffff"></path>
                            <path d="M576 512m-160 0a160 160 0 1 0 320 0 160 160 0 1 0-320 0Z" fill="#ffffff"></path>
                            <path d="M475.2 390.4c-4.8-48-22.4-86.4-57.6-123.2-6.4-6.4-6.4-16 0-22.4 6.4-6.4 16-6.4 22.4 0 43.2 43.2 62.4 89.6 67.2 145.6 57.6 3.2 94.4 16 126.4 48 30.4 30.4 43.2 65.6 46.4 116.8 49.6 3.2 92.8 22.4 134.4 62.4 6.4 6.4 6.4 16 0 22.4-6.4 6.4-16 6.4-22.4 0-33.6-33.6-68.8-49.6-110.4-52.8 0 9.6 0 19.2-1.6 28.8 0 3.2-3.2 43.2-3.2 52.8-1.6 17.6 0 32 1.6 43.2 1.6 14.4 6.4 24 12.8 30.4 6.4 6.4 6.4 16 0 22.4-6.4 6.4-16 6.4-22.4 0-11.2-11.2-19.2-28.8-20.8-49.6-1.6-14.4-1.6-28.8-1.6-49.6 0-11.2 3.2-49.6 3.2-52.8 0-9.6 1.6-17.6 1.6-27.2-8 0-16 1.6-24 1.6-9.6 1.6-67.2 11.2-81.6 12.8-24 1.6-41.6-3.2-56-16-9.6-9.6-14.4-22.4-16-38.4-1.6-12.8-1.6-27.2 1.6-49.6 0-4.8 3.2-25.6 3.2-27.2 1.6-11.2 1.6-20.8 1.6-28.8v-20.8h-22.4c-1.6 0-28.8 0-36.8 1.6H384c-40-1.6-68.8-11.2-88-30.4-6.4-6.4-6.4-16 0-22.4 6.4-6.4 16-6.4 22.4 0 12.8 12.8 33.6 19.2 67.2 20.8h33.6c8 0 35.2-1.6 36.8-1.6 4.8 3.2 12.8 3.2 19.2 3.2z m171.2 164.8c-3.2-41.6-12.8-70.4-36.8-94.4-24-24-54.4-35.2-102.4-38.4v22.4c0-8-8 83.2-6.4 99.2 1.6 9.6 3.2 14.4 8 19.2 4.8 4.8 14.4 8 30.4 6.4 12.8-1.6 68.8-11.2 80-11.2 9.6-1.6 19.2-3.2 27.2-3.2zM224 184c-9.6 0-16-6.4-16-16s6.4-16 16-16h192c9.6 0 16 6.4 16 16s-6.4 16-16 16H224zM216 736c-4.8 0-8-3.2-8-8s3.2-8 8-8h128c4.8 0 8 3.2 8 8s-3.2 8-8 8h-128z m0 48c-4.8 0-8-3.2-8-8s3.2-8 8-8h128c4.8 0 8 3.2 8 8s-3.2 8-8 8h-128z m0 48c-4.8 0-8-3.2-8-8s3.2-8 8-8h128c4.8 0 8 3.2 8 8s-3.2 8-8 8h-128z" fill="#ffffff"></path>
                            <path d="M776 128c22.4 0 40 17.6 40 40S798.4 208 776 208 736 190.4 736 168 753.6 128 776 128z" fill="#ffffff"></path>
                        </g>
                    </svg>
                </li>
            </ul>
        </nav>
    </header>

    <main class="min-h-screen bg-gradient-to-br from-sky-50 to-cyan-100 py-12 px-4 sm:px-6 lg:px-8">
        <section class="mx-auto max-w-2xl">
            <div class="bg-white rounded-2xl shadow-2xl p-8 sm:p-12">
                <h2 class="text-3xl font-bold text-sky-600 text-center mb-8">Création de compte</h2>

                <form action="" method="post" class="space-y-6">
                    <!-- Civilité -->
                    <fieldset class="bg-sky-50 p-6 rounded-lg border-2 border-sky-200">
                        <legend class="text-lg font-semibold text-sky-700 px-3">Civilité</legend>
                        <div class="flex gap-6 mt-4">
                            <label class="flex items-center space-x-2 cursor-pointer group">
                                <input type="radio" name="civilite" value="mr" required
                                    class="w-5 h-5 text-sky-600 focus:ring-sky-500 focus:ring-2 cursor-pointer">
                                <span class="text-gray-700 group-hover:text-sky-600 transition-colors">Monsieur</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer group">
                                <input type="radio" name="civilite" value="mme" required
                                    class="w-5 h-5 text-sky-600 focus:ring-sky-500 focus:ring-2 cursor-pointer">
                                <span class="text-gray-700 group-hover:text-sky-600 transition-colors">Madame</span>
                            </label>
                        </div>
                    </fieldset>

                    <!-- Prénom et Nom -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label for="prenom" class="block text-sm font-medium text-gray-700 mb-2">
                                Prénom <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="prenom" name="prenom" required
                                class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-sky-500 focus:ring-2 focus:ring-sky-200 transition-all">
                        </div>

                        <div>
                            <label for="nom" class="block text-sm font-medium text-gray-700 mb-2">
                                Nom <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="nom" name="nom" required
                                class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-sky-500 focus:ring-2 focus:ring-sky-200 transition-all">
                        </div>
                    </div>

                    <!-- Adresse -->
                    <div>
                        <label for="adresse" class="block text-sm font-medium text-gray-700 mb-2">
                            Adresse <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="adresse" name="adresse" required
                            class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-sky-500 focus:ring-2 focus:ring-sky-200 transition-all">
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                            Adresse email <span class="text-red-500">*</span>
                        </label>
                        <input type="email" id="email" name="email" required
                            class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-sky-500 focus:ring-2 focus:ring-sky-200 transition-all">
                    </div>

                    <!-- Mot de passe -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                            Mot de passe <span class="text-red-500">*</span>
                        </label>
                        <input type="password" id="password" name="password" required
                            class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-sky-500 focus:ring-2 focus:ring-sky-200 transition-all">
                    </div>

                    <!-- Confirmation mot de passe -->
                    <div>
                        <label for="password_confirm" class="block text-sm font-medium text-gray-700 mb-2">
                            Confirmation du mot de passe <span class="text-red-500">*</span>
                        </label>
                        <input type="password" id="password_confirm" name="password_confirm" required
                            class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-sky-500 focus:ring-2 focus:ring-sky-200 transition-all">
                    </div>

                    <!-- Passions -->
                    <fieldset class="bg-sky-50 p-6 rounded-lg border-2 border-sky-200">
                        <legend class="text-lg font-semibold text-sky-700 px-3">Passions</legend>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-4">
                            <label class="flex items-center space-x-3 cursor-pointer group">
                                <input type="checkbox" name="passions[]" value="informatique"
                                    class="w-5 h-5 text-sky-600 rounded focus:ring-sky-500 focus:ring-2 cursor-pointer">
                                <span class="text-gray-700 group-hover:text-sky-600 transition-colors">Informatique</span>
                            </label>
                            <label class="flex items-center space-x-3 cursor-pointer group">
                                <input type="checkbox" name="passions[]" value="voyages"
                                    class="w-5 h-5 text-sky-600 rounded focus:ring-sky-500 focus:ring-2 cursor-pointer">
                                <span class="text-gray-700 group-hover:text-sky-600 transition-colors">Voyages</span>
                            </label>
                            <label class="flex items-center space-x-3 cursor-pointer group">
                                <input type="checkbox" name="passions[]" value="sport"
                                    class="w-5 h-5 text-sky-600 rounded focus:ring-sky-500 focus:ring-2 cursor-pointer">
                                <span class="text-gray-700 group-hover:text-sky-600 transition-colors">Sport</span>
                            </label>
                            <label class="flex items-center space-x-3 cursor-pointer group">
                                <input type="checkbox" name="passions[]" value="lecture"
                                    class="w-5 h-5 text-sky-600 rounded focus:ring-sky-500 focus:ring-2 cursor-pointer">
                                <span class="text-gray-700 group-hover:text-sky-600 transition-colors">Lecture</span>
                            </label>
                        </div>
                    </fieldset>

                    <!-- Bouton de soumission -->
                    <div class="pt-4">
                        <button type="submit"
                            class="w-full bg-sky-500 text-white font-bold py-4 px-6 rounded-lg hover:bg-sky-600 hover:shadow-xl hover:scale-105 transform transition-all duration-300 ease-out focus:outline-none focus:ring-4 focus:ring-sky-300">
                            Valider l'inscription
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <footer class="bg-sky-500 shadow-lg mt-6">
        <nav class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h2 class="text-center text-cyan-100 text-lg font-bold py-4">Merci pour votre visite</h2>
            <ul class="flex h-16 items-center justify-center space-x-8">
                <li><a href="index.php" class="rounded-md bg-white px-4 py-2 text-sm font-medium text-sky-600 hover:bg-sky-50 hover:-rotate-6 hover:translate-x-2 hover:scale-110 transition-all duration-400 ease-in-out shadow-md hover:shadow-2xl">Accueil</a></li>
                <li><a href="index.php" class="rounded-md px-4 py-2 text-sm font-medium text-white hover:bg-sky-600 hover:text-white hover:-rotate-6 hover:translate-x-2 hover:scale-110 transition-all duration-400 ease-in-out shadow-md hover:shadow-2xl">Inscription</a></li>
                <li><a href="index.php" class="rounded-md px-4 py-2 text-sm font-medium text-white hover:bg-sky-600 hover:text-white hover:-rotate-6 hover:translate-x-2 hover:scale-110 transition-all duration-400 ease-in-out shadow-md hover:shadow-2xl">Connexion</a></li>
                <li><a href="index.php" class="rounded-md px-4 py-2 text-sm font-medium text-white hover:bg-sky-600 hover:text-white hover:-rotate-6 hover:translate-x-2 hover:scale-110 transition-all duration-400 ease-in-out shadow-md hover:shadow-2xl">Rechercher</a></li>
            </ul>
        </nav>
    </footer>
</body>

</html>