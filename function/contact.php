<?php
session_start();
if (
    $_SERVER['REQUEST_METHOD'] !== 'POST' || empty($_SERVER['HTTP_X_REQUESTED_WITH']) ||
    strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest'
) {
    http_response_code(403);
    echo json_encode(['message' => 'Accès non autorisé.']);
    exit;
}

if (empty($_POST['csrf_token']) || $_POST['csrf_token'] !== ($_SESSION['csrf_token'] ?? '')) {
    http_response_code(400);
    echo json_encode(['message' => 'Échec de vérification du formulaire.']);
    exit;
}

// Pot de miel : un robot remplit le champ caché « website »
if (!empty($_POST['website'])) {
    echo json_encode(['message' => 'Votre message a bien été envoyé. Merci !']);
    exit;
}

function clean_input($data)
{
    $data = strip_tags($data);
    $data = preg_replace('/https?:\/\/[^\s]+/', '', $data);
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

$nom       = clean_input($_POST['nom'] ?? '');
$email     = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
$telephone = clean_input($_POST['telephone'] ?? '');
$secteur   = clean_input($_POST['secteur'] ?? '');
$message   = clean_input($_POST['message'] ?? '');

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['message' => 'Adresse email invalide.']);
    exit;
}

$to      = "contact@sobaps.bj";
$subject = "Message depuis le site SOBAPS";
$headers = "From: no-reply@sobaps.bj\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

$content = <<<EOD
Nom/Organisation : $nom
Email : $email
Téléphone : $telephone
Secteur d’activité : $secteur

Message :
$message
EOD;

if (mail($to, $subject, $content, $headers)) {
    echo json_encode(['message' => 'Votre message a bien été envoyé. Merci !']);
} else {
    http_response_code(500);
    echo json_encode(['message' => "Une erreur s'est produite, veuillez réessayer."]);
}
