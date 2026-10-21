<?php
include_once 'models/head.php';
include_once 'models/preloard.php';
include_once 'models/header.php';
$imagesDir = "parakou/";
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

    <div class="site-breadcrumb" style="background: url(./assets/img/service/ag_para.jpg)">
        <div class="container">
            <h1 class="breadcrumb-title">Agence régionale de <span>Parakou</span></h1>
            <ul class="breadcrumb-menu">
                <li><a href="accueil"><i class="far fa-home"></i> Accueil</a></li>
                <li class="active">Parakou</li>
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
                                <li data-thumb="assets/img/service/para1.jpg" rel="adjustX:10, adjustY:">
                                    <img src="assets/img/service/para1.jpg" alt="Agence Régionale de Parakou">
                                </li>
                                <li data-thumb="assets/img/service/para2.jpg">
                                    <img src="assets/img/service/para2.jpg" alt="Agence Régionale de Parakou">
                                </li>
                                <li data-thumb="assets/img/service/para3.jpg">
                                    <img src="assets/img/service/para3.jpg" alt="Agence Régionale de Parakou">
                                </li>
                                <li data-thumb="assets/img/service/para4.jpg">
                                    <img src="assets/img/service/para4.jpg" alt="Agence Régionale de Parakou">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="single-item-info">
                        <p class="mb-4">
                            L’Agence régionale de Parakou vient en deuxième position, pour sa contribution au chiffre d’affaires (environ 15% des ventes).
                            <br>
                            Elle est quasi-mitoyenne au Centre de santé de Parakou et se situe dans le prolongement de la voie pavée passant devant l’institut français.
                            <br>
                            Elle dispose de quatre magasins principaux destinés au stockage des médicaments, produits de diagnostic, consommables médicaux, réactifs, intrants antipaludéens, antirétroviraux, matériels, équipements médicaux et produits vétérinaires ainsi que des chambres froides.
                            <br>
                            C’est l’agence qui dessert la partie nord-est du Bénin ainsi que quelques formations sanitaires de la région du centre-nord.
                            <br>
                            Son effectif jeune d’une vingtaine d’agents, dynamiques, courtois et avenants saura donner satisfaction à vos besoins.
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
                                <p><a href="tel:+2290191484242">+229 01 91 48 42 42</a></p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="contact-info-content">
                                <h3>Téléphone 2</h3>
                                <p><a href="tel:+2290199430404">+229 01 99 43 04 04</a></p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="contact-info-content">
                                <h3>Email</h3>
                                <p><a href="mailto:parakou@sobaps.bj">parakou@sobaps.bj</a></p>
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
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3936.931745754002!2d2.62670217357427!3d9.339307784057388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10321ab9db8c6cff%3A0x31574fdd125fe56b!2sAgence%20R%C3%A9gionale%20SoBAPS%20Parakou!5e0!3m2!1sfr!2sbj!4v1701698485985!5m2!1sfr!2sbj"
                            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>

                <!-- <div class="single-item-details">
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
                </div> -->

            </div>
        </div>
    </div>


</main>
<?php
include_once 'models/footer.php';
include_once 'models/link.php';
?>