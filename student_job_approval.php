 <?php
	$con=mysqli_connect("localhost","root","HkQFz53V31ghE3DF");
    $db=mysqli_select_db($con,"BVMPlacement");
	$sid=$_REQUEST['sid'];
	$jid=$_REQUEST['jid'];
	$sql="UPDATE `stu_job` SET `application_status`='Y' WHERE `std_id`='$sid' && `job_id`='$jid';";
	$query=mysqli_query($con,$sql);
	if($query)
	{
		/*echo '<script type="text/javascript">
						alert("You Approved The Student\'s Job Application Successfully!");
				</script>';*/
		//header("refresh:1;url=company_user_page.php");
		require_once('phpmailer/job_application_approval_mail.php');
	}
	else
	{
		//echo die(mysqli_error($con));
		echo '<script type="text/javascript">
						alert("SORRY!There was some error while approving the students application!Please Try Again!");
				</script>';
		//header("refresh:1;url=company_student_applications.php");
	}	
?>