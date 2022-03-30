<dialog>
    <div class="position-right">
        <div class="close-button"><i class="fas fa-times"></i></div>
    </div>
    <div style="padding:56.25% 0 0 0;position:relative;">
    <iframe src="https://player.vimeo.com/video/211328498?h=f14bca75d5&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
    </div>
    <script src="https://player.vimeo.com/api/player.js"></script>
</dialog>

<script>
    const modal = document.querySelector("#modal");
    const openModal = document.querySelector(".open-button");
    const closeModal = document.querySelector(".close-button");

    openModal.addEventListener("click", () => {
    modal.showModal();
    });

    closeModal.addEventListener("click", () => {
    modal.close();
    });
</script>