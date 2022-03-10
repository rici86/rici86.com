<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>My portfolio | Rici86: Coder, Crafter, Creative </title>

    <!-- Meta tags  -->
    <meta name="description" content="Front-end developer as a living, crafter and Irish dance nerd for passion" />
	
    <meta property="article:author" content="https://www.facebook.com/rici86" />
    <meta property="og:title" content="Rici86 - Coder, Crafter, Creative" />
    <meta property="og:description" content="Front-end developer as a living, crafter and Irish dance nerd for passion" />
    <meta property="og:site_name" content="Rici86" />
    <meta property="og:image" content="../src/img/spirit-of-the-forest.jpg" />
	
	<link rel="shortcut icon" href="../src/img/logofavicon.png" type="imag/png" />

    <!-- slick slider  -->
    <link rel="stylesheet" type="text/css" href="../src/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="../src/slick/slick-theme.css"/>

    <!-- Css  -->
    <link href="../src/css/main.css?v=1.11" rel="stylesheet">
    <link href="../src/fontawesome/css/all.css" rel="stylesheet">
    
    <?php require_once '../include/analytics.php';?>
</head>

<body>
    <div id="main-container">
        <?php require_once 'include/nav.php';?>

        <a href="../it/sviluppo-web.php" title="Italiano" class="lang-switcher">
            <img src="../src/img/ita.png" alt="Italiano" class="lang">
        </a>

        <main class="with-shape-divider">
            <section class="main-row">
                <div class="card">
                    <h1 class="card-title">Web sites</h1>
                    <p>
                        I started with a small website about one of my high school passions, then I began making websites for friends. After a couple of years, companies and the like came to me for collaborations.
                    </p>
                    <p>
                        Restaurants, small companies, artists, institutions, associations, shops, sport teams... I lost count of all the projects I developed.
                    </p>
                    <p>
                        I favour working with HTML and CSS, with all related languages, but I also work with CMS when needed. Wordpress is the one I used most, but not the only one.
                    </p>
                    <p>
                        The projects I'm more proud of?
                        <br>The website of the Municipality of Zavattarello: I managed it for more than ten years, restyling it twice. It's also my best SEO strategy ever. 
                        <br>The portal for the Anemos Association was my first responsive website. 
                        <br>I have to mentions also the MI GAMES League Beach Volley website, the first Wordpress template I almost completely redesigned.
                        <br>Obviously I'm proud of the website dedicated to <a href="crafts.php">our family crafts</a>, #LRCrafts!
                    </p>

                    <?php require_once '../include/code-icons.php';?>
                </div>
                <div class="">
                    <?php require_once '../include/slider-siti.php';?>   
                </div>
            </section>

            <?php require_once '../include/shape-divider.php';?>

        </main>
        
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

        <?php require_once 'include/footer.php';?>
        <?php require_once '../include/torna-su.php';?>

    </div>

</body>
</html>