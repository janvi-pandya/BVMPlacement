<?php
	include('index.php');
	$con=mysqli_connect("localhost","root","HkQFz53V31ghE3DF");
	$db=mysqli_select_db($con,"BVMPlacement");
	if($con)
	{
		if(isset($_REQUEST['submit4']))
		{
			$name = $_REQUEST['fname'];
			$dob=$_REQUEST['dob'];
			$gender=$_REQUEST['gender'];
			$id=$_REQUEST['id'];
			$course=$_REQUEST['course'];
			$passing_year=$_REQUEST['passing_year'];
			$specialization = $_REQUEST['specialization'];
			$cpi=$_REQUEST['cpi'];
			$skill_set=$_REQUEST['skill_set'];
			$file_name=$_FILES['file_data']['name'];
    		$file_type=$_FILES['file_data']['type'];
    		$file_data=file_get_contents($_FILES['file_data']['tmp_name']);
			$email=$_REQUEST['email'];
			$phonenumber=$_REQUEST['phonenumber'];
			$password = $_REQUEST['pwd'];
			$password = md5($password);
			$confirmpassword = $_REQUEST['cpwd'];
			$confirmpassword = md5($confirmpassword);
			$sql=mysqli_query($con,"SELECT `id` FROM `student` WHERE `id`='$id' OR `email`='$email';");
			if($row_st=mysqli_fetch_array($sql))
			{
				echo '<script type="text/javascript">
				alert("You Have Registered Already!LOGIN NOW!");
				</script>';
				header("refresh:1;url=index.php");
				exit(0);
			}
			$querym=mysqli_query($con,"SELECT `m_id` FROM `tpc_member` WHERE `role`='T & P Faculty' AND `assigned_students`<= 50 LIMIT 1;");
			if($row_st=mysqli_fetch_array($querym))
				$m_id=$row_st['m_id'];
	}
	if(!empty($name)&&!empty($dob)&&!empty($gender)&&!empty($id)&&!empty($course)&&!empty($passing_year)&&!empty($specialization)&&!empty($cpi)&&!empty($file_name)&&!empty($file_type)&&!empty($file_data)&&!empty($email)&&!empty($phonenumber)&&!empty($password)&&!empty($confirmpassword)&&!empty($skill_set))
		$sql="INSERT INTO student(id,password,student_name,phone_no,email,DOB,gender,course,CPI,file_name,file_type,file_data,passing_year,skill_set,specialization,m_id) VALUES ('$id','$password','$name','$phonenumber','$email','$dob','$gender','$course','$cpi','$file_name','$file_type','$file_data','$passing_year','$skill_set','$specialization','$m_id');";
	$query=mysqli_query($con,$sql);
	echo '<script type="text/javascript">
						alert("You Have Registered Successfully!");
					</script>';
	header("refresh:1;url=index.php");
	if($query)
	{
		$querym=mysqli_query($con,"UPDATE `tpc_member` SET `assigned_students`=`assigned_students`+1 WHERE `m_id`='$m_id';");
		require_once('phpmailer/Registration_mail.php');
	}
	exit("");
	else
	{
		//echo mysqli_error($con);
		echo '<script type="text/javascript">
		alert("SORRY!There was some error while Registration!Verify the values you have entered!Please Try Again!");
		</script>';
	}
}
else
{
	echo 'EXCEPTION:You Are Not Connected To The Server!';
}
?>