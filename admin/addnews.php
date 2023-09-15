<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
    <link rel="stylesheet" href="adminstyle.css">
</head>
<body>
    <form action="adminserver.php?news=2" method="POST" class="add_news" id="add_news">
        <div class="About">
            <label>Write the Headline of the News</label>
            <input type="text" name="news_title" id= "news_name"><br>

            <label>Write the full description about the News</label>
            <textarea name="About_news" id ="about_news" placeholder="Insert the details of the news here"></textarea><br>

            <label>Select the Date of the News</label>
            <input type="Date" name="news_date" id="news_date">
        </div>

        <div class="Catgory&photos">
            <label>Select the Catagory of the News</label>
            <select name="catagory" class="catagory">
            <option value="0">Default</option>
            <option value="1">MOVIES</option>
            <option value="2">WORLD</option>
            <option value="3">Default</option>
            <option value="4">Default</option>
            <option value="5">Default</option>
            <option value="6">Default</option>
            <option value="7">Default</option>
            <option value="8">Default</option>
            <option value="9">Default</option>
            <option value="10">Default</option>
            </select>
        </div>


    </form>
</body>
<script src="adminscripts.js"></script>
</html>