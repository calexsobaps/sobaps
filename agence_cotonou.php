<?php
include_once 'models/head.php';
include_once 'models/preloard.php';
include_once 'models/header.php';
$imagesDir = "cotonou/";
$imagesPerPage = 9;

$images = array_filter(is_dir($imagesDir) ? scandir($imagesDir) : [], function ($file) use ($imagesDir) {
    return preg_match('/\.(jpg|jpeg|png|gif)$/i', $file) && is_file($imagesDir . $file);
});

$images = array_values($images);
$totalImages = count($images);
$totalPages = ceil($totalImages / $imagesPerPage);

$page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
$page = min($page, $totalPages);
$start = ($page - 1) * $imagesPerPage;
$imagesToShow = array_slice($images, $start, $imagesPerPage);
?>

<main class="main">

    <div class="site-breadcrumb" style="background: url(./assets/img/service/ag_cotonou.JPG)">
        <div class="container">
            <h1 class="breadcrumb-title">Agence régionale de <span>Cotonou</span></h1>
            <ul class="breadcrumb-menu">
                <li><a href="accueil"><i class="far fa-home"></i> Accueil</a></li>
                <li class="active">Cotonou</li>
            </ul>
        </div>
    </div>


    <div class="shop-item-single py-120">
        <div class="container">
            <div class="row rows">
                <div class="col-lg-12">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline">Présentation</span>
                        <h2 class="site-title">L’agence <span>en bref</span></h2>
                        <div class="heading-divider"></div>
                        <p>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="item-gallery">
                        <div class="flexslider-thumbnails">
                            <ul class="slides">
                                <li data-thumb="assets/img/service/ca1.JPG" rel="adjustX:10, adjustY:">
                                    <img src="assets/img/service/ca1.JPG" alt="Agence Régionale de Cotonou">
                                </li>
                                <li data-thumb="assets/img/service/ca2.JPG">
                                    <img src="assets/img/service/ca2.JPG" alt="Agence Régionale de Cotonou">
                                </li>
                                <li data-thumb="assets/img/service/ca3.JPG">
                                    <img src="assets/img/service/ca3.JPG" alt="Agence Régionale de Cotonou">
                                </li>
                                <li data-thumb="assets/img/service/ca4.JPG">
                                    <img src="assets/img/service/ca4.JPG" alt="Agence Régionale de Cotonou">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="single-item-info">
                        <p class="mb-4">
                            L’Agence régionale de Cotonou est l’agence principale de la SoBAPS S.A pour sa contribution au chiffre d’affaires (environ 75% des ventes).
                            <br>
                            Elle est basée dans l’enceinte du Ministère de la santé à PK3 Akpakpa.
                            <br>
                            On y dénombre cinq magasins principaux destinés au stockage des médicaments, produits de diagnostic, consommables médicaux, réactifs, intrants antipaludéens, antirétroviraux, matériels, équipements médicaux et produits vétérinaires ainsi que des chambres froides.
                            <br>
                            Compte tenu du flux des opérations, elle dispose de deux postes de facturation, contrairement aux deux autres agences de la partie septentrionale.
                            <br>
                            Proche des centres nationaux de référence ainsi que des agences et programmes spécifiques de lutte contre les affections prioritaires en République du Bénin, l’Agence de Cotonou a la particularité de détenir quelques intrants rares qui participent aux soins des populations des départements du sud et du centre.
                            <br>
                            Son effectif jeune d’une quarantaine d’agents, dynamiques, courtois et avenants saura donner satisfaction à vos besoins.
                        </p>
                    </div>
                </div>
                <hr>
                <div class="col-lg-4 mb-4 mt-4 mt-lg-5">
                    <div class="contact-content">

                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="contact-info-content">
                                <h3>Téléphone 1</h3>
                                <p><a href="tel:+2290191484040">+229 01 91 48 40 40</a></p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="contact-info-content">
                                <h3>Téléphone 2</h3>
                                <p><a href="tel:+2290199430303">+229 01 99 43 03 03</a></p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="contact-info-content">
                                <h3>Email</h3>
                                <p><a href="mailto:cotonou@soaps.bj">cotonou@soaps.bj</a></p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-clock"></i>
                            </div>
                            <div class="contact-info-content">
                                <h3>Horaires d'ouverture</h3>
                                <p>Lun - Dim (08h - 18h)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 mt-lg-5">
                    <div class="contact-map" style="margin-top: 0px !important;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7930.468048079724!2d2.461690013669344!3d6.363751534701071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103caad412560cef%3A0x9d9339e0fd16818f!2sAgence%20R%C3%A9gionale%20SoBAPS%20Cotonou!5e0!3m2!1sfr!2sbj!4v1701698249111!5m2!1sfr!2sbj"
                            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>


                <div class="single-item-details">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-tab1" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">Photos</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="tab1" role="tabpanel" aria-labelledby="nav-tab1">
                            <div class="single-item-desc">
                                <div class="row popup-gallery">
                                    <?php foreach ($imagesToShow as $index => $img): ?>

                                        <div class="col-md-6 col-lg-4">
                                            <div class="case-item">
                                                <div class="case-img">
                                                    <img src="<?= $imagesDir . $img ?>"
                                                        class="img-fluid"
                                                        data-index="<?= $index ?>"
                                                        data-src="<?= $imagesDir . $img ?>"
                                                        data-title="<?= htmlspecialchars($img) ?>">
                                                    <a class="popup-img case-link" href="<?= $imagesDir . $img ?>">
                                                        <i class="far fa-camera"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>

                                    <?php if ($totalPages > 1): ?>
                                    <div class="pagination-area">
                                        <div aria-label="Page navigation example">
                                            <ul class="pagination">
                                                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                                                    <li class="page-item <?= $i == $page ? 'active' : '' ?>">
                                                        <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                                                    </li>
                                                <?php endfor; ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php endif; ?>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>


</main>
<?php
include_once 'models/footer.php';
include_once 'models/link.php';
?>