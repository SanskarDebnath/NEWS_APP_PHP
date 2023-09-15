<?php
include '../connection.php';
$admin = $_GET['news'];

if ($admin == 1) {
	if (isset($_POST['CINsubmit'])) {
		$CID = mysqli_real_escape_string($connection, $_POST['CIN']);
		$checkQuery = "SELECT catagory_id FROM master_catagory WHERE catagory_id = '$CID'";
		
		$checkResult = $connection->query($checkQuery);
		if ($checkResult->num_rows > 0) {
			echo "<script>alert('CATAGORY_ID allready Exist Please try different values');window.location.href = 'addcatagory.php';</script>";

		} else {

			$CID = mysqli_real_escape_string($connection, $_POST['CIN']);
			$CNAME = mysqli_real_escape_string($connection, $_POST['CNAME']);
			$sql = "INSERT INTO master_catagory(catagory_id, catagory_name) VALUES('$CID','$CNAME')";
			$result = $connection->query($sql);
			if ($result == TRUE) {

				header("Location:addcatagory.php");
			} else {

				echo "<script>alert('COMMUNICATION TO THE SERVER IS DESTROYED PLEASE TRY AGAIN AFTER SOMETIME');window.location.href = 'addcatagory.php';</script>";			
			}

			exit;
		}
	}
}
elseif ($admin == 2) {
    if ((isset($_POST['NEWS_SUBMIT'])) && !empty($_FILES["file"]["name"])) {
        $title = mysqli_real_escape_string($connection, $_POST['news_title']);
        $about = mysqli_real_escape_string($connection, $_POST['About_news']);
        $Date = mysqli_real_escape_string($connection, $_POST['news_date']);
        $news_catag = mysqli_real_escape_string($connection, $_POST['catagory']);
        $editor = mysqli_real_escape_string($connection, $_POST['auth_name']);
        $Reporter = mysqli_real_escape_string($connection, $_POST['Reporter_name']);
        $img_id = mysqli_real_escape_string($connection, $_POST['image_id']);

        // Get the uploaded file's name and other information
        $name = $_FILES['file']['name'];
        $file_temp_path = $_FILES["file"]["tmp_name"];

        // Use finfo to get the MIME type
        $file_info = finfo_open(FILEINFO_MIME_TYPE);
        $file_mime = finfo_file($file_info, $file_temp_path);

        $allowed_ext = array(
            "jpg" => "image/jpg",
            "jpeg" => "image/jpeg",
            "gif" => "image/gif",
            "png" => "image/png"
        );

        if (in_array($file_mime, $allowed_ext)) {
            // File is of an allowed type
            $image_content = addslashes(file_get_contents($file_temp_path));

            $sql = "INSERT INTO news_description(News_name, About_News, news_date, news_catagory, Editor_name, Reporter_name, Image_id, Image_data) 
                    VALUES 
                    ('$title', '$about', '$Date', '$news_catag', '$editor', '$Reporter', '$img_id', '".$image_content."')";
            $result = $connection->query($sql);

            if ($result == TRUE) {
                header("Location:addnews.php");
            } else {
                echo "<script>alert('COMMUNICATION TO THE SERVER IS DESTROYED PLEASE TRY AGAIN AFTER SOMETIME');window.location.href = 'addcatagory.php';</script>";
            }
        } else {
            echo "The uploaded file is not an allowed image type.";
        }
    } else {
        echo "Error in the main if statement";
    }
}
