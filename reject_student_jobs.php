 <?php
	$con=mysqli_connect("localhost","root","HkQFz53V31ghE3DF");
    $db=mysqli_select_db($con,"BVMPlacement");
	$sid=$_REQUEST['sid'];
	$jid=$_REQUEST['jid'];
	$sql="UPDATE stu_job SET `application_status`='N' WHERE `std_id`='$sid' && `job_id`='$jid';";
	$query=mysqli_query($con,$sql);
	if($query)
	{
		echo '<script type="text/javascript">
						alert("You Rejected The Student\'s Job Application!");
				</script>';
		header("refresh:1;url=company_student_applications.php");
	}
	else
	{
		//echo die(mysqli_error($con));
		echo '<script type="text/javascript">
						alert("SORRY!There was some error!Please Try Again!");
				</script>';
		header("refresh:1;url=company_user_page.php");
	}	
?>