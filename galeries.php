<?php
include_once 'models/head.php';
include_once 'models/preloard.php';
include_once 'models/header.php';
$imagesDir = "photos/";
$imagesPerPage = 21;

$images = array_filter(scandir($imagesDir), function ($file) use ($imagesDir) {
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

    <div class="site-breadcrumb" style="background: url(./assets/img/breadcrumb/L1004610-scaled.jpg)">
        <div class="container">
            <h2 class="breadcrumb-title">Photothèque</h2>
            <ul class="breadcrumb-menu">
                <li><a href="accueil"><i class="far fa-home"></i>&nbsp;Accueil</a></li>
                <li class="active">Photothèque</li>
            </ul>
        </div>
    </div>





    <div class="case-area py-120">
        <div class="container">

            <div class="row rows">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline">SoBAPS S.A</span>
                        <h2 class="site-title">La SoBAPS S.A en <span>Images</span></h2>
                        <div class="heading-divider"></div>
                        <p>
                            Une galerie institutionnelle illustrant l’engagement, l’évolution et les réalisations de la SoBAPS S.A </p>
                    </div>
                </div>
            </div>

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


            </div>
        </div>
    </div>

</main>
<?php
include_once 'models/footer.php';
include_once 'models/link.php';
?>