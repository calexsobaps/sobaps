<?php
include_once 'models/head.php';
include_once 'models/preloard.php';
include_once 'models/header.php';
?>
<main class="main">

    <div class="site-breadcrumb" style="background: url(./assets/img/breadcrumb/actualites.svg)">
        <div class="container">
            <h1 class="breadcrumb-title">Actualités</h1>
            <ul class="breadcrumb-menu">
                <li><a href="accueil"><i class="far fa-home"></i>&nbsp;Accueil</a></li>
                <li class="active">Actualités</li>
            </ul>
        </div>
    </div>


    <?php
    include_once 'models/actualites.php';
    $actus_sante = array_values(array_filter($actualites, function ($a) {
        return $a['groupe'] === 'sante';
    }));
    $actus_sobaps = array_values(array_filter($actualites, function ($a) {
        return $a['groupe'] === 'sobaps';
    }));
    $une = null;
    foreach ($actus_sante as $a) {
        if (!empty($a['une'])) {
            $une = $a;
            break;
        }
    }
    if (!$une && $actus_sante) $une = $actus_sante[0];
    // Thèmes proposés dans les filtres : ceux des cartes de la grille (hors « À la une »)
    $themes_presents = array();
    foreach ($actus_sante as $a) {
        if (!$une || $a['id'] !== $une['id']) $themes_presents[] = $a['theme'];
    }
    ?>

    <section class="sb-newsroom py-120">
        <div class="container">
            <div class="site-heading text-center">
                <span class="site-title-tagline">Actualités</span>
                <h2 class="site-title">L’actualité de la <span>santé</span> au Bénin</h2>
                <div class="heading-divider"></div>
                <p>Politiques de santé, médicament, prévention, infrastructures : suivez les informations qui comptent pour le secteur de la santé au Bénin.</p>
            </div>

            <div class="sb-news-tabs" role="tablist" aria-label="Catégories d’actualités">
                <button type="button" role="tab" id="tab-sante" aria-controls="panel-sante" aria-selected="true">
                    <i class="fas fa-earth-africa"></i> Santé au Bénin <span class="sb-news-count"><?= count($actus_sante) ?></span>
                </button>
                <button type="button" role="tab" id="tab-sobaps" aria-controls="panel-sobaps" aria-selected="false" tabindex="-1">
                    <i class="fas fa-building-shield"></i> SoBAPS S.A <span class="sb-news-count"><?= count($actus_sobaps) ?></span>
                </button>
            </div>

            <div class="sb-news-panel" role="tabpanel" id="panel-sante" aria-labelledby="tab-sante">
                <?php if ($une) { ?>
                    <p class="sb-news-label">À la une</p>
                    <?php sb_news_card($une, $themes_actu, 'une'); ?>
                <?php } ?>

                <div class="sb-news-toolbar">
                    <p class="sb-news-label">Toutes les actualités</p>
                    <div class="sb-news-chips" role="group" aria-label="Filtrer par thème">
                        <button type="button" class="active" data-filter="*" aria-pressed="true">Tous les thèmes</button>
                        <?php foreach ($themes_actu as $k => $t) {
                            if (!in_array($k, $themes_presents)) continue; ?>
                            <button type="button" data-filter="<?= $k ?>" aria-pressed="false"><i class="fas <?= $t['icon'] ?>"></i> <?= $t['label'] ?></button>
                        <?php } ?>
                    </div>
                </div>

                <div class="sb-news-grid">
                    <?php foreach ($actus_sante as $a) {
                        if ($une && $a['id'] === $une['id']) continue;
                        sb_news_card($a, $themes_actu);
                    } ?>
                </div>

                <p class="sb-news-note"><i class="far fa-circle-info"></i> Résumés rédigés par la SoBAPS S.A à partir de sources publiques. Chaque carte renvoie vers l’article d’origine.</p>
            </div>

            <div class="sb-news-panel" role="tabpanel" id="panel-sobaps" aria-labelledby="tab-sobaps" hidden>
                <?php if ($actus_sobaps) { ?>
                    <div class="sb-news-grid">
                        <?php foreach ($actus_sobaps as $a) sb_news_card($a, $themes_actu); ?>
                    </div>
                <?php } else { ?>
                    <div class="sb-news-empty">
                        <div class="sb-news-empty-icon" aria-hidden="true"><i class="fas fa-newspaper"></i></div>
                        <h3>Les actualités de la SoBAPS S.A arrivent bientôt</h3>
                        <p>Nos prochaines activités, annonces et événements seront publiés ici. En attendant, découvrez la SoBAPS S.A en images.</p>
                        <a href="galeries" class="theme-btn">Voir la photothèque <i class="fas fa-arrow-right"></i></a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

</main>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var tabs = Array.prototype.slice.call(document.querySelectorAll('.sb-news-tabs [role="tab"]'));

        function activer(tab, focus) {
            tabs.forEach(function(t) {
                var on = t === tab;
                t.setAttribute('aria-selected', on);
                t.tabIndex = on ? 0 : -1;
                document.getElementById(t.getAttribute('aria-controls')).hidden = !on;
            });
            if (focus) tab.focus();
        }
        tabs.forEach(function(tab, i) {
            tab.addEventListener('click', function() {
                activer(tab);
                history.replaceState(null, '', tab.id === 'tab-sobaps' ? '#sobaps' : location.pathname);
            });
            tab.addEventListener('keydown', function(e) {
                if (e.key !== 'ArrowRight' && e.key !== 'ArrowLeft') return;
                activer(tabs[(i + (e.key === 'ArrowRight' ? 1 : tabs.length - 1)) % tabs.length], true);
            });
        });
        if (location.hash === '#sobaps') activer(document.getElementById('tab-sobaps'));

        var chips = Array.prototype.slice.call(document.querySelectorAll('.sb-news-chips button'));
        var cartes = Array.prototype.slice.call(document.querySelectorAll('#panel-sante .sb-news-grid .sb-news'));
        chips.forEach(function(chip) {
            chip.addEventListener('click', function() {
                var f = chip.getAttribute('data-filter');
                chips.forEach(function(c) {
                    c.classList.toggle('active', c === chip);
                    c.setAttribute('aria-pressed', c === chip);
                });
                cartes.forEach(function(c) {
                    c.hidden = f !== '*' && c.getAttribute('data-theme') !== f;
                });
            });
        });
    });
</script>


<?php
include_once 'models/footer.php';
include_once 'models/link.php';
?>