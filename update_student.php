<!DOCTYPE HTML>
	<html>
	<?php
		$con=mysqli_connect("localhost","","");
		$db=mysqli_select_db($con,"BVMPlacement");
		
			$name = $_POST['fname'];
			$dob=$_POST['dob'];
			$gender=$_POST['gender'];
			$id=$_POST['id'];
			$course=$_POST['course'];
			$passing_year=$_POST['passing_year'];
			$specialization = $_POST['specialization'];
			$cpi=$_POST['cpi'];
			$skill_set[]=$_POST['skill_set[]'];
			$resume_cv=$_POST['resume_cv'];
			$email=$_POST['email'];
			$phonenumber=$_POST['phonenumber'];
			$password = $_POST['pwd'];
			$password = md5($password);
			$confirmpassword = $_POST['cpwd'];
			$confirmpassword = md5($confirmpassword);
			$mid=mysql_query($con,"select m_id from tpc_member where role='T & P Faculty'");
		
		if(!empty($name)&&!empty($dob)&&!empty($gender)&&!empty($id)&&!empty($course)&&!empty($passing_year)&&!empty($specialization)&&!empty($cpi)&&!empty($skill_set)&&!empty($resume_cv)&&!empty($email)&&!empty($phonenumber)&&!empty($password))
			$sql="INSERT INTO student(enroll_no,password,student_name,phone_no,email,DOB,gender,graduation_type,CPI,resume_cv,skill_set,passing_year,specialization) VALUES ('$id','$password','$name','$phonenumber','$email','$dob','$gender','$course','$cpi','$resume_cv','$skill_set','$passing_year','$specialization');";

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