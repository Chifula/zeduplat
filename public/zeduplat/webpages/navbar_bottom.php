<script>
    document.addEventListener("DOMContentLoaded", function() {
        var collapsibles = document.querySelectorAll(".collapsible");
        collapsibles.forEach(item => {
            item.addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                content.style.display = content.style.display === "block" ? "none" : "block";
            });
        });
    });
</script>