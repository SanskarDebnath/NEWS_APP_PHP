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
    <link rel="shortcut icon" href="dbn.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bharat Digital News</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="preloader">
    </div>

    <script>
        // JavaScript to hide the preloader when the page is fully loaded
        window.addEventListener('load', function () {
            var preloader = document.getElementById('preloader');
            preloader.style.display = 'none';
        });
    </script>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Navbar brand -->
            <a class="navbar-brand" href="#">
                <h4 class="default_text" id="default_text">Bharat Digital News</h4>
            </a>

            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars text-light"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left links -->
                <ul class="navbar-nav me-auto d-flex flex-row mt-3 mt-lg-0">
                    <li class="nav-item text-center mx-2 mx-lg-1">
                        <a class="nav-link active" aria-current="page" href="#!">
                            <div>
                                <i class="fas fa-home fa-lg mb-1"></i>
                            </div>
                            <img width="26" height="26" src="https://img.icons8.com/material/26/home--v5.png"
                                alt="home--v5" />
                        </a>
                    </li>
                    <li class="nav-item text-center mx-2 mx-lg-1">
                        <a class="nav-link" href="#!">
                            <div>
                                <i class="far fa-envelope fa-lg mb-1"></i>
                                <span class="badge rounded-pill badge-notification bg-danger"></span>
                            </div>
                            <img width="26" height="26" src="https://img.icons8.com/glyph-neue/26/fire-element.png"
                                alt="fire-element" />
                        </a>
                    </li>
                    <li class="nav-item text-center mx-2 mx-lg-1">
                        <a class="nav-link" href="#!">
                            <div>
                                <i class="far fa-envelope fa-lg mb-1"></i>
                                <span class="badge rounded-pill badge-notification bg-danger"></span>
                            </div>
                            <img width="26" height="26" src="https://img.icons8.com/ios-filled/26/settings.png"
                                alt="settings" />
                        </a>
                    </li>
                    <li class="nav-item text-center mx-2 mx-lg-1">
                        <a class="nav-link" href="#!">
                            <div>
                                <i class="far fa-envelope fa-lg mb-1"></i>
                                <span class="badge rounded-pill badge-notification bg-danger"></span>
                            </div>
                            <img width="26" height="26" src="https://img.icons8.com/material/26/for-you.png"
                                alt="for-you" />
                        </a>
                    </li>
                    <li class="nav-item text-center mx-2 mx-lg-1">
                        <a class="nav-link" href="../weather/index.html" target="_blank">
                            <div>
                                <i class="far fa-envelope fa-lg mb-1"></i>
                                <span class="badge rounded-pill badge-notification bg-danger"></span>
                            </div>
                            <img width="26" height="26" src="https://img.icons8.com/material/26/cloud--v1.png"
                                alt="cloud--v1" />
                        </a>
                    </li>


                </ul>
                <!-- Left links -->

                <!-- Right links -->
                <ul class="navbar-nav ms-auto d-flex flex-row mt-3 mt-lg-0">

                    <li class="nav-item text-center mx-2 mx-lg-1">
                        <a class="nav-link" href="#" id="full_screen">
                            <div>
                                <i class="fas fa-bell fa-lg mb-1"></i>
                                <span class="badge rounded-pill badge-notification bg-info"></span>
                            </div>
                            <img width="26" height="26" src="https://img.icons8.com/material/26/fit-to-width.png"
                                alt="fit-to-width" />
                        </a>
                    </li>


                    <li class="nav-item text-center mx-2 mx-lg-1">
                        <a class="nav-link" href="#" id="dark_mode_toggle">
                            <div>
                                <i class="fas fa-bell fa-lg mb-1"></i>
                                <span class="badge rounded-pill badge-notification bg-info"></span>
                            </div>
                            <img width="26" height="26" src="https://img.icons8.com/material/26/bright-moon.png"
                                alt="bright-moon" />
                        </a>
                    </li>


                    <li class="nav-item text-center mx-2 mx-lg-1">
                        <a class="nav-link" href="#" id="chatbot-toggle">
                            <div>
                                <i class="fas fa-bell fa-lg mb-1"></i>
                                <span class="badge rounded-pill badge-notification bg-info"></span>
                            </div>
                            <img width="26" height="26" src="https://img.icons8.com/ios-glyphs/26/guest-male.png"
                                alt="guest-male" />
                        </a>
                    </li>

                    <li class="nav-item text-center mx-2 mx-lg-1">
                        <a class="nav-link" href="#!">
                            <div>
                                <i class="fas fa-globe-americas fa-lg mb-1"></i>
                                <span class="badge rounded-pill badge-notification bg-success"></span>
                            </div>
                            <img width="26" height="26" src="https://img.icons8.com/material/26/globe--v1.png"
                                alt="globe--v1" />
                        </a>
                    </li>
                </ul>
                <!-- Right links -->

                <!-- Search form -->
                <form class="d-flex input-group w-auto ms-lg-3 my-3 my-lg-0">
                    <input type="search" class="form-control" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-primary" type="button" data-mdb-ripple-color="white">
                        <img width="20" height="20" src="https://img.icons8.com/ios/40/search--v1.png"
                            alt="search--v1" />
                    </button>
                </form>
            </div>
        </div>
    </nav><br>

    <!-- navbar -->

    <div class="most_recent_news" id="most_recent_news">
        <label id="Trending">Trending Today in INDIA</label>
        <?php
        $sql = "SELECT * FROM news_description order by news_date LIMIT 10";
        // $sql = "SELECT * FROM news_description where news_date = '$currentDate'";
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
                                <h5 class="card-title" style="font-family: 'FreeMono', OCR A Std;font-size: 27px; color:red;"><b>
                                        <?php echo $row['News_name']; ?>
                                    </b></h5>

                                <div>
                                <p class="card-text" style="font-family: 'Apple Chancery', cursive;font-size: 17px;">
                                        <?php
                                        $aboutNews = $row['About_News'];
                                        $words = explode(' ', $aboutNews);
                                        $wordLimit = 70;
                                        if (count($words) > $wordLimit) {
                                            $limitedText = implode(' ', array_slice($words, 0, $wordLimit));
                                            echo $limitedText . ' <strong>....... Continue Reading</strong>';
                                        } else {
                                            // echo $aboutNews;
                                        }
                                        ?>
                                    </p>


                                    <button class="btn btn-primary view-news-btn" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasTop<?php echo $offcanvasCount; ?>">View News</button><br>
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
                                        <div class="offcanvas-body" style="font-family: 'Apple Chancery', cursive;font-size: 20px;">
                                            <?php echo $row['About_News']; ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-body-secondary" id="time" style="font-family: 'Apple Chancery', cursive;font-size: 15px;">
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


<br>

<br>
<div class="sports" id="sports">
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <?php
        $counter = 0;
        $sqlsports = "SELECT * FROM news_description WHERE news_catagory = 10";
        $sportsresults = mysqli_query($connection, $sqlsports);

        if (mysqli_num_rows($sportsresults) > 0) {
            while ($row = mysqli_fetch_assoc($sportsresults)) {
                $counter++;
                $collapseId = "collapseExample" . $counter;
                ?>
                <div class="col">
                    <div class="card">
                        <br>
                        <center><img src="data:image/jpeg;base64,<?php echo base64_encode($row['Image_data']); ?>"
                                class="card-img-top custom-image" alt="..."></center>
                        <div class="card-body custom-card-body">
                            <h5 class="card-title custom-title"><?php echo $row['News_name']; ?></h5>

                            <p class="card-text"
                                style="font-family: 'Apple Chancery', Verdana; font-size: 15px;">
                                <?php
                                $aboutNews = $row['About_News'];
                                $words = explode(' ', $aboutNews);
                                $wordLimit = 40;
                                if (count($words) > $wordLimit) {
                                    $limitedText = implode(' ', array_slice($words, 0, $wordLimit));
                                    echo $limitedText . ' <strong>....... Continue Reading</strong>';
                                } else {
                                    echo $aboutNews;
                                }
                                ?>
                            </p>
                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                data-bs-target="#<?php echo $collapseId; ?>" aria-expanded="false"
                                aria-controls="<?php echo $collapseId; ?>">
                                Continue
                            </button>
                            </p>
                            <div class="collapse" id="<?php echo $collapseId; ?>">
                                <div class="card card-body"
                                    style="font-family: 'Apple Chancery', Verdana; font-size: 18px;">
                                    <?php echo $row['About_News']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
</div>
    <script src="scripts.js"></script>
</body>
</html>