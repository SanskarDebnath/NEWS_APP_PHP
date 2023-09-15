<?php
include '../connection.php';
$admin = $_GET['news'];
if ($admin == 1) {
	$CID = mysqli_real_escape_string($connection, $_POST['CIN']);

	if (isset($_POST['CINsubmit'])) {

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
	
}