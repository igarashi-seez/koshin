<script type="text/javascript" src="<?php echo $path; ?>/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="<?php echo $path; ?>/node_modules/waypoints/lib/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="/node_modules/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

<script type="text/javascript">
    // For Toggle menu
    $(".hamb .inner").on("click", function() {
        $("body").toggleClass("hamb-on");
        $("html").toggleClass("is-fixed");
    });

    // add class on global navigation that show current url
    var $href = window.location.pathname;
    $(".globalnav-left a").each(function() {
        var $gnav = $(this).attr('href');
        var $result = $href.indexOf($gnav);

        console.log($href, $gnav, $result);
        if ($href !== $gnav && $gnav == "<?php echo $path; ?>/reform/") {
            $result = -1;
        }
        if ($result !== -1) {
            $(this).addClass('active');
        }
    });

    // Waypoints for global nav
    var waypoints = $('#waypoints').waypoint({
        handler: function(direction) {
            if ($('body').hasClass('navbar-on')) {
                $('body').removeClass('navbar-on');
            } else {
                $('body').addClass('navbar-on');
            }
        },
        offset: -200
    });

    var waypoints = $('main').waypoint({
        handler: function(direction) {
            $('body').toggleClass('topback-on');
        },
        offset: -200
    });

    var scroll = new SmoothScroll('a[href*="#top"]');

    $("#footerAccordion li").each(function() {
        var $target = $(this).attr('data-href');
        var $result = $href.indexOf($target);
        if ($href !== "<?php echo $path; ?>/reform/" && $target == "<?php echo $path; ?>/reform/") {
            $result = -1;
        }
        if ($result !== -1) {
            $(this).children("ul[data-parent]").addClass('show');
            $(this).children("a[data-toggle]").attr('aria-expanded', 'true');
        }
    });

    //top banner-renovation
    var banner_close = document.querySelector(".reform-top-banner-renovation__close");
    var banner = document.querySelector(".reform-top-banner-renovation");
    if (banner !== null) {
        banner_close.addEventListener("click", function() {
            banner.classList.add("is-hidden");
        });

        var options = {
            root: null,
            rootMargin: "20% 0px",
            threshold: 0,
        };

        var observer = new IntersectionObserver(callback, options);
        var oberve_element = document.querySelector(".reform-top-main-contents");
        var banner = document.querySelector(".reform-top-banner-renovation");
        observer.observe(oberve_element);

        function callback(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    inContens(entry.target);
                } else {
                    outContens(entry.target);
                }
            });
        }

        function outContens() {
            banner.classList.remove("is-up");
        }

        function inContens() {
            banner.classList.add("is-up");
        }
    }
</script>