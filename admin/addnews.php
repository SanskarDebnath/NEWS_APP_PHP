<?php 

require_once 'connect.php';

$sql="select * from mas_state";
$ddlStateData = '';
//-------- Procedural Approach ----------
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) { //while ($row = $result->fetch_assoc()) {
        $ddlStateData = $ddlStateData.'<option value='.$row['scode'].'>'.$row['sname'].'</option>';
    }  
    
    mysqli_free_result($result); //$result -> free_result(); //FREE the resultset
} else {
    // echo 'No details found';
}

mysqli_close($conn); // $conn->close();

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
            <input type="text" name="news_title" id= "news_name"><br>

            <label>Write the full description about the News</label>
            <textarea name="About_news" id ="about_news" placeholder="Insert the details of the news here"></textarea><br>

            <label>Select the Date of the News</label>
            <input type="Date" name="news_date" id="news_date">
        </div>

        <div class="Catgory&photos">
            <label>Select the Catagory of the News</label>
            <select name="catagory" class="catagory">
                <option value="0">--select--</option>
            </select>
        </div>


    </form>
</body>
<script src="adminscripts.js"></script>
</html>