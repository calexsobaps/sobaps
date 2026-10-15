<?php
session_start();
$url_actuelle = $_SERVER['REQUEST_URI'];

if (strpos($url_actuelle, '.') !== false) {
    header("Location:./");
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>SOBAPS - Société Béninoise pour l'Approvisionnement en Produits de Santé</title>
    <meta name="description" content="SOBAPS est une entreprise spécialisée dans l'approvisionnement en produits de santé au Bénin. Qualité, fiabilité et efficacité sont nos engagements." />
    <meta name="keywords" content="SOBAPS, Approvisionnement, Produits de santé, Santé Bénin, Médicaments, Dispositifs médicaux" />
    <meta name="robots" content="index, follow" />
    <meta name="language" content="fr" />

    <meta property="og:title" content="SOBAPS - Approvisionnement en Produits de Santé" />
    <meta property="og:description" content="SOBAPS est votre partenaire de confiance pour les produits de santé au Bénin." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.sobaps.bj" />
    <meta property="og:image" content="https://www.sobaps.bj/images/so.png" />
    <meta property="og:locale" content="fr_FR" />
    <meta property="og:site_name" content="SOBAPS" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="SOBAPS - Approvisionnement en Produits de Santé" />
    <meta name="twitter:description" content="SOBAPS fournit des produits de santé de qualité au Bénin." />
    <meta name="twitter:image" content="https://www.sobaps.bj/images/so.png" />
    <meta name="twitter:site" content="@SOBAPS" />

    <link href="assets/img/logo/so.png" rel="shortcut icon" type="image/png" />

    <link rel="icon" type="image/x-icon" href="assets/img/logo/so.png">


    <link rel="stylesheet" href="assets/css/bootstrap.min.css?v=<?= filemtime('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="assets/css/all-fontawesome.min.css?v=<?= filemtime('assets/css/all-fontawesome.min.css') ?>">
    <link rel="stylesheet" href="assets/css/flaticon.css?v=<?= filemtime('assets/css/flaticon.css') ?>">
    <link rel="stylesheet" href="assets/css/animate.min.css?v=<?= filemtime('assets/css/animate.min.css') ?>">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css?v=<?= filemtime('assets/css/magnific-popup.min.css') ?>">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css?v=<?= filemtime('assets/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="assets/css/flex-slider.min.css?v=<?= filemtime('assets/css/flex-slider.min.css') ?>">

    <link rel="stylesheet" href="assets/css/style.css?v=<?= filemtime('assets/css/style.css') ?>">
    <link rel="stylesheet" href="assets/css/preloard.css?v=<?= filemtime('assets/css/preloard.css') ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@500;600;700;800&family=Instrument+Serif:ital@0;1&display=swap">
    <link rel="stylesheet" href="assets/css/modern-design.css?v=<?= filemtime('assets/css/modern-design.css') ?>">
    <meta name="theme-color" content="#009c39">

    <link rel="canonical" href="https://www.sobaps.bj" />


</head>