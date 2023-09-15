<?php
include '../connection.php';
$admin= $_GET['news'];
if ( $admin == 1) 
{
    //echo "3";
	if(isset($_POST['CINsubmit'])) {
		$CID = mysqli_real_escape_string($connection,$_POST['CIN']);
		$CNAME =  mysqli_real_escape_string($connection,$_POST['CNAME']);;

		$sql="INSERT INTO master_catagory(catagory_id, catagory_name) VALUES('$CID','$CNAME')";

		$result=$connection->query($sql);
		if ($result == TRUE) {
            header("Location:addcatagory.php");
		} else {
           echo"error";
		}
		exit;
	}
}