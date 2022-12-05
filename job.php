<!DOCTYPE HTML>
	<html>
	<?php
		include('company_user_page.php');
		$con=mysqli_connect("localhost","root","HkQFz53V31ghE3DF");
		$db=mysqli_select_db($con,"BVMPlacement");
		if($con)
		{
			if(isset($_REQUEST['submit4']))
			{
				$email=$_SESSION['email'];
				$id=$_REQUEST['jid'];
				$post=$_REQUEST['post'];
				$vacancy=$_REQUEST['vacancy'];
				$salary = $_REQUEST['salary'];
				//$file_name=$_REQUEST['file_data'];
				$file_name=$_FILES['file_data']['name'];
        		$file_type=$_FILES['file_data']['type'];
        		$file_data=file_get_contents($_FILES['file_data']['tmp_name']);
				$queryc=mysqli_query($con,"SELECT `c_id` FROM `company` WHERE `email`='$email';");
				if($row_st=mysqli_fetch_array($queryc))
					$c_id=$row_st['c_id'];
			}
			if(!empty($id)&&!empty($post)&&!empty($vacancy)&&!empty($salary)&&!empty($file_name)&&!empty($file_type)&&!empty($file_data))
			{
				$sql="INSERT INTO `job`(`job_id`,`post`,`vacancy`,`salary`,`file_name`,`file_type`,`file_data`,`c_id`) VALUES ('$id','$post','$vacancy','$salary','$file_name','$file_type','$file_data','$c_id');";
				$query=mysqli_query($con,$sql);
				if($query)
				{
					echo '<script type="text/javascript">
									alert("Data Registered Successfully!");
								</script>';
					header("refresh:1;url=index.php");
					//require_once('phpmailer/Registration_mail.php');
				}
				else
				{
					echo mysqli_error($con);
					echo '<script type="text/javascript">
					alert("SORRY!There was some error while Job Registration!Verify the values you have entered!Please Try Again!");
					</script>';
				}
			}
			include('company_user_page.php');
	}
			
	else
	{
		echo 'EXCEPTION:You Are Not Connected To The Server!';
	}
	?>
</html>