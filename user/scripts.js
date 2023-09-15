var currentOffcanvas = null;

document.querySelectorAll(".view-news-btn").forEach(function (button, index) {
    button.addEventListener("click", function () {
        if (currentOffcanvas !== null) {
            var currentOffcanvasElement = document.getElementById(currentOffcanvas);
            var currentOffcanvasInstance = bootstrap.Offcanvas.getInstance(currentOffcanvasElement);
            if (currentOffcanvasInstance) {
                currentOffcanvasInstance.hide();
            }
        }

        var target = button.getAttribute("data-bs-target");
        var offcanvas = new bootstrap.Offcanvas(document.querySelector(target));
        offcanvas.show();

        currentOffcanvas = target;
    });
});
