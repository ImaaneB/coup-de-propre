<?php
declare(strict_types=1);

session_start();

function afficherErreurs(array $erreurs): void
{
    http_response_code(400);

    echo '<!doctype html>';
    echo '<html lang="fr">';
    echo '<head>';
    echo '<meta charset="UTF-8">';
    echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
    echo '<title>Vérification de la demande — Coup de Propre</title>';
    echo '<link rel="stylesheet" href="../assets/css/style.css">';
    echo '</head>';
    echo '<body>';
    echo '<main class="reservation-section">';
    echo '<section class="reservation-form-card" style="max-width: 700px; margin: 30px auto;">';
    echo '<h1>Vérifiez votre demande</h1>';
    echo '<ul>';

    foreach ($erreurs as $erreur) {
        echo '<li>' . htmlspecialchars($erreur, ENT_QUOTES, 'UTF-8') . '</li>';
    }

    echo '</ul>';
    echo '<p><a href="../index.php#reservation">Retourner au formulaire</a></p>';
    echo '</section>';
    echo '</main>';
    echo '</body>';
    echo '</html>';
    exit;
}

function valeurPost(string $nom): string
{
    $valeur = $_POST[$nom] ?? '';

    if (!is_string($valeur)) {
        return '';
    }

    return trim($valeur);
}

// La page doit recevoir les données du formulaire avec la méthode POST.
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../index.php#reservation');
    exit;
}

// Vérification du jeton CSRF avant de traiter les informations.
$jetonSession = $_SESSION['csrf_token'] ?? '';
$jetonFormulaire = valeurPost('csrf_token');

if (
    !is_string($jetonSession)
    || $jetonSession === ''
    || $jetonFormulaire === ''
    || !hash_equals($jetonSession, $jetonFormulaire)
) {
    afficherErreurs([
        'Le formulaire a expiré ou sa vérification a échoué. Veuillez réessayer.'
    ]);
}

// Récupération des champs envoyés par le formulaire.
$nom = valeurPost('nom');
$telephone = valeurPost('telephone');
$email = valeurPost('email');
$adresse = valeurPost('adresse');
$prestation = valeurPost('prestation');
$dateSouhaitee = valeurPost('date_souhaitee');
$commentaire = valeurPost('commentaire');

// Vérification des données côté serveur.
$erreurs = [];

if ($nom === '' || strlen($nom) > 100) {
    $erreurs[] = 'Veuillez saisir votre nom et votre prénom.';
}

if ($telephone === '' || strlen($telephone) > 30) {
    $erreurs[] = 'Veuillez saisir un numéro de téléphone valide.';
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 190) {
    $erreurs[] = 'Veuillez saisir une adresse e-mail valide.';
}

if ($adresse === '' || strlen($adresse) > 255) {
    $erreurs[] = 'Veuillez saisir l’adresse de l’intervention.';
}

$prestationsAutorisees = [
    'regulier',
    'ponctuel',
    'grand-nettoyage'
];

if (!in_array($prestation, $prestationsAutorisees, true)) {
    $erreurs[] = 'Veuillez choisir une prestation proposée.';
}

$date = DateTimeImmutable::createFromFormat('!Y-m-d', $dateSouhaitee);

if (
    $date === false
    || $date->format('Y-m-d') !== $dateSouhaitee
    || $date < new DateTimeImmutable('today')
) {
    $erreurs[] = 'Veuillez choisir une date valide, à partir d’aujourd’hui.';
}

if (strlen($commentaire) > 1000) {
    $erreurs[] = 'Les précisions ne doivent pas dépasser 1 000 caractères.';
}

if ($erreurs !== []) {
    afficherErreurs($erreurs);
}

// Enregistrement de la demande dans MySQL avec une requête préparée.
try {
    require_once __DIR__ . '/../config/database.php';

    $requete = '
        INSERT INTO demandes
            (nom, email, telephone, adresse, prestation, date_souhaitee, commentaire)
        VALUES
            (:nom, :email, :telephone, :adresse, :prestation, :date_souhaitee, :commentaire)
    ';

    $statement = $pdo->prepare($requete);

    $statement->execute([
        'nom' => $nom,
        'email' => $email,
        'telephone' => $telephone,
        'adresse' => $adresse,
        'prestation' => $prestation,
        'date_souhaitee' => $dateSouhaitee,
        'commentaire' => $commentaire !== '' ? $commentaire : null,
    ]);

    // Le jeton est renouvelé pour la prochaine demande.
    unset($_SESSION['csrf_token']);

    header('Location: confirmation.php');
    exit;
} catch (Throwable $exception) {
    error_log($exception->getMessage());

    http_response_code(500);
    echo 'La demande n’a pas pu être enregistrée. Veuillez réessayer plus tard.';
}