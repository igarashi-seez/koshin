	<script type="text/javascript" src="<?php echo $path; ?>/node_modules/slick-carousel/slick/slick.min.js"></script>
	<script>
        $('#slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            adaptiveHeight: true,
	        arrows: false,
	        dots: true
        });
        $("#slideNav .item").on('click', function () {
            $numSlick = $(this).children(".slideLink").attr('data-slick') - 1;
            $('#slider').slick('slickGoTo', $numSlick);
        });
        // On before slide change
        $('#slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
            $numNextSlide = nextSlide;
            $numCurrentSlide = currentSlide;
            $eleThumbSlide = ".item" + ($numNextSlide + 1);
            console.log($eleThumbSlide);
            $("#slideNav").children(".item").removeClass("current");
            $("#slideNav").children($eleThumbSlide).addClass("current");
        });
	</script>