/* =====================================================================
   SoBAPS S.A — Modern effects
   Chargé APRÈS main.js. Slider hero premium, popups, lightbox, toasts,
   révélations au scroll, tilt 3D, progression de lecture.
   ===================================================================== */
(function ($) {
    "use strict";

    var reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
    var finePointer = window.matchMedia("(hover: hover) and (pointer: fine)").matches;

    function el(tag, cls, html) {
        var n = document.createElement(tag);
        if (cls) n.className = cls;
        if (html != null) n.innerHTML = html;
        return n;
    }

    function storage(type) {
        try { return window[type]; } catch (e) { return null; }
    }

    /* ---------------------------------------------------------------
       1. Barre de progression + bouton retour en haut
       --------------------------------------------------------------- */
    var progress = el("div");
    progress.id = "sb-progress";
    document.body.appendChild(progress);

    var topBtn = document.getElementById("scroll-top");
    var ring = null;
    if (topBtn) {
        topBtn.insertAdjacentHTML("afterbegin",
            '<svg viewBox="0 0 54 54" aria-hidden="true"><circle class="bg" cx="27" cy="27" r="25"/><circle class="fg" cx="27" cy="27" r="25"/></svg>');
        topBtn.setAttribute("aria-label", "Retour en haut");
        ring = topBtn.querySelector(".fg");
    }

    var ticking = false;
    function onScroll() {
        var doc = document.documentElement;
        var max = doc.scrollHeight - window.innerHeight;
        var p = max > 0 ? Math.min(1, window.scrollY / max) : 0;
        progress.style.transform = "scaleX(" + p + ")";
        if (topBtn) {
            topBtn.classList.toggle("show", window.scrollY > 300);
            if (ring) ring.style.strokeDashoffset = 157 - 157 * p;
        }
        ticking = false;
    }
    window.addEventListener("scroll", function () {
        if (!ticking) { ticking = true; requestAnimationFrame(onScroll); }
    }, { passive: true });
    onScroll();

    /* ---------------------------------------------------------------
       2. Navigation : réserve la hauteur pour éviter le saut au passage en fixed-top
       --------------------------------------------------------------- */
    var mainNav = document.querySelector(".main-navigation");
    var navbar = mainNav && mainNav.querySelector(".navbar");
    function reserveNav() {
        if (!mainNav || !navbar || navbar.classList.contains("fixed-top")) return;
        mainNav.style.minHeight = navbar.offsetHeight + "px";
    }
    reserveNav();
    window.addEventListener("resize", reserveNav);

    // Ferme le menu mobile après un clic sur un lien
    if (navbar) {
        navbar.querySelectorAll(".dropdown-item, .nav-link:not(.dropdown-toggle)").forEach(function (a) {
            a.addEventListener("click", function () {
                var open = document.querySelector("#main_nav.show");
                if (open && window.bootstrap) bootstrap.Collapse.getOrCreateInstance(open).hide();
            });
        });
    }

    /* ---------------------------------------------------------------
       3. Défilement doux vers les ancres internes (avec décalage du header)
       --------------------------------------------------------------- */
    document.addEventListener("click", function (e) {
        var a = e.target.closest('a[href*="#"]');
        if (!a || a.hasAttribute("data-bs-toggle") || a.closest(".sb-overlay")) return;
        var url = new URL(a.href, location.href);
        if (url.pathname !== location.pathname || !url.hash || url.hash.length < 2) return;
        var target = document.getElementById(decodeURIComponent(url.hash.slice(1)));
        if (!target) return;
        e.preventDefault();
        var y = target.getBoundingClientRect().top + window.scrollY - 90;
        window.scrollTo({ top: y, behavior: reduceMotion ? "auto" : "smooth" });
        history.pushState(null, "", url.hash);
    });

    /* ---------------------------------------------------------------
       4. Slider hero premium
       --------------------------------------------------------------- */
    var $hero = $(".hero-slider");
    if ($hero.length && $.fn.owlCarousel) {
        var SLIDE_TIME = 6500;

        // Les animations du contenu sont gérées par CSS (.owl-item.active)
        $hero.find(".wow").removeClass("wow animate__animated animate__fadeInUp")
            .removeAttr("data-wow-duration data-wow-delay").css({ visibility: "", animationName: "" });

        $hero.trigger("destroy.owl.carousel");
        // Photo dans un cadre arrondi, couleurs d'origine (aucun filtre)
        $hero.find(".hero-single").each(function () {
            var bg = this.style.backgroundImage;
            if (bg) {
                var layer = el("div", "sb-hero-bg");
                layer.style.backgroundImage = bg;
                this.style.backgroundImage = "none";
                var holder = el("div", "sb-hero-media");
                holder.appendChild(layer);
                this.insertBefore(holder, this.firstChild);
            }
        });

        var total = $hero.find(".hero-single").length;
        var $section = $hero.closest(".hero-section");
        $section.addClass("sb-hero-split");
        if (total < 2) $section.addClass("sb-single");
        var counter = el("div", "sb-hero-counter", "<b>01</b><span>/ " + String(total).padStart(2, "0") + "</span>");
        var bar = el("div", "sb-hero-bar", "<i></i>");
        var cue = el("a", "sb-scroll-cue");
        cue.href = "#sb-after-hero";
        cue.setAttribute("aria-label", "Défiler vers le contenu");
        $section.append(counter, bar, cue);
        var next = $section.next()[0];
        if (next && !next.id) next.id = "sb-after-hero";
        bar.style.setProperty("--sb-slide-time", SLIDE_TIME + "ms");

        function restartBar() {
            var i = bar.firstChild;
            i.classList.remove("run");
            void i.offsetWidth;
            if (!reduceMotion) i.classList.add("run");
        }

        $hero.on("initialized.owl.carousel changed.owl.carousel", function (e) {
            if (!e.namespace || !e.page) return;
            var idx = e.page.index < 0 ? 0 : e.page.index;
            counter.firstChild.textContent = String(idx + 1).padStart(2, "0");
            restartBar();
        });

        $hero.owlCarousel({
            items: 1,
            loop: total > 1,
            margin: 0,
            nav: total > 1,
            dots: total > 1,
            autoplay: !reduceMotion && total > 1,
            autoplayTimeout: SLIDE_TIME,
            autoplayHoverPause: false,
            smartSpeed: 900,
            animateOut: "fadeOut",
            mouseDrag: true,
            touchDrag: true,
            navText: [
                "<i class='fas fa-arrow-left'></i>",
                "<i class='fas fa-arrow-right'></i>"
            ]
        });

        // Le slider se met en pause si l'onglet n'est pas visible
        document.addEventListener("visibilitychange", function () {
            $hero.trigger(document.hidden ? "stop.owl.autoplay" : "play.owl.autoplay", [SLIDE_TIME]);
            if (!document.hidden) restartBar();
        });

        // Navigation clavier
        document.addEventListener("keydown", function (e) {
            if (document.querySelector(".sb-overlay.open")) return;
            var r = $hero[0].getBoundingClientRect();
            if (r.bottom < 0 || r.top > window.innerHeight) return;
            if (e.key === "ArrowRight") $hero.trigger("next.owl.carousel");
            if (e.key === "ArrowLeft") $hero.trigger("prev.owl.carousel");
        });

        // Léger parallaxe du contenu
        if (!reduceMotion) {
            window.addEventListener("scroll", function () {
                var y = window.scrollY;
                if (y > window.innerHeight) return;
                $hero.find(".owl-item.active .hero-content").css({
                    transform: "translate3d(0," + (y * 0.25) + "px,0)",
                    opacity: Math.max(0, 1 - y / 700)
                });
            }, { passive: true });
        }
    }

    /* ---------------------------------------------------------------
       4b. En-têtes de pages : la photo passe dans un cadre (couleurs d'origine)
       --------------------------------------------------------------- */
    document.querySelectorAll(".site-breadcrumb").forEach(function (n) {
        var bg = n.style.backgroundImage;
        if (!bg || bg === "none") return;
        var media = el("div", "sb-page-media");
        media.style.backgroundImage = bg;
        media.setAttribute("aria-hidden", "true");
        n.style.background = "";
        n.insertBefore(media, n.firstChild);
    });

    // Compte à rebours terminé : on masque les compteurs à zéro
    var countdown = document.getElementById("countdown");
    if (countdown) {
        setTimeout(function () {
            var nums = countdown.querySelectorAll("h2");
            var done = nums.length && Array.prototype.every.call(nums, function (h) { return h.textContent.trim() === "0"; });
            if (done) countdown.style.display = "none";
        }, 1500);
    }

    /* ---------------------------------------------------------------
       5. Révélation au scroll
       --------------------------------------------------------------- */
    var revealSel = [
        ".site-heading", ".feature-item", ".service-item", ".blog-item", ".team-item",
        ".counter-box", ".case-item", ".blockqoute", ".about-left", ".about-right",
        ".about-list li", ".banner-thumb", ".banner-info", ".footer-widget-box",
        ".appointment-content", ".choose-content", ".hero-static .hero-content",
        ".testimonial-slider", ".partner-wrapper", ".sb-glossary-item", ".contact-info"
    ].join(",");

    var revealEls = Array.prototype.filter.call(document.querySelectorAll(revealSel), function (n) {
        return !n.closest(".hero-slider") && !n.classList.contains("wow") && !n.closest(".sb-reveal");
    });

    revealEls.forEach(function (n) {
        n.classList.add("sb-reveal");
        if (n.matches(".about-left, .banner-thumb")) n.classList.add("sb-left");
        else if (n.matches(".about-right, .banner-info")) n.classList.add("sb-right");
        else if (n.matches(".counter-box, .blockqoute")) n.classList.add("sb-zoom");
        // décalage en cascade entre éléments frères d'une même grille
        var col = n.parentElement && n.parentElement.closest(".row") ? n.closest("[class*='col-']") || n : n;
        var siblings = col.parentElement ? Array.prototype.indexOf.call(col.parentElement.children, col) : 0;
        n.style.setProperty("--sb-d", (Math.min(siblings, 5) * 110) + "ms");
    });

    if ("IntersectionObserver" in window && !reduceMotion) {
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (en) {
                if (en.isIntersecting) {
                    en.target.classList.add("is-in");
                    io.unobserve(en.target);
                }
            });
        }, { threshold: 0.12, rootMargin: "0px 0px -40px 0px" });
        revealEls.forEach(function (n) { io.observe(n); });
    } else {
        revealEls.forEach(function (n) { n.classList.add("is-in"); });
    }

    /* ---------------------------------------------------------------
       6. Léger tilt 3D des cartes (desktop)
       --------------------------------------------------------------- */
    if (finePointer && !reduceMotion) {
        document.querySelectorAll(".service-item, .blog-item, .feature-item, .team-item, .case-item").forEach(function (card) {
            var raf = null;
            card.addEventListener("mousemove", function (e) {
                if (!card.classList.contains("is-in") && card.classList.contains("sb-reveal")) return;
                var r = card.getBoundingClientRect();
                var x = (e.clientX - r.left) / r.width - 0.5;
                var y = (e.clientY - r.top) / r.height - 0.5;
                cancelAnimationFrame(raf);
                raf = requestAnimationFrame(function () {
                    card.style.transition = "transform .15s ease-out, box-shadow .6s";
                    card.style.transform = "perspective(1200px) rotateX(" + (-y * 3) + "deg) rotateY(" + (x * 3) + "deg) translateY(-6px)";
                });
            });
            card.addEventListener("mouseleave", function () {
                cancelAnimationFrame(raf);
                card.style.transition = "";
                card.style.transform = "";
            });
        });

    }

    /* ---------------------------------------------------------------
       7. Moteur de modales
       --------------------------------------------------------------- */
    var lastFocus = null;
    function openOverlay(ov) {
        lastFocus = document.activeElement;
        document.body.appendChild(ov);
        document.body.classList.add("sb-lock");
        requestAnimationFrame(function () {
            requestAnimationFrame(function () { ov.classList.add("open"); });
        });
        var f = ov.querySelector("button, a, [tabindex]");
        if (f) setTimeout(function () { f.focus({ preventScroll: true }); }, 350);
    }
    function closeOverlay(ov) {
        if (!ov || !ov.classList.contains("open")) return;
        ov.classList.remove("open");
        document.body.classList.remove("sb-lock");
        setTimeout(function () { if (ov.parentNode) ov.parentNode.removeChild(ov); }, 500);
        if (lastFocus && lastFocus.focus) lastFocus.focus({ preventScroll: true });
        if (ov._onClose) ov._onClose();
    }
    document.addEventListener("keydown", function (e) {
        var ov = document.querySelector(".sb-overlay.open");
        if (!ov) return;
        if (e.key === "Escape") closeOverlay(ov);
        if (e.key === "Tab") {
            var f = ov.querySelectorAll("button, a[href], [tabindex]:not([tabindex='-1'])");
            if (!f.length) return;
            var first = f[0], last = f[f.length - 1];
            if (e.shiftKey && document.activeElement === first) { e.preventDefault(); last.focus(); }
            else if (!e.shiftKey && document.activeElement === last) { e.preventDefault(); first.focus(); }
        }
    });

    function makeModal(opts) {
        var ov = el("div", "sb-overlay");
        ov.setAttribute("role", "dialog");
        ov.setAttribute("aria-modal", "true");
        ov.setAttribute("aria-label", opts.title.replace(/<[^>]+>/g, ""));
        var actions = (opts.actions || []).map(function (a) {
            return '<a class="theme-btn" href="' + a.href + '">' + a.label + ' <i class="fas fa-arrow-right"></i></a>';
        }).join("");
        ov.innerHTML =
            '<div class="sb-modal">' +
            (opts.image ? '<div class="sb-modal-media" style="background-image:url(\'' + opts.image + '\')">' +
                (opts.badge ? '<div class="sb-badge">' + opts.badge + '</div>' : '') + '</div>' : '') +
            '<div class="sb-modal-body">' +
            (opts.eyebrow ? '<div class="sb-eyebrow">' + opts.eyebrow + '</div>' : '') +
            '<h3>' + opts.title + '</h3><p>' + opts.text + '</p>' +
            '<div class="sb-modal-actions">' + actions + '<button type="button" class="sb-link" data-sb-close>Plus tard</button></div>' +
            '</div>' +
            '<button type="button" class="sb-close" data-sb-close aria-label="Fermer"><i class="fas fa-times"></i></button>' +
            '</div>';
        ov.addEventListener("click", function (e) {
            if (e.target === ov || e.target.closest("[data-sb-close]")) closeOverlay(ov);
        });
        if (!opts.image) ov.querySelector(".sb-modal").style.gridTemplateColumns = "1fr";
        return ov;
    }
    window.sbModal = function (opts) { var ov = makeModal(opts); openOverlay(ov); return ov; };

    // Popup de bienvenue (page d'accueil, une fois par session)
    if ($hero.length) {
        var ss = storage("sessionStorage");
        var seen = ss && ss.getItem("sb-welcome");
        if (!seen) {
            setTimeout(function () {
                if (document.querySelector(".sb-overlay.open")) return;
                window.sbModal({
                    image: "assets/img/slider/OCE_3837.JPG",
                    badge: '<i class="fas fa-award"></i> ISO 9001 · 14001 · 45001',
                    eyebrow: "Bienvenue à la SoBAPS S.A",
                    title: "La garantie de l’accès aux produits de santé de qualité",
                    text: "Découvrez nos critères d’accès aux produits, notre catalogue des prix et nos derniers appels d’offres. Nos équipes des agences de Cotonou, Parakou et Natitingou sont à votre service.",
                    actions: [
                        { label: "Appels d’offres", href: "offre" },
                        { label: "Catalogue", href: "ccpc#catalogue" }
                    ]
                });
                try { ss && ss.setItem("sb-welcome", "1"); } catch (e) { }
            }, 4500);
        }
    }

    /* ---------------------------------------------------------------
       8. Lightbox galerie (remplace Magnific Popup)
       --------------------------------------------------------------- */
    function openLightbox(items, start) {
        var idx = start;
        var ov = el("div", "sb-overlay sb-lightbox");
        ov.setAttribute("role", "dialog");
        ov.setAttribute("aria-modal", "true");
        ov.setAttribute("aria-label", "Galerie photo");
        ov.innerHTML =
            '<div class="sb-lb-stage"><div class="sb-lb-spin"></div><img alt=""></div>' +
            '<button type="button" class="sb-lb-btn sb-lb-prev" aria-label="Précédente"><i class="fas fa-chevron-left"></i></button>' +
            '<button type="button" class="sb-lb-btn sb-lb-next" aria-label="Suivante"><i class="fas fa-chevron-right"></i></button>' +
            '<button type="button" class="sb-lb-btn sb-lb-close" aria-label="Fermer"><i class="fas fa-times"></i></button>' +
            '<div class="sb-lb-bar"><span class="n"></span><small>Utilisez ← → ou balayez</small></div>';
        var img = ov.querySelector("img");
        var spin = ov.querySelector(".sb-lb-spin");
        var label = ov.querySelector(".n");
        var single = items.length < 2;
        if (single) {
            ov.querySelector(".sb-lb-prev").style.display = "none";
            ov.querySelector(".sb-lb-next").style.display = "none";
        }

        function show(i) {
            idx = (i + items.length) % items.length;
            img.classList.remove("in");
            spin.style.display = "";
            var src = items[idx];
            var pre = new Image();
            pre.onload = pre.onerror = function () {
                if (items[idx] !== src) return;
                img.src = src;
                spin.style.display = "none";
                requestAnimationFrame(function () { img.classList.add("in"); });
            };
            pre.src = src;
            label.textContent = (idx + 1) + " / " + items.length;
            // Précharge la suivante
            if (!single) (new Image()).src = items[(idx + 1) % items.length];
        }

        ov.querySelector(".sb-lb-prev").onclick = function () { show(idx - 1); };
        ov.querySelector(".sb-lb-next").onclick = function () { show(idx + 1); };
        ov.querySelector(".sb-lb-close").onclick = function () { closeOverlay(ov); };
        ov.querySelector(".sb-lb-stage").addEventListener("click", function (e) {
            if (e.target === this) closeOverlay(ov);
        });
        function onKey(e) {
            if (e.key === "ArrowRight") show(idx + 1);
            if (e.key === "ArrowLeft") show(idx - 1);
        }
        document.addEventListener("keydown", onKey);
        ov._onClose = function () { document.removeEventListener("keydown", onKey); };

        // Swipe tactile
        var sx = null;
        ov.addEventListener("touchstart", function (e) { sx = e.touches[0].clientX; }, { passive: true });
        ov.addEventListener("touchend", function (e) {
            if (sx == null) return;
            var dx = e.changedTouches[0].clientX - sx;
            if (Math.abs(dx) > 50 && !single) show(idx + (dx < 0 ? 1 : -1));
            sx = null;
        });

        openOverlay(ov);
        show(idx);
    }
    window.sbLightbox = openLightbox;

    // Intercepté en phase de capture pour passer avant Magnific Popup
    document.addEventListener("click", function (e) {
        var trigger = e.target.closest(".popup-gallery .popup-img, .popup-gallery .case-img img");
        if (!trigger) return;
        var gallery = trigger.closest(".popup-gallery");
        var links = Array.prototype.slice.call(gallery.querySelectorAll(".popup-img"));
        var items = links.map(function (a) { return a.getAttribute("href"); });
        var link = trigger.classList.contains("popup-img") ? trigger : trigger.closest(".case-img").querySelector(".popup-img");
        var start = Math.max(0, links.indexOf(link));
        e.preventDefault();
        e.stopPropagation();
        openLightbox(items, start);
    }, true);

    // Images isolées marquées data-sb-zoom
    document.addEventListener("click", function (e) {
        var z = e.target.closest("[data-sb-zoom]");
        if (!z) return;
        e.preventDefault();
        openLightbox([z.getAttribute("data-sb-zoom") || z.getAttribute("src") || z.getAttribute("href")], 0);
    });

    /* ---------------------------------------------------------------
       9. Popup vidéo (YouTube / Vimeo)
       --------------------------------------------------------------- */
    document.addEventListener("click", function (e) {
        var a = e.target.closest(".popup-youtube, .popup-vimeo");
        if (!a) return;
        e.preventDefault();
        e.stopPropagation();
        var href = a.getAttribute("href") || "";
        if (!href || href === "#") return;
        var m = href.match(/(?:youtu\.be\/|v=|embed\/)([\w-]{11})/);
        var src = m ? "https://www.youtube-nocookie.com/embed/" + m[1] + "?autoplay=1&rel=0" :
            (href.match(/vimeo\.com\/(\d+)/) ? "https://player.vimeo.com/video/" + RegExp.$1 + "?autoplay=1" : href);
        var ov = el("div", "sb-overlay sb-lightbox");
        ov.innerHTML =
            '<div class="sb-lb-stage"><div class="sb-lb-frame">' +
            '<iframe src="' + src + '" allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen title="Vidéo"></iframe></div></div>' +
            '<button type="button" class="sb-lb-btn sb-lb-close" aria-label="Fermer"><i class="fas fa-times"></i></button>';
        ov.querySelector(".sb-lb-close").onclick = function () { closeOverlay(ov); };
        ov.querySelector(".sb-lb-stage").addEventListener("click", function (ev) { if (ev.target === this) closeOverlay(ov); });
        openOverlay(ov);
    }, true);

    /* ---------------------------------------------------------------
       10. Notifications (toasts)
       --------------------------------------------------------------- */
    var toastBox = null;
    window.sbToast = function (title, message, type, ms) {
        ms = ms || 5000;
        if (!toastBox) {
            toastBox = el("div");
            toastBox.id = "sb-toasts";
            toastBox.setAttribute("aria-live", "polite");
            document.body.appendChild(toastBox);
        }
        var t = el("div", "sb-toast" + (type === "error" ? " error" : ""));
        t.style.setProperty("--sb-t", ms + "ms");
        t.innerHTML = '<div class="ic"><i class="fas ' + (type === "error" ? "fa-exclamation" : "fa-check") + '"></i></div>' +
            '<div><b></b><span></span></div><div class="life"></div>';
        t.querySelector("b").textContent = title;
        t.querySelector("span").textContent = message || "";
        toastBox.appendChild(t);
        requestAnimationFrame(function () { requestAnimationFrame(function () { t.classList.add("in"); }); });
        function hide() {
            t.classList.remove("in");
            setTimeout(function () { t.remove(); }, 600);
        }
        var timer = setTimeout(hide, ms);
        t.addEventListener("click", function () { clearTimeout(timer); hide(); });
    };

})(jQuery);
