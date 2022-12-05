<!DOCTYPE HTML>
	<html>
	<?php
		$con=mysqli_connect("localhost","root","HkQFz53V31ghE3DF");
		$db=mysqli_select_db($con,"BVMPlacement");
		if($con)
		{
			if(isset($_REQUEST['submit6']))
			{
				$name = $_REQUEST['name'];
				$id=$_REQUEST['id'];
				$email=$_REQUEST['email'];
				$role=$_REQUEST['role'];
				$phonenumber=$_REQUEST['phonenumber'];
				$password = $_REQUEST['pwd'];
				$password = md5($password);
				$confirmpassword = $_REQUEST['cpwd'];
				$confirmpassword = md5($confirmpassword);
			$sql=mysqli_query($con,"select `m_id` from `tpc_member` where `m_id`='$id'||`email`='$email';");
			if($row_st=mysqli_fetch_array($sql))
			{
				echo '<script type="text/javascript">
				alert("You Have Registered Already!LOGIN NOW!");
				</script>';
				header("refresh:1;url=index.php");
				exit(0);
			}
			$m_id=$row['m_id'];
			if($password!=$confirmpassword)
			{
				echo '<script type="text/javascript">
							alert("Passwords do not match!");
					</script>';
				header("refresh:1;url=index.php");
				die();
			}
			if(!empty($name)&&!empty($id)&&!empty($email)&&!empty($phonenumber)&&!empty($password)&&!empty($role))
				$sql="INSERT INTO tpc_member(m_id,password,email,name,role,phone_no,assigned_students,assigned_companies) VALUES ('$id','$password','$email','$name','$role','$phonenumber',0,0);";
			
			$query=mysqli_query($con,$sql);
			if($query)
			{
				$querym=mysqli_query($con,"UPDATE `tpc_member` SET `assigned_companies`=`assigned_students`+1 WHERE `m_id`='$m_id';");
				/*echo '<script type="text/javascript">
								alert("You Have Registered Successfully!");
							</script>';
				header("refresh:1;url=index.php");*/
				require_once('phpmailer/tpc_registration_mail.php');
			}
			else
			{
				//echo mysqli_error($con);
				echo '<script type="text/javascript">
				alert("SORRY!There was some error while Registration!Verify the values you have entered!Please Try Again!");
				</script>';
			}
		  }
	}
	else
	{
		echo 'Not Connected To The Server';
	}
	?>
</html>