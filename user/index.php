<?php
require '../connection.php';
include '../bootstarps/globalstyle.php';
function getCurrentDate()
{
    return date("Y-m-d");
}
$currentDate = getCurrentDate();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bharat Digital News</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="text" id="text">
        BHARAT DIGITAL NEWS
    </div>
    <div class="most_recent_news" id="most_recent_news">
        <label id="Trending">Trending Today in INDIA</label>
        <?php
        $sql = "SELECT * FROM news_description where news_date = '$currentDate'";
        $result = mysqli_query($connection, $sql);
        $offcanvasCount = 0;
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>

                <div class="card text-center">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="data:image/jpeg;base64,<?php echo base64_encode($row['Image_data']); ?>"
                                    alt="News Image" class="img-fluid max-width-100">
                            </div>
                            <div class="col-md-8">
                                <h5 class="card-title"><b>
                                        <?php echo $row['News_name']; ?>
                                    </b></h5>

                                <div>
                                    <p class="card-text">
                                        <?php
                                        $aboutNews = $row['About_News'];
                                        $words = explode(' ', $aboutNews);
                                        $wordLimit = 70;

                                        if (count($words) > $wordLimit) {
                                            $limitedText = implode(' ', array_slice($words, 0, $wordLimit));
                                            echo $limitedText . '....... To continue CLick on View News Button';
                                        } else {
                                            echo $aboutNews;
                                        }
                                        ?>
                                    </p>

                                    <button class="btn btn-primary view-news-btn" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasTop<?php echo $offcanvasCount; ?>">View News</button>
                                    <div class="offcanvas offcanvas-top" tabindex="-1"
                                        id="offcanvasTop<?php echo $offcanvasCount; ?>"
                                        aria-labelledby="offcanvasTopLabel<?php echo $offcanvasCount; ?>">
                                        <div class="offcanvas-header">
                                            <h5 class="offcanvas-title" id="offcanvasTopLabel<?php echo $offcanvasCount; ?>"><b>
                                                    <?php echo $row['News_name']; ?>
                                                </b></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            <?php echo $row['About_News']; ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-body-secondary" id="time">
                            <label>Published ON: <b>
                                    <?php echo $row['news_date']; ?>
                                </b></label>
                        </div>
                    </div>
                </div>

                <?php
                $offcanvasCount++;
            }
        }
        ?>
    </div>
    <script src="scripts.js"></script>


</body>

</html>