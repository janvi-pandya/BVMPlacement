<?php
	session_start();
	if(isset($_SESSION['email']) || isset($_REQUEST['email']))
	{
		if(isset($_REQUEST['email']))
			$email=$_REQUEST['email'];
		else
			$email=$_SESSION['email'];
		$con=mysqli_connect("localhost","root","HkQFz53V31ghE3DF");
	    $db=mysqli_select_db($con,"BVMPlacement");
		$sql="SELECT file_type,file_data from `student` where `email`='$email';";
        $result=(mysqli_query($con,$sql));
        $row=mysqli_fetch_array($result);
        header('Content-Type:'.$row['file_type']);
        echo $row['file_data'];
	}
	else
		header("location:index.php");
?>