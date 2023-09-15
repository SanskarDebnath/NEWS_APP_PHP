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
elseif($admin==2){
	
	if (isset($_POST['NEWS_SUBMIT'])) {
			$title = mysqli_real_escape_string($connection, $_POST['news_title']);
			$about = mysqli_real_escape_string($connection, $_POST['about_news']);
			
			$Date = mysqli_real_escape_string($connection, $_POST['news_date']);
			$news_catag = mysqli_real_escape_string($connection, $_POST['news_catag']);

			$editor = mysqli_real_escape_string($connection, $_POST['auth_name']);
			$Reporter = mysqli_real_escape_string($connection, $_POST['Reporter_name']);

			$img_id = mysqli_real_escape_string($connection, $_POST['image_id']);

			$name = $_FILES['file']['name'];
			$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES["file"]["name"]);

			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			$file_temp_path = $_FILES["file"]["tmp_name"];

			$allowed_ext = array("jpg" => "image/jpg",
                            "jpeg" => "image/jpeg",
                            "gif" => "image/gif",
                            "png" => "image/png");

    		$file_mime = mime_content_type($file_temp_path);
			if( in_array($file_mime , $allowed_ext) ){
				$image_content = addslashes(file_get_contents($file_temp_path) );

				$sql = "INSERT INTO news_description(News_name, About_News, news_date, news_catagory, Editor_name, Reporter_name, Image_id, Image_data) 
				VALUES 
				('$title', '$about', '$Date', '$news_catag', '$editor', '$Reporter', '$img_id', '".$image_content."')";
				$result = $connection->query($sql);
				if ($result == TRUE) {
					header("Location:addnews.php");
				}
				else{
					echo "<script>alert('COMMUNICATION TO THE SERVER IS DESTROYED PLEASE TRY AGAIN AFTER SOMETIME');window.location.href = 'addcatagory.php';</script>";
				}

			}

			else{
				echo "something error encountered with the Image";
			}
	}
	else{
		echo "Error in the main if statement";
	}
}