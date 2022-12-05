<?php
	session_start();
	if(isset($_SESSION['email']))
	{	
		$e=$_SESSION['email'];
		$con=mysqli_connect("localhost","root","HkQFz53V31ghE3DF");
        $db=mysqli_select_db($con,"BVMPlacement");
		$q=mysqli_query($con,"SELECT `id` FROM `student` WHERE `email`='$e';");
		$r=mysqli_fetch_array($q);
		$s=$r['id'];
		$c_id=$_GET['c_id'];
		$query_access=mysqli_query($con,"SELECT `approval_status` FROM `student` WHERE `email`='$e';");
		$row_access=mysqli_fetch_array($query_access);
		$i=$_GET['job_id'];
		$query=mysqli_query($con,"INSERT INTO `stu_job`(`job_id`,`std_id`) VALUES ('$i','$s');");
		if($query)
		{
			echo '<script type="text/javascript">
						alert("You Have Applied For The Job Successfully!ALL THE BEST!");
				</script>';
			header("refresh:0.1;url=student_user_page.php");
		}
		else
		{
			//echo mysqli_error($con);
			echo '<script type="text/javascript">
						alert("You Have Already Applied For The Job!Stay Updated!");
				</script>';
			header("refresh:1;url=student_user_page.php");
		}	
	}		
	else
		header("location:index.php");
?>