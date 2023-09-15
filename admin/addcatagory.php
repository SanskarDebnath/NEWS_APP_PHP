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

        .designed_catagory {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px #d3d3d3;
        }

        .table_head th {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px;
            text-align: left;
        }

        .table_head td {
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        .table_head tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .table_head {
            width: 100%;
            border-collapse: collapse;
        }

        .table_head+p {
            margin-top: 20px;
        }

        .table_head td a {
            color: #007bff;
            text-decoration: none;
            cursor: pointer;
        }

        .table_head td a:hover {
            text-decoration: underline;
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
            <input type="text" id="catagory" placeholder="Enter the Category Name" name="CNAME"><br>

            <input type="submit" name="CINsubmit" id="CINsubmit" value="SUBMIT">
        </form>
    </div><br><br>

    <center><label>Recent Catagories</label></center><br>

    <div class="designed_catagory" id="designed_catagory">

        <?php
        include '../connection.php'; ?>
        <table class="table_head">
            <thead>
                <tr>
                    <th>Catagory ID</th>
                    <th>Catagory Name</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $sql = "SELECT * FROM master_catagory";
                $result = mysqli_query($connection, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>


                        <tr>
                            <td>
                                <?php echo $row['catagory_id']; ?>
                            </td>
                            <td>
                                <?php echo $row['catagory_name']; ?>
                            </td>
                        </tr>

                        <?php
                    }
                }

                ?>
    </div>
</body>

<script>

    const CINInput = document.getElementById("CIN");
    const catagoryInput = document.getElementById("catagory");
    const form = document.getElementById("method_form");
    const maxCharacters = 20;

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