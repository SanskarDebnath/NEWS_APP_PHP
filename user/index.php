<?php
require '../connection.php';
include '../bootstarps/globalstyle.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bharat Digital News</title>
</head>

<body>
    <div class="text" id="text">
        BHARAT DIGITAL NEWS
    </div>
    <div class="most_recent_news" id="most_recent_news">
        <label>Trending Today in INDIA</label>
        <?php
        $sql = "SELECT * FROM news_description order by news_date";
        $result = mysqli_query($connection, $sql);
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
                                        $wordLimit = 150;
                                
                                        if (count($words) > $wordLimit) {
                                            $limitedText = implode(' ', array_slice($words, 0, $wordLimit));
                                            echo $limitedText . '...';
                                        } else {
                                            echo $aboutNews;
                                        }
                                        ?>
                                    </p>

                                    <a href="#" class="btn btn-primary">View News</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-body-secondary" id="time">
                            <?php echo $row['news_date']; ?>
                        </div>
                    </div>


                    <?php
            }
        }
        ?>
        </div>
</body>

</html>