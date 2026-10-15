<?php
session_start();
$url_actuelle = $_SERVER['REQUEST_URI'];

if (strpos($url_actuelle, '.') !== false) {
    header("Location:./");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">



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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap">
    <link rel="stylesheet" href="assets/css/modern-design.css?v=<?= filemtime('assets/css/modern-design.css') ?>">
    <meta name="theme-color" content="#009d3a">

    <link rel="canonical" href="https://www.sobaps.bj" />


</head>
<style>
    #cookie-banner {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        z-index: 2000;
        font-family: 'Poppins', sans-serif;
        transform: translateY(100%);
        opacity: 0;
        transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.6s ease;
    }

    .cookie-show {
        transform: translateY(0) !important;
        opacity: 1 !important;
    }

    .cookie-container {
        background: rgba(15, 15, 25, 0.95);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border-top: 1px solid rgba(100, 100, 255, 0.2);
        border-radius: 24px 24px 0 0;
        padding: 25px;
        box-shadow: 0 -10px 40px rgba(0, 0, 0, 0.7);
        position: relative;
        overflow: hidden;
    }

    .cookie-container::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, #14a449, #6dff4f);
        background-size: 200% 100%;
        animation: shimmer 3s infinite linear;
    }

    @keyframes shimmer {
        0% {
            background-position: -200% 0;
        }

        100% {
            background-position: 200% 0;
        }
    }

    .cookie-header {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .cookie-icon-small {
        font-size: 2.2rem;
        color: #FFAA00;
        margin-right: 15px;
        filter: drop-shadow(0 0 8px rgba(255, 170, 0, 0.6));
    }

    .cookie-title {
        font-family: 'Orbitron', sans-serif;
        font-weight: 600;
        font-size: 1.5rem;
        background: linear-gradient(90deg, #14a449, #6dff4f);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .cookie-content {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .cookie-text {
        font-weight: 300;
        font-size: 15px;
        line-height: 1.6;
        color: #c0c0e0;
        margin-bottom: 5px;
    }

    .cookie-buttons {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        justify-content: flex-end;
    }

    .cookie-btn {
        font-weight: 500;
        letter-spacing: 0.3px;
        border-radius: 12px;
        padding: 12px 24px;
        font-size: 15px;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
    }

    .cookie-btn-accept {
        background: linear-gradient(90deg, #14a449, #6dff4f);
        color: white;
        box-shadow: 0 5px 15px rgba(0, 212, 255, 0.3);
    }

    .cookie-btn-accept:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0, 212, 255, 0.4);
    }

    .cookie-btn-decline {
        background: rgba(255, 255, 255, 0.1);
        color: white;
        border: 1px solid rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
    }

    .cookie-btn-decline:hover {
        background: rgba(255, 255, 255, 0.15);
        transform: translateY(-3px);
    }

    .cookie-btn-customize {
        background: transparent;
        color: #a855f7;
        border: 1px solid rgba(168, 85, 247, 0.4);
    }

    .cookie-btn-customize:hover {
        background: rgba(168, 85, 247, 0.1);
        transform: translateY(-3px);
    }

    .particles {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: -1;
    }

    .particle {
        position: absolute;
        background: rgba(0, 212, 255, 0.4);
        border-radius: 50%;
        animation: particle-float 15s infinite linear;
    }

    @keyframes particle-float {
        0% {
            transform: translateY(100px) rotate(0deg);
            opacity: 0;
        }

        10% {
            opacity: 1;
        }

        90% {
            opacity: 1;
        }

        100% {
            transform: translateY(-100px) rotate(360deg);
            opacity: 0;
        }
    }

    /* Responsive */
    @media (min-width: 768px) {
        .cookie-content {
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
        }

        .cookie-text {
            max-width: 70%;
            margin-bottom: 0;
        }
    }

    @media (max-width: 767px) {
        .cookie-buttons {
            justify-content: center;
        }

        .cookie-btn {
            flex: 1;
            min-width: 140px;
        }
    }
</style>