<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 0;
        }

        .category {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px #d3d3d3;
        }

        .category label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .category input[type="number"],
        .category input[type="text"],
        .category input[type="submit"] {
            width: 95%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .category input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 40px;
            cursor: pointer;
            width: 100px;
        }

        .category input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="category">
        <form method="POST" action="adminserver.php?news=1" id="method_form">
            <label>Select the Category ID</label>
            <input type="number" name="CIN" id="CIN">
            <br>
            <label>Select the catagory name</label>
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