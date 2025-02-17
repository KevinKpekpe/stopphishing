<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StopPhishing - Connexion Sécurisée</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-50 to-blue-100 min-h-screen">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-xl shadow-2xl max-w-md w-full mx-4 border border-blue-100">
            <!-- Logo -->
            <div class="flex flex-col items-center mb-8 space-y-4">
                <div class="bg-gradient-to-br from-blue-600 to-indigo-600 w-16 h-16 rounded-2xl flex items-center justify-center shadow-md hover:shadow-lg transition-shadow">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h1 class="text-3xl font-bold text-gray-800">
                    Stop<span class="text-blue-600">Phishing</span>
                </h1>
            </div>

            <!-- Formulaire -->
            <form class="space-y-6">
                <!-- Champ Email -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Adresse email</label>
                    <input 
                        type="email" 
                        class="w-full px-4 py-3 border border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent transition-all placeholder-blue-300"
                        placeholder="votre@email.com"
                        required
                    >
                </div>

                <!-- Champ Mot de passe -->
                <div>
                    <div class="flex justify-between items-center mb-2">
                        <label class="block text-sm font-medium text-gray-700">Mot de passe</label>
                        <a href="#" class="text-blue-600 text-sm hover:underline font-medium">Oublié ?</a>
                    </div>
                    <input 
                        type="password" 
                        class="w-full px-4 py-3 border border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent transition-all placeholder-blue-300"
                        placeholder="••••••••"
                        required
                    >
                </div>

                <!-- Bouton Connexion -->
                <button 
                    type="submit"
                    class="w-full bg-gradient-to-br from-blue-600 to-indigo-600 text-white py-3 px-4 rounded-lg font-semibold hover:from-blue-700 hover:to-indigo-700 transition-all transform hover:scale-[1.02] focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2"
                >
                    Se connecter
                </button>
                <!-- Inscription -->
                <p class="text-center text-sm text-blue-600">
                    Pas encore de compte ? 
                    <a href="inscription.php" class="font-semibold hover:underline">S'inscrire</a>
                </p>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="fixed bottom-0 w-full py-4 bg-white border-t border-blue-200">
        <div class="max-w-6xl mx-auto px-4 flex flex-wrap justify-between text-sm text-blue-600">
            <div class="flex space-x-4 mb-2 md:mb-0">
                <select class="bg-transparent outline-none cursor-pointer">
                    <option>Français</option>
                    <option>English</option>
                </select>
            </div>
            <div class="flex flex-wrap space-x-4">
                <a href="#" class="hover:text-blue-800">Sécurité</a>
                <a href="#" class="hover:text-blue-800">Confidentialité</a>
                <a href="#" class="hover:text-blue-800">Conditions</a>
                <a href="#" class="hover:text-blue-800">Signalement</a>
            </div>
        </div>
    </footer>
</body>
</html>