<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="category">
    <form method="POST" action="adminserver.php?news=1" id="method_form">
        <label>Select the Category ID</label>
        <input type="number" name="CIN" id="CIN">
        <br>
        <input type="text" id="catagory" placeholder="Enter the Category Name"><br>
        <input type="submit" name="CINsubmit" id="CINsubmit" value="SUBMIT">
    </form>
</div>
</body>

<script>
    const CINInput = document.getElementById("CIN");
    const catagoryInput = document.getElementById("catagory");
    const form = document.getElementById("method_form");
    const maxCharacters = 10;

    form.addEventListener("submit", function (event) {
        const CINValue = CINInput.value;
        if (CINValue.trim() === "" || CINValue === "0") {
            alert("Category ID cannot be empty or 0.");
            CINInput.value = "";
            event.preventDefault();
        }
        const catagoryValue = catagoryInput.value;
        if (catagoryValue.length > maxCharacters) {
            alert("Category Name cannot exceed " + maxCharacters + " characters.");
            catagoryInput.value = "";
            event.preventDefault();
        } else if (catagoryValue.trim() === "") {
            alert("Category Name cannot be empty.");
            event.preventDefault();
        }
    });
</script>


</html>