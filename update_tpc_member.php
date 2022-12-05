<!DOCTYPE HTML>
	<html>
	<?php
		$con=mysqli_connect("localhost","","");
		$db=mysqli_select_db($con,"BVMPlacement");
		
			$name = $_POST['name'];
			$id=$_POST['id'];
			$email=$_POST['email'];
			$role=$_POST['role'];
			$phonenumber=$_POST['phonenumber'];
			$password = $_POST['pwd'];
			$password = md5($password);
			$confirmpassword = $_POST['cpwd'];
			$confirmpassword = md5($confirmpassword);
		
		if(!empty($name)&&!empty($id)&&!empty($email)&&!empty($phonenumber)&&!empty($password)&&!empty($role))
			$sql="INSERT INTO tpc_member(m_id,password,email,name,role,phone_no) VALUES ('$id','$password','$email','$name','$role','$phonenumber');";

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