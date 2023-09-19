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


<!-- carousal -->

<!-- <div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
 -->

<!-- carousal -->

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
<label id="Trending">Latest Sports News: Get all news coverage on different sports</label>
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
                                    <?php echo $row['About_News']; ?><br><br>
                                    <figure class="text-center">
                                            <figcaption class="blockquote-footer">
                                                Reported By: <cite title="Source Title"><?php echo $row['Reporter_name']; ?></cite>
                                            </figcaption>
                                            </figure>
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
</div><br><br>

<!-- 
<div id="popuilar">
<div class="row g-0 bg-body-secondary position-relative">
  <div class="col-md-6 mb-md-0 p-md-4">
    <img src="..." class="w-100" alt="...">
  </div>
  <div class="col-md-6 p-4 ps-md-0">
    <h5 class="mt-0">Columns with stretched link</h5>
    <p>Another instance of placeholder content for this other custom component. It is intended to mimic what some real-world content would look like, and we're using it here to give the component a bit of body and size.</p>
    <a href="#" class="stretched-link">Go somewhere</a>
  </div>
</div>
</div> -->



<!-- footer -->


<footer class="footer">
  <div class="footer__addr">
    <h1 class="footer__logo">Something</h1>
        
    <h2>Contact</h2>
    
    <address>
      5534 Somewhere In. The World 22193-10212<br>
          
      <a class="footer__btn" href="mailto:example@gmail.com">Email Us</a>
    </address>
  </div>
  
  <ul class="footer__nav">
    <li class="nav__item">
      <h2 class="nav__title">Media</h2>

      <ul class="nav__ul">
        <li>
          <a href="#">Online</a>
        </li>

        <li>
          <a href="#">Print</a>
        </li>
            
        <li>
          <a href="#">Alternative Ads</a>
        </li>
      </ul>
    </li>
    
    <li class="nav__item nav__item--extra">
      <h2 class="nav__title">Technology</h2>
      
      <ul class="nav__ul nav__ul--extra">
        <li>
          <a href="#">Hardware Design</a>
        </li>
        
        <li>
          <a href="#">Software Design</a>
        </li>
        
        <li>
          <a href="#">Digital Signage</a>
        </li>
        
        <li>
          <a href="#">Automation</a>
        </li>
        
        <li>
          <a href="#">Artificial Intelligence</a>
        </li>
        
        <li>
          <a href="#">IoT</a>
        </li>
      </ul>
    </li>
    
    <li class="nav__item">
      <h2 class="nav__title">Legal</h2>
      
      <ul class="nav__ul">
        <li>
          <a href="#">Privacy Policy</a>
        </li>
        
        <li>
          <a href="#">Terms of Use</a>
        </li>
        
        <li>
          <a href="#">Sitemap</a>
        </li>
      </ul>
    </li>
  </ul>
  
  <div class="legal">
    <p>&copy; 2019 Something. All rights reserved.</p>
    
    <div class="legal__links">
      <span>Made with <span class="heart">♥</span> remotely from Anywhere</span>
    </div>
  </div>
</footer>

<!-- footer -->

    <script src="scripts.js"></script>
</body>
</html>