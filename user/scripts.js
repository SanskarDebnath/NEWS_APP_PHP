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

const fullScreenButton = document.getElementById("full_screen");

fullScreenButton.addEventListener("click", () => {
    if (document.documentElement.requestFullscreen) {
        document.documentElement.requestFullscreen().catch(err => {
            console.error('Error attempting to enable full-screen mode:', err);
        });
    } else if (document.documentElement.mozRequestFullScreen) { // Firefox
        document.documentElement.mozRequestFullScreen();
    } else if (document.documentElement.webkitRequestFullscreen) { // Chrome, Safari and Opera
        document.documentElement.webkitRequestFullscreen();
    } else if (document.documentElement.msRequestFullscreen) { // IE/Edge
        document.documentElement.msRequestFullscreen();
    }
});

const darkModeToggle = document.getElementById("dark_mode_toggle");
const body = document.body;

darkModeToggle.addEventListener("click", () => {
    body.classList.toggle("dark-mode");
});


