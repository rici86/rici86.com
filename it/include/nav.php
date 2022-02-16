<?php
    $activePage = basename($_SERVER['PHP_SELF'], ".php");
?>
<nav>
    <a href="../index.html" class="nav-logo">
        <img src="../src/img/logobianco.png" alt="Rici86">
    </a>
    <div class="navbar" id="navigation">
        <a href="su-di-me.php" class="button button-main <?= (in_array($activePage, ['su-di-me'])) ? 'active':''; ?>">Su di me</a>
        <a href="sviluppo-web.php" class="button button-main <?= (in_array($activePage, ['sviluppo-web'])) ? 'active':''; ?>">Sviluppo web</a>
        <a href="eventi.php" class="button button-main <?= (in_array($activePage, ['eventi'])) ? 'active':''; ?>">Eventi</a>
        <a href="scrittura.php" class="button button-main <?= (in_array($activePage, ['scrittura'])) ? 'active':''; ?>">Scrittura</a>
        <a href="fai-da-te.php" class="button button-main <?= (in_array($activePage, ['fai-da-te'])) ? 'active':''; ?>">Fai-da-te</a>
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