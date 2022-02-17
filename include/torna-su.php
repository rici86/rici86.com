<a href="#main-container" id="torna-su" class="hide">
    <i class="fas fa-chevron-up"></i>
</a>

<script>
    myID = document.getElementById("torna-su");

    var myScrollFunc = function() {
    var y = window.scrollY;
    if (y >= 500) {
            myID.className = "show"
        } else {
            myID.className = "hide"
        }
    };
    window.addEventListener("scroll", myScrollFunc);
</script>