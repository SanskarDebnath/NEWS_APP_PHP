<?php
require_once '../connection.php';
$sql = "select * from master_catagory";
$optionvalues = '';
$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $optionvalues = $optionvalues . '<option value=' . $row['catagory_id'] . '>' . $row['catagory_name'] . '</option>';
    }
    mysqli_free_result($result);
} else {
}
?>
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
            <input type="text" name="news_title" id="news_name"><br>

            <label>Write the full description about the News</label>
            <textarea name="About_news" id="about_news"
                placeholder="Insert the details of the news here"></textarea><br>

            <label>Select the Date of the News</label>
            <input type="Date" name="news_date" id="news_date">
        </div>

        <div class="Catgory&photos" id="Catgory&photos">
            <label>Select the Catagory of the News</label>
            <select name="catagory" class="catagory">
                <?php echo $optionvalues; ?>
            </select><br><br>

            <label>Editor name</label>
            <input type="text" name="auth_name" id="auth_name"><br>

            <label>Reporter name</label>
            <input type="text" name="auth_name" id="auth_name">
        </div>

        <div class="UploadImage" id="UploadImage">
            <label>Select JPG/JPEG/PNG file for the News</label><br>
            <input type="File" name="News_Image" id="News_Image">

            <?php
            function generateRandomString($length = 15) {
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $randomString = '';
            
                for ($i = 0; $i < $length; $i++) {
                    $randomString .= $characters[rand(0, strlen($characters) - 1)];
                }
            
                return $randomString;
            }
            $randomString = generateRandomString();
            // echo $randomString
            ?>
            <input type="hidden" name="image_id" id="image_id" value="<?php echo$randomString; ?>"><br><br>

        </div><br>
        <center><input type="submit" name="NEWS_SUBMIT" value="SUBMIT" class="NEWS_SUBMIT" id="NEWS_SUBMIT"></center>
    </form>
</body>
<script src="adminscripts.js"></script>

</html>