<?php
	echo '<script type="text/javascript">
		confirm("Are You Sure You Want To Delete Your Account?")
		 {
		</script>';
	$con=mysqli_connect("localhost","root","HkQFz53V31ghE3DF");
    $db=mysqli_select_db($con,"BVMPlacement");
	$email = $_REQUEST["email"];
	$sql="DELETE FROM student WHERE email='$email';";
	$query=mysqli_query($con,$sql);
	if($query)
	{
		echo '<script type="text/javascript">
		alert("Deleted Successfully!");
		</script>';
		header("refresh:1;url=index.php");
	}
	else
	{
		echo '<script type="text/javascript">
		}
		else
		{
		</script>';
		header("refresh:1;url=student_menu.php");
		exit("");
		echo '<script type="text/javascript">
		}
		</script>';
		//echo mysqli_error($con);
		echo '<script type="text/javascript">
		alert("SORRY!There was some error while deleting!Please Try Again!");
		</script>';
		header("refresh:1;url=index.php");
	}
?>