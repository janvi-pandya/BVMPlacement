<!DOCTYPE HTML>
	<html>
	<?php
		$con=mysqli_connect("localhost","","");
		$db=mysqli_select_db($con,"BVMPlacement");
		
			$name = $_POST['name'];
			$recruiter_name = $_POST['recruiter_name'];
			$recruiting_criteria = $_POST['recruiting_criteria'];
			$website = $_POST['website'];
			$email=$_POST['email'];
			$phonenumber=$_POST['phonenumber'];
			$password = $_POST['pwd'];
			$password = md5($password);
			$confirmpassword = $_POST['cpwd'];
			$confirmpassword = md5($confirmpassword);
		
		if(!empty($name)&&!empty($recruiter_name)&&!empty($recruiting_criteria)&&!empty($website)&&!empty($email)&&!empty($phonenumber)&&!empty($password))
			$sql="INSERT INTO company(password,company_name,recruiter_name,recruiting_criteria,website,phone_no,email) VALUES ('$password','$name','$recruiter_name','$recruiting_criteria','$website','$phonenumber','$email');";

		$query=mysqli_query($con,$sql);
		if($query)
		{
			echo '<script type="text/javascript">
							alert("Update data successfully!");
						</script>';
			header("refresh:1;url=index.php");
		}
		else
		{
			echo mysqli_error($con);
			echo '<script type="text/javascript">
			alert("SORRY!There was some error while Registration!Verify the values you have entered!Please Try Again!");
			</script>';
		}
			
	?>
</html>