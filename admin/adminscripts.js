const newsDateInput = document.getElementById("news_date");
const today = new Date().toISOString().split("T")[0]; // Get today's date in ISO format
newsDateInput.setAttribute("max", today);


function checkFileSize(input) {
    const file = input.files[0]; // Get the selected file
    if (!file) {
        alert("Please select a file.");
        input.value = ''; // Clear the input
        return;s
    }

    const maxSizeInBytes = 2 * 1024 * 1024; // 2MB

    if (file.size > maxSizeInBytes) {
        alert("File size exceeds the maximum allowed size (2MB). Please select a smaller file.");
        input.value = ''; // Clear the input
    }
}