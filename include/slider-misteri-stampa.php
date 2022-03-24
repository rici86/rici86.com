<div class="slider-siti">
    <div class="box-sito">
        <img src="../src/press/pvmagazine10-nov2016-81.png" alt="" class="img-responsive">      
        <div class="sito-description no-flex">            
            <p class="sito-url">PvMagazine</p>
            <p class="sito-date">Novembre 2016</p>            
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