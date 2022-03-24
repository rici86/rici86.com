<!-- slick slider  -->
<link rel="stylesheet" type="text/css" href="../src/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="../src/slick/slick-theme.css"/>

<div class="slider-siti">
    <div class="box-sito">
        <img src="../src/img/misteri/misteri01.jpg" alt="" class="img-responsive">        
    </div>
    <div class="box-sito">
        <img src="../src/img/misteri/misteri02.jpg" alt="" class="img-responsive">        
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