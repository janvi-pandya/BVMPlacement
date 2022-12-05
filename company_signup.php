<!DOCTYPE HTML>
	<html>
	<?php
		$con=mysqli_connect("localhost","root","HkQFz53V31ghE3DF");
		$db=mysqli_select_db($con,"BVMPlacement");
		if($con)
		{
		if(isset($_POST['submit8']))
		{
			$name = $_POST['name'];
			$recruiter_name = $_POST['recruiter_name'];
			$website = $_POST['website'];
			$email=$_POST['email'];
			$phonenumber=$_POST['phonenumber'];
			$password = $_POST['pwd'];
			$password = md5($password);
			$confirmpassword = $_POST['cpwd'];
			$confirmpassword = md5($confirmpassword);
		$sql=mysqli_query($con,"SELECT `email` FROM `company` WHERE `email`='$email';");
		if($row_st=mysqli_fetch_array($sql))
		{
			echo '<script type="text/javascript">
			alert("You Have Registered Already!LOGIN NOW!");
			</script>';
			header("refresh:1;url=index.php");
			exit(0);
		}
		}
		if(!empty($name)&&!empty($recruiter_name)&&!empty($website)&&!empty($email)&&!empty($phonenumber)&&!empty($password))
			$sql="INSERT INTO company(password,company_name,recruiter_name,website,phone_no,email) VALUES ('$password','$name','$recruiter_name','$website','$phonenumber','$email');";
		$query=mysqli_query($con,$sql);
		if($query)
		{
			echo '<script type="text/javascript">
							alert("The Recruiting Company has been Registered Successfully!");
						</script>';
			header("refresh:1;url=index.php");
			//require_once('mailDemo/Registration_mail.php');
		}
		else
		{
			echo mysqli_error($con);
			echo '<script type="text/javascript">
			alert("SORRY!There was some error while Registration!Verify the values you have entered!Please Try Again!");
			</script>';
		}
	}
			
	else
	{
		echo 'Not Connected To The Server';
	}
	?>
</html>