const newsDateInput = document.getElementById("news_date");
const today = new Date().toISOString().split("T")[0];
newsDateInput.setAttribute("max", today);


function checkFileSize(input) {
    const file = input.files[0];
    if (!file) {
        alert("Please select a file.");
        input.value = '';
        return;s
    }

    const maxSizeInBytes = 2 * 1024 * 1024; // 2MB

    if (file.size > maxSizeInBytes) {
        alert("File size exceeds the maximum allowed size (2MB). Please select a smaller file.");
        input.value = '';
    }
}
document.addEventListener("DOMContentLoaded", function() {
    var newsNameInput = document.getElementById("news_name");
    var aboutNewsInput = document.getElementById("about_news");
    var newsDateInput = document.getElementById("news_date");

    newsNameInput.addEventListener("input", function() {
        var value = newsNameInput.value;
        if (value.length > 70) {
            alert("News headline can't exceed 70 characters. Excess characters will be trimmed.");
            newsNameInput.value = value.slice(0, 70);
        }
    });

    aboutNewsInput.addEventListener("input", function() {
        var value = aboutNewsInput.value;
        if (value.length > 800) {
            alert("News description can't exceed 600 characters. Excess characters will be trimmed.");
            aboutNewsInput.value = value.slice(0, 800);
        }
    });

    document.getElementById("add_news").addEventListener("submit", function(event) {
        if (newsNameInput.value.trim() === "") {
            alert("News headline can't be empty.");
            event.preventDefault();
        }

        if (aboutNewsInput.value.trim() === "") {
            alert("News description can't be empty.");
            event.preventDefault();
        }

        if (newsDateInput.value.trim() === "") {
            alert("Please select a date for the news.");
            event.preventDefault();
        }
    });
});
