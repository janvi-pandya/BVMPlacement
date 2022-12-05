<!DOCTYPE HTML>
	<html>
	<?php
		$con=mysqli_connect("localhost","root","HkQFz53V31ghE3DF");
		$db=mysqli_select_db($con,"BVMPlacement");
		if($con)
		{
			if(isset($_POST['login']))
			{
				if(isset($_POST['email']))
					$email = $_POST['email'];
				if(isset($_POST['password']))
				{
					$password = $_POST['password'];
					$password = md5($password);
				}
			}
			$sql="SELECT `email`,`password`,`approval_status` FROM `student`;";
			$query=mysqli_query($con,$sql);
			if($query)
			{
				while ($row=mysqli_fetch_array($query))
				{
					if($email==$row['email'] && $password==$row['password'] && $row['approval_status']=='Y')
					{
						session_start();
						$_SESSION['email']=$email;
						echo $_SESSION['email'];
						header("location:student_user_page.php");
					}
					if($row['approval_status']=='N')
					{
						echo '<script type="text/javascript">
						alert("SORRY!Your access to signup/login has been Blocked!Contact TPC member to know further.....");
						</script>';
						header('refresh:1;url=index.php');
						exit("");
					}
				}
			}
			if(!isset($_SESSION['email']))
			{
				$sql="SELECT `email`,`password` FROM tpc_member;";
				$query=mysqli_query($con,$sql);
				if($query)
				{
					while ($row=mysqli_fetch_array($query))
					{
						if($email==$row['email'] && $password==$row['password'])
						{
							session_start();
							$_SESSION['email']=$email;
							header("location:tpcmember_user_page.php");
						}
					}
				}
			}
			if(!isset($_SESSION['email']))
			{
				$sql="SELECT `email`,`password`,`approval_status` FROM company;";
				$query=mysqli_query($con,$sql);
				if($query)
				{
					while ($row=mysqli_fetch_array($query))
					{
						if($email==$row['email'] && $password==$row['password'] && $row['approval_status']=='Y')
						{
							session_start();
							$_SESSION['email']=$email;
							header("location:company_user_page.php");
						}
					}
				}
			}
			if(!isset($_SESSION['email']))
			{
			echo '<script type="text/javascript">
						alert("Wrong Email-ID or Password Entered!");
					</script>';
					header('refresh:1;url=index.php');
			}
			else
			{
				//echo die(mysqli_error($con));
			}
		}
		else
			echo 'SORRY! You are not Connected To The Server';
	?>
</html>