<?php
	session_start();
	if(isset($_SESSION['email']))
	{
		$con=mysqli_connect("localhost","root","HkQFz53V31ghE3DF");
	    $db=mysqli_select_db($con,"BVMPlacement");
		$job_id=$_REQUEST['job_id'];
		$sql="SELECT file_type,file_data from `job` where `job_id`='$job_id';";
        $result=(mysqli_query($con,$sql));
        $row=mysqli_fetch_array($result);
        header('Content-Type:'.$row['file_type']);
        echo $row['file_data'];
	}
?>