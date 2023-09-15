const newsDateInput = document.getElementById("news_date");
const today = new Date().toISOString().split("T")[0]; // Get today's date in ISO format
newsDateInput.setAttribute("max", today);
