<?php
    $activePage = basename($_SERVER['PHP_SELF'], ".php");
?>
<nav>
    <a href="../index-eng.html" class="nav-logo">
        <img src="../src/img/logobianco.png" alt="Rici86">
    </a>
    <div class="navbar" id="navigation">
        <a href="about.php" class="button button-main <?= (in_array($activePage, ['about'])) ? 'active':''; ?>">About me</a>
        <a href="web-development.php" class="button button-main <?= (in_array($activePage, ['web-development'])) ? 'active':''; ?>">Web development</a>
        <a href="events.php" class="button button-main <?= (in_array($activePage, ['events'])) ? 'active':''; ?>">Events</a>
        <a href="writing.php" class="button button-main <?= (in_array($activePage, ['writing'])) ? 'active':''; ?>">Writing</a>
        <a href="crafts.php" class="button button-main <?= (in_array($activePage, ['crafts'])) ? 'active':''; ?>">Crafts</a>
    </div>
    
    <div class="navbar-toggler" onclick="mobileToggle()">
        <i class="fas fa-bars"></i>
    </div>

    <!-- <a href="index-eng.html" title="English" class="">
        <img src="../src/img/eng.png" alt="English" class="lang">
    </a> -->
</nav>

<script>
    function mobileToggle() {
    var element = document.getElementById("navigation");
    element.classList.toggle("show");
}
</script>