<div class="slider-siti">
    <div class="box-sito">
        <img src="../src/img/crafts/sewing-pumpkins.jpg" alt="" class="img-responsive">
        <div class="sito-description">
            <div>
                <p class="sito-titolo">Zucche in stoffa</p>
                <p class="sito-date">Cucito</p>
            </div>                                
        </div>
    </div>
</div>

<!-- slick slider  -->
    <script type="text/javascript" src="../src/jquery-3.6.0.slim.min.js"></script>
    <script type="text/javascript" src="../src/slick/slick.min.js"></script>
    <script>
        $('.slider-siti').slick({
            rows: 1,
            infinite: true,
            autoplay: false,
            arrows: true,
            dots: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            swipe: true,
            swipeToSlide: true,
            pauseOnHover: true,
            lazyLoad: 'ondemand'
        });
    </script>