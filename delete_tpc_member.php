<?php
	$con=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($con,"BVMPlacement");
	$email = $_REQUEST["email"];
	$sql="DELETE FROM tpc_member WHERE email='$email'";
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
			echo mysqli_error($con);
			echo '<script type="text/javascript">
			alert("SORRY!There was some error while deleting!Please Try Again!");
			</script>';
			header("refresh:1;url=index.php");
		}
?>