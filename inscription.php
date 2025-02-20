<?php
session_start();

require_once('db.php');

$errors = [];
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nom = trim(filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING));
  $prenom = trim(filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_STRING));
  $sexe = trim(filter_input(INPUT_POST, 'sexe', FILTER_SANITIZE_STRING));
  $date_naissance = trim(filter_input(INPUT_POST, 'date_naissance', FILTER_SANITIZE_STRING));
  $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
  $telephone = trim(filter_input(INPUT_POST, 'telephone', FILTER_SANITIZE_STRING));
  $mot_de_passe = trim(filter_input(INPUT_POST, 'mot_de_passe', FILTER_SANITIZE_STRING));

  // Validation des champs
  if (empty($nom)) {
    $errors[] = "Le nom est requis";
  }
  if (empty($prenom)) {
    $errors[] = "Le prénom est requis";
  }
  if (!in_array($sexe, ['M', 'F', 'A'])) {
    $errors[] = "Le sexe sélectionné n'est pas valide";
  }
  if (empty($date_naissance)) {
    $errors[] = "La date de naissance est requise";
  }
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "L'adresse email n'est pas valide";
  }
  if (!preg_match("/^[0-9]{10}$/", $telephone)) {
    $errors[] = "Le numéro de téléphone n'est pas valide";
  }
  if (strlen($mot_de_passe) < 8) {
    $errors[] = "Le mot de passe doit contenir au moins 8 caractères";
  }

  // Vérification si l'email existe déjà
  $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE email = ?");
  $stmt->execute([$email]);
  if ($stmt->fetchColumn() > 0) {
    $errors[] = "Cette adresse email est déjà utilisée";
  }

  // Traitement de la photo
  $photo_path = null;
  if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
    $allowed = ['jpg', 'jpeg', 'png', 'gif'];
    $filename = $_FILES['photo']['name'];
    $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

    if (!in_array($ext, $allowed)) {
      $errors[] = "Le format de l'image n'est pas accepté";
    } else {
      $photo_path = 'uploads/' . uniqid() . '.' . $ext;
      if (!move_uploaded_file($_FILES['photo']['tmp_name'], $photo_path)) {
        $errors[] = "Erreur lors de l'upload de l'image";
      }
    }
  }

  // Si aucune erreur, insertion dans la base de données
  if (empty($errors)) {
    try {
      $stmt = $pdo->prepare("
                INSERT INTO users (nom, prenom, sexe, date_naissance, email, telephone, photo_profil, mot_de_passe, role)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, 'internaute')
            ");

      $stmt->execute([
        $nom,
        $prenom,
        $sexe,
        $date_naissance,
        $email,
        $telephone,
        $photo_path,
        password_hash($mot_de_passe, PASSWORD_DEFAULT)
      ]);

      $success = true;
      header("refresh:3;url=connexion.php"); // Redirection après 3 secondes
    } catch (PDOException $e) {
      $errors[] = "Erreur lors de l'inscription : " . $e->getMessage();
    }
  }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>StopPhishing - Inscription</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-blue-50 to-blue-100 min-h-screen">
  <div class="flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-xl shadow-2xl max-w-3xl w-full mx-4 border border-blue-100">
      <!-- Logo -->
      <div class="flex flex-col items-center mb-8 space-y-4">
        <div class="bg-gradient-to-br from-blue-600 to-indigo-600 w-16 h-16 rounded-2xl flex items-center justify-center shadow-md hover:shadow-lg transition-shadow">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
          </svg>
        </div>
        <h1 class="text-3xl font-bold text-gray-800">
          Stop<span class="text-blue-600">Phishing</span>
        </h1>
        <p class="text-blue-600 text-sm">Création de compte</p>
      </div>

      <!-- Formulaire d'inscription en grille 3 par 3 -->
      <form class="space-y-4" method="post" enctype="multipart/form-data">
        <!-- Ajoutez ceci juste après l'ouverture du formulaire dans votre HTML -->
        <?php if (!empty($errors)): ?>
          <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
            <strong class="font-bold">Erreurs :</strong>
            <ul class="list-disc list-inside">
              <?php foreach ($errors as $error): ?>
                <li><?php echo htmlspecialchars($error); ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
        <?php endif; ?>

        <?php if ($success): ?>
          <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <strong class="font-bold">Succès !</strong>
            <span class="block sm:inline">Votre compte a été créé avec succès. Redirection en cours...</span>
          </div>
        <?php endif; ?>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
          <!-- Champ 1 : Nom -->
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Nom</label>
            <input
              type="text"
              class="w-full px-4 py-3 border border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 transition-all"
              required>
          </div>

          <!-- Champ 2 : Prénom -->
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Prénom</label>
            <input
              type="text"
              class="w-full px-4 py-3 border border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 transition-all"
              required>
          </div>

          <!-- Champ 3 : Sexe -->
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Sexe</label>
            <select
              class="w-full px-4 py-3 border border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 transition-all"
              required>
              <option value="">Sélectionner</option>
              <option value="M">Masculin</option>
              <option value="F">Féminin</option>
              <option value="A">Autre</option>
            </select>
          </div>

          <!-- Champ 4 : Date de naissance -->
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Date de naissance</label>
            <input
              type="date"
              class="w-full px-4 py-3 border border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 transition-all"
              required>
          </div>

          <!-- Champ 5 : Email -->
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
            <input
              type="email"
              class="w-full px-4 py-3 border border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 transition-all"
              required>
          </div>

          <!-- Champ 6 : Téléphone -->
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Téléphone</label>
            <input
              type="tel"
              class="w-full px-4 py-3 border border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 transition-all"
              pattern="[0-9]{10}"
              placeholder="0612345678"
              required>
          </div>

          <!-- Champ 7 : Photo de profil (sur toute la largeur) -->
          <div class="md:col-span-3">
            <label class="block text-sm font-medium text-gray-700 mb-2">Photo de profil</label>
            <div class="flex items-center space-x-4">
              <div class="shrink-0">
                <img id="preview" class="h-16 w-16 object-cover rounded-full border-2 border-blue-200" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Preview">
              </div>
              <label class="block">
                <input
                  type="file"
                  class="block w-full text-sm text-blue-600
                    file:mr-4 file:py-2 file:px-4
                    file:rounded-full file:border-0
                    file:text-sm file:font-semibold
                    file:bg-blue-50 file:text-blue-700
                    hover:file:bg-blue-100"
                  accept="image/*"
                  onchange="document.getElementById('preview').src = window.URL.createObjectURL(this.files[0])">
              </label>
            </div>
          </div>
        </div>

        <!-- Bouton d'inscription -->
        <button
          type="submit"
          class="w-full bg-gradient-to-br from-blue-600 to-indigo-600 text-white py-3 px-4 rounded-lg font-semibold hover:from-blue-700 hover:to-indigo-700 transition-all transform hover:scale-[1.02] focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 mt-6">
          S'inscrire
        </button>

        <!-- Lien connexion -->
        <p class="text-center text-sm text-blue-600 mt-4">
          Déjà un compte ?
          <a href="connexion.php" class="font-semibold hover:underline">Se connecter</a>
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