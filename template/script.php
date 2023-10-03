<script type="text/javascript" src="<?php echo $path; ?>/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="<?php echo $path; ?>/node_modules/waypoints/lib/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="/node_modules/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=IntersectionObserver"></script>

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
        if ($href !== $gnav && $gnav == "<?php echo $path; ?>/") {
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
        if ($href !== "<?php echo $path; ?>/" && $target == "<?php echo $path; ?>/") {
            $result = -1;
        }
        if ($result !== -1) {
            $(this).children("ul[data-parent]").addClass('show');
            $(this).children("a[data-toggle]").attr('aria-expanded', 'true');
        }
    });

    // globalnav sm accordion
    $(".hamb-body__link-pulldown").on("click", function() {
        $(this).toggleClass("is-open");
        $(this).next(".globalnav-menu-sm").slideToggle(500);
        return false;
    });

    //mv height
    var tab_height = window.innerHeight - 60;
    document.documentElement.style.setProperty("--tab_height", tab_height + "px");

    var sp_height = window.innerHeight - 65;
    document.documentElement.style.setProperty("--sp_height", sp_height + "px");

    //top banner-renovation
    var banner_close = document.querySelector(".p-top-banner-renovation__close");
    var banner = document.querySelector(".p-top-banner-renovation");
    if (banner !== null) {
        banner_close.addEventListener("click", function() {
            banner.classList.add("is-hidden");
        });

        var options = {
            root: null,
            rootMargin: "-10px 0px",
            threshold: 0,
        };

        var observer = new IntersectionObserver(callback, options);
        var oberve_element = document.querySelector(".p-top-main-contents");
        var banner = document.querySelector(".p-top-banner-renovation");
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